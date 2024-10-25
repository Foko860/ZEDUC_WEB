<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    // Affiche la liste des réclamations
    public function index()
    {
        $reclamations = Reclamation::all(); // Récupérer toutes les réclamations
        return view('htmlprojetweb.RéclamationEtudiant', compact('reclamations'));
    }

    // Affiche le formulaire pour créer une nouvelle réclamation
    public function create()
    {
        return view('RéclamationEtudiant.create');
    }

    // Enregistre une nouvelle réclamation
    public function store(Request $request)
    {
        $request->validate([
            'id_command' => 'required|integer',
            'nom_etudiant' => 'required|string|max:255',
            'type_reclamation' => 'required|string|max:255',
        ]);

        Reclamation::create($request->all()); // Créer une nouvelle réclamation
        return redirect()->route('reclamations.index')->with('success', 'Réclamation ajoutée avec succès.');
    }

    // Affiche le formulaire pour répondre à une réclamation
    public function edit($id_Produit)
    {
        $reclamation = Reclamation::findOrFail($id_Produit); // Récupérer la réclamation par ID
        return view('RéclamationEtudiant.edit', compact('reclamation'));
    }

    // Met à jour la réponse et le statut d'une réclamation
    public function update(Request $request, $id_Produit)
    {
        $request->validate([
            'reponse' => 'required|string',
            'statut' => 'required|string|in:validée,invalide',
        ]);

        $reclamation = Reclamation::findOrFail($id_Produit);
        $reclamation->update($request->all()); // Mettre à jour la réclamation
        return redirect()->route('reclamations.index')->with('success', 'Réclamation mise à jour avec succès.');
    }

    // Supprime une réclamation (si nécessaire)
    public function destroy($id_Produit)
    {
        $reclamation = Reclamation::findOrFail($id_Produit);
        $reclamation->delete(); // Supprimer la réclamation
        return redirect()->route('reclamations.index')->with('success', 'Réclamation supprimée avec succès.');
    }
}