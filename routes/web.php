<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/treningi', [TrainingController::class, 'index'])->name('wybierz-trening')->middleware('auth');

Route::get('/treningi/{bodyPart}', [TrainingController::class, 'showBodyPartExercises'])->middleware('auth')->name('showBodyPartExercises');

Route::get('/cwiczenia/{bodyPart}/{difficulty}', [TrainingController::class, 'showExercises'])->middleware('auth')->name('showExercises');

Route::get('/exercises/{bodyPart}/{difficulty}', [TrainingController::class, 'showExercises'])->name('showExercises');

Route::get('/chooseDifficulty/{bodyPart}', [TrainingController::class, 'chooseDifficulty'])->name('chooseDifficulty');


