<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class ConnexionemployeController extends Controller
{
   
    public function authenticate(Request $request)
    {
        $request->validate([
            'id_Employe' => 'required|integer',
            'nom' => 'required|string'
        ]);

        // Rechercher un employé avec le `id_employe` et `nom` donnés
        $employe = Employe::where('id_Employe', $request->id_Employe)
                          ->where('nom', $request->nom)
                          ->first();

        // Vérifier si un employé correspondant a été trouvé
        if ($employe) {
            return response()->json(['success' => true, 'message' => 'Connexion réussie !']);
        } else {
            return response()->json(['success' => false, 'message' => 'ID ou nom incorrect.']);
        }
    }
}


