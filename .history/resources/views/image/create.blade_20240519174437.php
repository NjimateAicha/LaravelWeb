@extends('layouts.app')
@section('content')
<style>
    h1{
        color: #7777af;
    }
    h1{
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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container">
        <br>
        <h1>Manipulation d'images avec les bases de données</h1>

        <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image_file" class="form-label">Choisir une image à insérer</label>
                <input type="file" class="form-control" name="image_file" required>
            </div>
            <button type="submit" class="btn  custom-btn  cus">Insérer Image</button>
        </form>

        <hr>

        <h2>Afficher toutes les images</h2>

        <div class="row">
            @foreach ($images as $ph)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $ph->nom }}</h5>
                            <img src="{{ asset('storage/images/' . $ph->nom) }}" class="card-img-top img-thumbnail" alt="{{ $ph->nom }}">
                            <div class="mt-2 d-flex">
                                <form action="{{ route('image.destroy', $ph->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer la photo ?')">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        
        
    </div>
@endsection

