<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AllDataController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/example', function () {
    return response()->json(['message' => 'To jest przykładowa odpowiedź z Laravela'], 200);
});


Route::get('/all_data', 'App\Http\Controllers\Api\AllDataController@index');
Route::get('/stats', 'App\Http\Controllers\Api\AllDataController@stats');
Route::get('/exercises', 'App\Http\Controllers\Api\AllDataController@getAllExercises');
Route::get('/body_parts', 'App\Http\Controllers\Api\AllDataController@getAllBodyParts');
Route::get('/difficulty_levels', 'App\Http\Controllers\Api\AllDataController@getAllDifficultyLevels');

Route::get('/users', 'App\Http\Controllers\Api\AllDataController@getAllUsers');

Route::get('/top-performers', 'App\Http\Controllers\Api\AllDataController@getTopPerformers');


Route::get('/new/exercises', [AllDataController::class, 'getExercises']);
Route::post('/new/exercises', [AllDataController::class, 'storeExercise']);
Route::get('/new/exercises/{id}', [AllDataController::class, 'getExercise']);
Route::put('/new/exercises/{id}', [AllDataController::class, 'updateExercise']);
Route::delete('/new/exercises/{id}', [AllDataController::class, 'deleteExercise']);
