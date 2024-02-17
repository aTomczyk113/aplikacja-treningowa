<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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

Route::get('/all-data', 'App\Http\Controllers\Api\AllDataController@index');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post("/add-new-statistic-to-user", 'App\Http\Controllers\Api\AllDataController@addNewStatToUser');
Route::post("/get-total-done-excercises", 'App\Http\Controllers\Api\AllDataController@getTotalDoneExcercise');
Route::post("/sendEmailWith", 'App\Http\Controllers\Api\AllDataController@sendEmailWith');

Route::post("/createNewExercise", 'App\Http\Controllers\Api\AllDataController@createNewExercise');
