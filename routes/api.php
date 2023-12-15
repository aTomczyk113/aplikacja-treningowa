<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('exercises', 'ExerciseController');
Route::resource('body-parts', 'BodyPartController');
Route::resource('difficulty-levels', 'DifficultyLevelController');
Route::middleware(['auth'])->post('/training-results', 'TrainingResultController@store');

Route::get('/example', 'ExampleController@index');


Route::get('/example', function () {
    return response()->json(['message' => 'To jest przykładowa odpowiedź z Laravela'], 200);
});
