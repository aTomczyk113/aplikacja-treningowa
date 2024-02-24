<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/top-performers', [HomeController::class, 'getTopPerformers'])->name('top-performers');

Route::get('/treningi', [TrainingController::class, 'index'])->name('wybierz-trening')->middleware('auth');

Route::get('/treningi/{bodyPart}', [TrainingController::class, 'showBodyPartExercises'])->middleware('auth')->name('showBodyPartExercises');

Route::get('/cwiczenia/{bodyPart}/{difficulty}', [TrainingController::class, 'showExercises'])->middleware('auth')->name('showExercises');

Route::get('/exercises/{bodyPart}/{difficulty}', [TrainingController::class, 'showExercises'])->name('showExercises');

Route::get('/chooseDifficulty/{bodyPart}', [TrainingController::class, 'chooseDifficulty'])->name('chooseDifficulty');

Route::post('/exercise/next/{bodyPartId}/{difficultyLevelId}', [ExerciseController::class, 'nextExercise'])->name('exercise.next')->middleware('auth');


