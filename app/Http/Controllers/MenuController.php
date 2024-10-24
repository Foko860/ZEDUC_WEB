<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Méthode pour afficher le menu public
    public function index()
    {
        return view('menu'); // Assurez-vous que le fichier menu.blade.php existe dans resources/views
    }

    // Méthode pour afficher la page de gestion du menu
    public function showGestionMenu()
    {
        $plats = Produit::all(); // Récupérer tous les plats
        return view('htmlprojetweb.menugestion', compact('plats'));
    }

    // Méthode pour ajouter un plat
    public function ajouterPlat(Request $request)
    {
        // Valider les données reçues
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'quantite' => 'required|integer',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }

    

        // Créer un nouveau produit
        $plat = new Produit();
        $plat->nom = $request->nom;
        $plat->prix = $request->prix;
        $plat->quantite = $request->quantite;
        $plat->photo = $imagePath; // Stocker le chemin de l'image
        $plat->save();

        return redirect()->route('gestion-menu')->with('success', 'Plat ajouté avec succès');
    }

    

    // Méthode pour modifier un plat existant
    public function modifierPlat(Request $request, $id_Produit)
    {
        // Valider les données reçues
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'quantite' => 'required|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // L'image est optionnelle pour la modification
        ]);

        // Trouver le plat à modifier
        $plat = Produit::find($id_Produit);

        // Gérer l'upload de l'image si une nouvelle image est fournie
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
            $plat->photo = $imagePath; // Mettre à jour le chemin de l'image
        }

        // Mettre à jour les autres champs
        $plat->nom = $request->nom;
        $plat->prix = $request->prix;
        $plat->quantite = $request->quantite;
        $plat->save();

        return redirect()->route('gestion-menu')->with('success', 'Plat modifié avec succès');
    }

    // Méthode pour supprimer un plat
    public function supprimerPlat($id_Produit)
    {
        $plat = Produit::find($id_Produit);
        $plat->delete();

        return redirect()->route('gestion-menu')->with('success', 'Plat supprimé avec succès');
    }

    // Méthode pour afficher le menu public avec tous les plats
    public function showMenu()
    {
        $plats = Produit::all(); // Récupérer tous les plats
        return view('menu', compact('plats'));
    }
}
