<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employe;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // Affiche la liste des employés
    public function index()
    {
        $employes = Employe::all(); // Récupérer tous les employés
        return view('htmlprojetweb.Gestionemployé', compact('employes'));
    }

    // Affiche le formulaire de création d'un employé
    public function create()
    {
        return view('Gestionemployé.create');
    }

    // Enregistre un nouvel employé
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:employe,email',
            'poste' => 'required|string|max:255',
        ]);

        Employe::create($request->all()); // Créer un nouvel employé
        return redirect()->route('employes.index')->with('success', 'Employé ajouté avec succès.');
    }

    // Affiche le formulaire d'édition d'un employé
    public function edit($id_Employe)
    {
        $employe = Employe::findOrFail($id_Employe); // Récupérer l'employé par ID
        return view('Gestionemployé.edit', compact('employe'));
    }

    // Met à jour les informations d'un employé
    public function update(Request $request, $id_Employe)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:employe,email,' . $id_Employe,
            'poste' => 'required|string|max:255',
        ]);

        $employe = Employe::findOrFail($id_Employe);
        $employe->update($request->all()); // Mettre à jour l'employé
        return redirect()->route('employes.index')->with('success', 'Employé mis à jour avec succès.');
    }

    // Supprime un employé
    public function destroy($id_Employe)
    {
        $employe = Employe::findOrFail($id_Employe);
        $employe->delete(); // Supprimer l'employé
        return redirect()->route('employes.index')->with('success', 'Employé supprimé avec succès.');
    }
}
