@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Modifier la recette</h1>

        <form action="{{ route('recettes.update', $recette->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ $recette->titre }}" required>
            </div>

            <div class="mb-3">
                <label for="temps_de_dreparation" class="form-label">Temps de préparation</label>
                <input type="time" name="temps_de_dreparation" id="temps_de_dreparation" class="form-control" value="{{ $recette->temps_de_dreparation }}" required>
            </div>

            <div class="mb-3">
                <label for="niveau_difficulte" class="form-label">Niveau de difficulté</label>
                <input type="text" name="niveau_difficulte" id="niveau_difficulte" class="form-control" value="{{ $recette->niveau_difficulte }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $recette->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="etapes" class="form-label">Étapes</label>
                <textarea name="etapes" id="etapes" class="form-control" required>{{ $recette->etapes }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour la recette</button>
        </form>
    </div>
@endsection
