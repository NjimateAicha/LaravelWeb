<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{



    public function index()
    {
        $quizzes = Quiz::where('user_id', Auth::id())->get();

         return view('Quiz.index', ['quizzes' => $quizzes]);
    }

    public function javascriptQuiz()
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

        return view('Quiz.js', ['questions' => $questions]);
    }
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
    
    public function calculateScorePHP(Request $request)
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
        $quiz->quiz_type = 'PHP'; 
        $quiz->score = $score;
    
        // Compter le nombre de fois que l'utilisateur a joué à ce type de quiz
        $playedCount = Quiz::where('quiz_type', 'PHP') 
                            ->where('user_id', Auth::id())
                            ->count();
    
        // Incrémenter le nombre de fois joué de 1
        $quiz->played_count = $playedCount + 1;
    
        $quiz->user_id = Auth::id(); // Récupérer l'ID de l'utilisateur actuellement connecté
    
        $quiz->save();
    
        
        return redirect()->route('Quiz.index');
    }
    
}
