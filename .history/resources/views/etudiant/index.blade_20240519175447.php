@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des étudiants</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>CNE</th>
                    <th>Note 1</th>
                    <th>Note 2</th>
                    <th>Moyenne</th> 
                    <th>Actions</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $student)
                    <tr>
                        <td>{{ $student->nom }}</td>
                        <td>{{ $student->prenom }}</td>
                        <td>{{ $student->cne }}</td>
                        <td>{{ $student->note1 }}</td>
                        <td>{{ $student->note2 }}</td>
                        <td>{{ $student->moyenne() }}</td> 
                        <td>
                            <a href="{{ route('etudiant.edit', $student->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                            <form action="{{ route('etudiant.destroy', $student->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Ajouter un étudiant</a>
       
        <a href="{{ route('charts.index') }}" class="btn btn-primary">Voir les statistiques </a>

    </div>
@endsection

<style>
    
</style>