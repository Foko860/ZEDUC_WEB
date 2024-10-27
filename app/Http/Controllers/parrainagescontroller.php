<?php

namespace App\Http\Controllers;

use App\Models\Parrainage;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ParrainageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Récupérer l'utilisateur authentifié
         $user = auth()->user();

         // Générer un code de parrainage unique
         $codeParrainage = $this->generateParrainageCode($user);
 
         // Générer un QR code
         $qrCode = QrCode::size(200)->generate($codeParrainage);
 
         // Retourner la vue avec les données
         return view('htmlprojetweb.parrainage', compact('user', 'codeParrainage', 'qrCode'));
     }
 
     // Méthode pour générer un code de parrainage unique
     private function generateParrainageCode(User $user)
     {
         // Exemple de génération : utiliser l'ID de l'utilisateur et un hash
         return strtoupper(substr(md5($user->id . now()), 0, 10));
     }
 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $parrainage = Parrainage::findOrFail($id);
        return view('parrainages.edit', compact('parrainage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'id_parrain' => 'required|exists:users,id',
            'id_filleul' => 'required|exists:users,id',
            'date_parrainage' => 'required|date',
            'points_de_fidelites' => 'nullable|integer',
        ]);
    
        $parrainage = Parrainage::findOrFail($id);
        $parrainage->update($validated);
    
        return redirect()->route('parrainages.index')->with('success', 'Parrainage mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parrainage = Parrainage::findOrFail($id);
        $parrainage->delete();
    
        return redirect()->route('parrainages.index')->with('success', 'Parrainage supprimé avec succès');
    }
}
