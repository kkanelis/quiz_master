<?php
use App\Http\Controllers\ResultController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/register', [RegisterController::class, "create"])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, "create"])->name("login")->middleware("guest");
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::resource('quizzes', QuizController::class);
Route::get('/quizzes/play', [QuizController::class, 'play'])->name('quizzes.play');
Route::get('/quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');




Route::resource('questions', QuestionController::class);
Route::resource('results', ResultController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('quizzes', QuizController::class);
});