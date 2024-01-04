<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::get('/all_data', 'App\Http\Controllers\Api\AllDataController@index');
Route::get('/stats', 'App\Http\Controllers\Api\AllDataController@stats');
Route::get('/exercises', 'App\Http\Controllers\Api\AllDataController@getAllExercises');
Route::get('/body_parts', 'App\Http\Controllers\Api\AllDataController@getAllBodyParts');
Route::get('/difficulty_levels', 'App\Http\Controllers\Api\AllDataController@getAllDifficultyLevels');
Route::get('/users', 'App\Http\Controllers\Api\AllDataController@getAllUsers');

