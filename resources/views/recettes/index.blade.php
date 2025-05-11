@extends('layouts2.recette')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-5">Nos Recettes</h1>

        <div class="row">
            @foreach ($recettes as $recette)
                <div class="col-md-6 mb-4">
                    <a href="{{ route('recettes.show', $recette->id) }}" class="text-decoration-none">
                        <div class="card mb-3 bg-light text-dark border border-primary" style="max-width: 540px;">
                            <div class="row g-0">
                                {{-- Image de la recette --}}
                                <div class="col-md-4">
                                    <img src="{{ asset('images/' . $recette->image) }}" class="img-fluid rounded-start" alt="{{ $recette->titre }}">
                                </div>

                                {{-- Détails de la recette --}}
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">{{ $recette->titre }}</h5>
                                        <p class="card-text">
                                            <strong>⏱ Temps :</strong> {{ $recette->temps_de_dreparation }} min<br>
                                            <strong>🎯 Difficulté :</strong> {{ $recette->niveau_difficulte }}
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">Dernière mise à jour : {{ $recette->updated_at->diffForHumans() }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
