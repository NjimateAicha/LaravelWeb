<?php

use App\Http\Controllers\AproposDeMoiController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\formulairesController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\JsController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MatriceController;
use App\Http\Controllers\PhpController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/projets', [ProjetController::class, 'index'])->name('projets.index');
Route::get('/aproposDeMoi', [AproposDeMoiController::class, 'index'])->name('aProposDeMoi.index');


/* CRUD Student */
Route::resource('/etudiant' ,EtudiantController::class );
/* CRUD image */
Route::resource('/image' ,ImageController::class );
/* CRUD Maps */
Route::resource('/map' ,MapController::class );
/* CRUD Charts */
Route::resource('/charts' ,ChartsController::class );
/* Matrice */
Route::resource('/matrice' ,MatriceController::class );
/* quiz */
Route::resource('/Quiz' ,QuizController::class );
Route::get('/quiz/javascript', [QuizController::class, 'javascriptQuiz'])->name('quiz.javascript');
Route::post('/quiz/calculateJS', [QuizController::class, 'calculateScoreJS'])->name('quiz.calculateJS');
Route::get('/quiz/php', [QuizController::class, 'phpQuiz'])->name('quiz.php');
Route::post('/quiz/calculatePHP', [QuizController::class, 'calculateScorePHP'])->name('quiz.calculatePHP');

