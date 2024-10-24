<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit; // Assurez-vous que votre modèle Produit est importé

class CartController extends Controller
{
    public function addToCart(Request $request, $id_Produit)
    {
        // Logique pour ajouter le produit au panier
        $plat = Produit::find($id_Produit);

        if (!$plat) {
            return redirect()->back()->with('error', 'Produit introuvable');
        }

        // Ajouter le produit au panier (logique à ajuster selon votre implémentation)
        // Vous pouvez utiliser des sessions pour stocker temporairement les données du panier
        $cart = session()->get('cart', []);

        // Si le produit existe déjà dans le panier, incrémenter la quantité
        if (isset($cart[$id_Produit])) {
            $cart[$id_Produit]['quantity']++;
        } else {
            $cart[$id_Produit] = [
                "name" => $plat->nom,
                "price" => $plat->prix,
                "quantity" => 1,
                "image" => $plat->image_url
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produit ajouté au panier');
    }
}