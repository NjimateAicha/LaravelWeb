@extends('layouts.app')
@section('content')
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

        <h2 class="text-center mb-4">Formulaire</h2>
        <div class="col-md-6 mx-auto">
            <form action="{{ route('etudiant.store') }}" method="POST">
                @csrf
                <!-- Informations personnelles -->
                <div class="card mb-3">
                    <div class="card-header">Informations Personnelles</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom"
                                placeholder="Entrez votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom"
                                placeholder="Entrez votre prénom" required>
                        </div>
                        <div class="form-group">
                            <label for="cne">CNE :</label>
                            <input type="text" class="form-control" id="cne" name="cne"
                                placeholder="Entrez votre CNE" required>
                        </div>
                    </div>
                </div>
                <!-- Notes de modules -->
                <div class="card mb-3">
                    <div class="card-header">Notes de Modules</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="module1">Module 1 :</label>
                            <input type="number" class="form-control" id="module1" name="module1"
                                placeholder="Entrez la note de Module 1" required>
                        </div>
                        <div class="form-group">
                            <label for="module2">Module 2 :</label>
                            <input type="number" class="form-control" id="module2" name="module2"
                                placeholder="Entrez la note de Module 2" required>
                        </div>

                    </div>
                </div>
                <!-- Bouton Valider -->
                <button type="submit" class="btn v btn-blo.custom-btnk">Valider</button>
            </form>
            <!-- Lien pour consulter la liste -->
            <p class="text-center mt-3"><a href="{{ route('etudiant.index') }}">Consulter la liste</a></p>
        </div>
    </div>


@endsection

<style>
    h1{
        color: #7777af;
    }
    h2{
        color: #7777af;
    }
    .custom-btn {
        color: #fff;
        background-color: #7777af;
        border: none;
    }

    .custom-btn:hover {
        background-color: #555577;
    }
    .card-title{
        color: #7777af;
    }
</style>
