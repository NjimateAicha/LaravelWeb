@extends('layouts.app')

@section('content')
<style>
    p{
        color:#7777af;
    }
    h3{
        color:#7777af;
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

<div class="container mt-4"> <!-- Ajout de la classe mt-4 pour un espacement en haut -->
    <div class="row">
        <div class="col-md-6 mb-4"> <!-- Ajout de la classe mb-4 pour un espacement en bas -->
            <div class="input-container" id="quiz1Container">
                <h3>Quiz JavaScript</h3>
                <p>Testez vos connaissances en JavaScript en passant ce quiz.</p>
                <a href="{{ route('quiz.javascript') }}" class="btn btn-primary">Commencer le quiz JavaScript</a>
            </div>
        </div>
        <div class="col-md-6 mb-4"> <!-- Ajout de la classe mb-4 pour un espacement en bas -->
            <div class="input-container" id="quiz2Container">
                <h3>Quiz PHP</h3>
                <p>Testez vos connaissances en PHP en passant ce quiz.</p>
                <a href="{{ route('quiz.php') }}" class="btn btn-primary">Commencer le quiz PHP</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    @if($quizzes->isNotEmpty())
        <h2 class="mt-4">Détails des quiz précédents :</h2> <!-- Ajout de la classe mt-4 pour un espacement en haut -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Type de quiz</th>
                    <th>Score</th>
                    <th>Nombre de fois joué</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quizzes as $quiz)
                    <tr>
                        <td>{{ $quiz->quiz_type }}</td>
                        <td>{{ $quiz->score }}</td>
                        <td>{{ $quiz->played_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucun quiz précédent trouvé.</p>
    @endif
</div>

@endsection
