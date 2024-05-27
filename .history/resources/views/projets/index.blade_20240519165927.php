@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('matrice.index') }}" class="card clickable-card d-block mb-3 custom-card">
                    <div class="card-body">
                        <span class="blue-text">Manipulation de matrices avec Javascript</span>
                    </div>
                </a>
                <a href="{{ route('etudiant.create') }}" class="card clickable-card d-block mb-3 custom-card">
                    <div class="card-body">
                        <span class="blue-text">Manipulation de formulaires avec les fichiers (en PHP)</span>
                    </div>
                </a>
                <a href="{{ route('image.create') }}" class="card clickable-card d-block mb-3 custom-card">
                    <div class="card-body">
                        <span class="blue-text">Insertion et affichage d'images dans une base de données</span>
                    </div>
                </a>
                <a href="{{ route('Quiz.index') }} " class="card clickable-card d-block mb-3 custom-card">
                    <div class="card-body">
                        <span class="blue-text">Quiz</span>
                    </div>
                </a>
                <a href="{{ route('charts.index') }}" class="card clickable-card d-block mb-3 custom-card">
                    <div class="card-body">
                        <span class="blue-text">Statistiques avec chartJS</span>
                    </div>
                </a>
                <a href="{{ route('map.index') }}" class="card clickable-card d-block mb-3 custom-card">
                    <div class="card-body">
                        <span class="blue-text">Géolocalisation</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

<style>
    .custom-card {
        background-color: #7777af;
        color: white;
        transition: transform 0.2s;
        border: none;
    }

    .custom-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .custom-card .card-body {
        text-align: center;
        font-weight: bold;
    }

    .blue-text {
        color: #007bff; /* Couleur bleue pour le texte */
    }
</style>
