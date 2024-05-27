@extends('layouts.app')
@section('content')
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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{-- <div class="container">
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
                            <img src="{{ asset('http://127.0.0.1:8000/storage/images/' . $ph->nom) }}" class="card-img-top img-thumbnail" alt="{{ $ph->nom }}">
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
 --}}


 <div class="container">
    <br>
    <h1>Manipulation d'images avec les bases de données</h1>

    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image_file" class="form-label">Choisir une image à insérer</label>
            <input type="file" class="form-control" name="image_file" required>
        </div>
        <button type="submit" class="btn custom-btn cus">Insérer Image</button>
    </form>

    <hr>

    <h2>Afficher toutes les images</h2>

    <div class="row">
        @foreach ($images as $image)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->nom }}</h5>
                        <img src="data:image/jpeg;base64,{{ base64_encode($image->bin_img) }}" class="card-img-top img-thumbnail" alt="{{ $image->nom }}">
                        <div class="mt-2 d-flex">
                            <form action="{{ route('image.destroy', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer l\'image ?')">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
@endsection


<script>
     public function phpQuiz()
    {
        $questions = [
            [
                'question' => 'Quel est le principal langage de programmation utilisé pour le développement web ?',
                'options' => ['JavaScript', 'Python', 'Java', 'C++'],
                'answer' => 'JavaScript'
            ],
            [
                'question' => 'Quelle méthode est utilisée pour ajouter un élément à la fin d\'un tableau en JavaScript ?',
                'options' => ['push()', 'append()', 'addToEnd()', 'insertAtEnd()'],
                'answer' => 'push()'
            ],
            [
                'question' => 'Quel est le mot-clé utilisé pour déclarer une variable en JavaScript ?',
                'options' => ['var', 'let', 'const', 'tous les choix précédents'],
                'answer' => 'var'
            ],
            [
                'question' => 'Quelle est la fonction utilisée pour convertir une chaîne de caractères en entier en JavaScript ?',
                'options' => ['parseInt()', 'convertToInt()', 'toInteger()', 'stringToInt()'],
                'answer' => 'parseInt()'
            ],
            [
                'question' => 'Quelle est la fonction utilisée pour afficher une boîte de dialogue avec un message en JavaScript ?',
                'options' => ['prompt()', 'messageBox()', 'alert()', 'displayMessage()'],
                'answer' => 'alert()'
            ],
            [
                'question' => 'Comment fait-on une boucle for en JavaScript ?',
                'options' => ['for (condition) { instructions }', 'for (initialisation; condition; itération) { instructions }', 'loop { instructions } while (condition)', 'foreach (élément dans tableau) { instructions }'],
                'answer' => 'for (initialisation; condition; itération) { instructions }'
            ],

        ];
        Session::put('questions', $questions);

        return view('Quiz.php', ['questions' => $questions]);
    }

    public function calculateScoreJS(Request $request)
    {
        // Récupérer les questions depuis la session
        $questions = Session::get('questions');
    
        $answers = $request->input('answers');
        $score = 0;
    
        // Calculer la note en comparant les réponses de l'utilisateur avec les réponses correctes
        foreach ($answers as $questionId => $selectedAnswer) {
            // Récupérer la réponse correcte pour la question correspondante
            $correctAnswer = $questions[$questionId]['answer'];
    
            // Vérifier si la réponse de l'utilisateur est correcte
            if ($selectedAnswer === $correctAnswer) {
                $score++;
            }
        }
    
        // Enregistrer le score de l'utilisateur dans la base de données
        $quiz = new Quiz();
        $quiz->quiz_type = 'JS'; 
        $quiz->score = $score;
    
        // Compter le nombre de fois que l'utilisateur a joué à ce type de quiz
        $playedCount = Quiz::where('quiz_type', 'JS') 
                            ->where('user_id', Auth::id())
                            ->count();
    
        // Incrémenter le nombre de fois joué de 1
        $quiz->played_count = $playedCount + 1;
    
        $quiz->user_id = Auth::id(); // Récupérer l'ID de l'utilisateur actuellement connecté
    
        $quiz->save();
    
        
        return redirect()->route('Quiz.index');
    }
</script>