<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, "create"])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, "create"])->name("login")->middleware("guest");
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
=======
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;

>>>>>>> a1bfed0 (Modeli done)

Route::get('/', function () {
    return view('welcome');
});
Route::resource('quizzes', QuizController::class);
Route::resource('questions', QuestionController::class);
Route::resource('results', ResultController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('quizzes', QuizController::class);
});