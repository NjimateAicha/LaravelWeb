@extends('layouts.app')

@section('content')
<style>
    h2 {
        color: #7777af;
    }
    .card-header {
        color: #fff;
        background-color: #7777af;
    }
    .custom-btn {
        color: #fff;
        background-color: #7777af;
        border: none;
    }
    .custom-btn:hover {
        background-color: #555577;
    }
    .card-title {
        color: #7777af;
    }
</style>
    <div class="container mt-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="text-center mb-4">Modifier l'étudiant</h2>
        <div class="row">
            <div class="col-md-6 ">
                <form action="{{ route('etudiant.update', $etudiant->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Utilisez cette directive pour spécifier la méthode PUT -->
    
                    <!-- Informations personnelles -->
                    <div class="card mb-3">
                        <div class="card-header">Informations Personnelles</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" class="form-control" id="nom" name="nom"
                                    value="{{ $etudiant->nom }}" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom :</label>
                                <input type="text" class="form-control" id="prenom" name="prenom"
                                    value="{{ $etudiant->prenom }}" required>
                            </div>
                            <div class="form-group">
                                <label for="cne">CNE :</label>
                                <input type="text" class="form-control" id="cne" name="cne"
                                    value="{{ $etudiant->cne }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <form action="{{ route('etudiant.update', $etudiant->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Utilisez cette directive pour spécifier la méthode PUT -->
            
                            <!-- Informations personnelles -->
                            <div class="card mb-3">
                                <div class="card-header">Informations Personnelles</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nom">Nom :</label>
                                        <input type="text" class="form-control" id="nom" name="nom"
                                            value="{{ $etudiant->nom }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">Prénom :</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom"
                                            value="{{ $etudiant->prenom }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cne">CNE :</label>
                                        <input type="text" class="form-control" id="cne" name="cne"
                                            value="{{ $etudiant->cne }}" required>
                                    </div>
                                </div>
                            </div>
                            <!-- Notes de modules -->
                            custom-btn
                            <div class="card mb-3">
                                <div class="card-header">Notes de Modules</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="note1">Module 1 :</label>
                                        <input type="number" class="form-control" id="note1" name="note1"
                                            value="{{ $etudiant->note1 }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="note2">Module 2 :</label>
                                        <input type="number" class="form-control" id="note2" name="note2"
                                            value="{{ $etudiant->note2 }}" required>
                                    </div>
                                </div>
                            </div>
            
                    <!-- Notes de modules -->
                    custom-btn
                    <div class="card mb-3">
                        <div class="card-header">Notes de Modules</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="note1">Module 1 :</label>
                                <input type="number" class="form-control" id="note1" name="note1"
                                    value="{{ $etudiant->note1 }}" required>
                            </div>
                            <div class="form-group">
                                <label for="note2">Module 2 :</label>
                                <input type="number" class="form-control" id="note2" name="note2"
                                    value="{{ $etudiant->note2 }}" required>
                            </div>
                        </div>
                    </div>
    
            
       
       
                <!-- Bouton Valider -->
                <button type="submit" class="btn custom-btn btn-block">Enregistrer les modifications</button>
            </form>
            <!-- Lien pour revenir à la liste des étudiants -->
            <p class="text-center mt-3"><a href="{{ route('etudiant.index') }}">Retour à la liste des étudiants</a></p>
        </div>
    </div>
@endsection
