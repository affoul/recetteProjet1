<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    // Afficher la liste des recettes
    public function index()
    {
        $recettes = Recette::all();
        return view('recettes.index', compact('recettes'));
    }

    // Afficher le formulaire de création de recette
    public function create()
    {
        return view('recettes.create');
    }

    // Enregistrer une nouvelle recette
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'temps_de_dreparation' => 'required',
            'niveau_difficulte' => 'required',
            'description' => 'required',
            'etapes' => 'required',
        ]);

        Recette::create($request->all());

        return redirect()->route('recettes.index')->with('success', 'Recette ajoutée avec succès.');
    }

    // Afficher le formulaire d'édition
    public function edit(Recette $recette)
    {
        return view('recettes.edit', compact('recette'));
    }

    // Mettre à jour une recette
    public function update(Request $request, Recette $recette)
    {
        $request->validate([
            'titre' => 'required',
            'temps_de_dreparation' => 'required',
            'niveau_difficulte' => 'required',
            'description' => 'required',
            'etapes' => 'required',
        ]);

        $recette->update($request->all());

        return redirect()->route('recettes.index')->with('success', 'Recette mise à jour avec succès.');
    }

    // Supprimer une recette
    public function destroy(Recette $recette)
    {
        $recette->delete();

        return redirect()->route('recettes.index')->with('success', 'Recette supprimée avec succès.');
    }
    
}
