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
        <div class="Row">
            
        </div>
       
                <!-- Bouton Valider -->
                <button type="submit" class="btn custom-btn btn-block">Enregistrer les modifications</button>
            </form>
            <!-- Lien pour revenir à la liste des étudiants -->
            <p class="text-center mt-3"><a href="{{ route('etudiant.index') }}">Retour à la liste des étudiants</a></p>
        </div>
    </div>
@endsection
