<?php

namespace App\Http\Controllers;

use App\Models\Parrainage;
use Illuminate\Http\Request;

class ParrainageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$parrainages = Parrainage::all();
        return view('htmlprojetweb.parrainages');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parrainages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_parrain' => 'required|exists:users,id',
            'id_filleul' => 'required|exists:users,id',
            'date_parrainage' => 'required|date',
            'points_de_fidelites' => 'nullable|integer',
        ]);
    
        Parrainage::create($validated);
    
        return redirect()->route('parrainages.index')->with('success', 'Parrainage créé avec succès');
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
