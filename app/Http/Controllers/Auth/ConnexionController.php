<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{

    public function login(Request $request)
    {
        // Valider les informations d'entrée
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tenter de connecter l'utilisateur
        if (Auth::attempt($credentials)) {
            // Si la connexion est réussie, Laravel gère la session automatiquement
            $request->session()->regenerate();

            return response()->json(['message' => 'Connexion réussie'], 200);
        }

        // Si les informations sont incorrectes, retourne une réponse avec une erreur
        return response()->json(['error' => 'Ces informations d\'identification ne correspondent pas'], 422);
    }

}
