@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Ajouter une nouvelle recette</h1>

        <form action="{{ route('recettes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="temps_de_dreparation" class="form-label">Temps de préparation</label>
                <input type="time" name="temps_de_dreparation" id="temps_de_dreparation" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="niveau_difficulte" class="form-label">Niveau de difficulté</label>
                <input type="text" name="niveau_difficulte" id="niveau_difficulte" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="etapes" class="form-label">Étapes</label>
                <textarea name="etapes" id="etapes" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter la recette</button>
        </form>
    </div>
@endsection
