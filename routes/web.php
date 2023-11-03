<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\KlatkaController;
use App\Http\Controllers\PlecyController;
use App\Http\Controllers\NogiController;
use App\Http\Controllers\BicepsController;
use App\Http\Controllers\PoczątkującyController;
use App\Http\Controllers\ŚredniController;
use App\Http\Controllers\ZaawansowanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/treningi', [TrainingController::class, 'index'])->name('wybierz-trening')->middleware('auth');

Route::get('/klatka', 'KlatkaController@index')->name('klatka');
Route::get('/klatka/początkujący', 'KlatkaController@początkujący')->name('klatka-początkujący');
Route::get('/klatka/średni', 'KlatkaController@średni')->name('klatka-średni');
Route::get('/klatka/zaawansowany', 'KlatkaController@zaawansowany')->name('klatka-zaawansowany');


Route::get('/plecy', 'PlecyController@index')->name('plecy');
Route::get('/plecy/początkujący', 'PlecyController@początkujący')->name('plecy-początkujący');
Route::get('/plecy/średni', 'PlecyController@średni')->name('plecy-średni');
Route::get('/plecy/zaawansowany', 'PlecyController@zaawansowany')->name('plecy-zaawansowany');

Route::get('/nogi', 'NogiController@index')->name('nogi');
Route::get('/nogi/początkujący', 'NogiController@początkujący')->name('nogi-początkujący');
Route::get('/nogi/średni', 'NogiController@średni')->name('nogi-średni');
Route::get('/nogi/zaawansowany', 'NogiController@zaawansowany')->name('nogi-zaawansowany');


Route::get('/biceps', 'BicepsController@index')->name('biceps');
Route::get('/biceps/początkujący', 'BicepsController@początkujący')->name('biceps-początkujący');
Route::get('/biceps/średni', 'BicepsController@średni')->name('biceps-średni');
Route::get('/biceps/zaawansowany', 'BicepsController@zaawansowany')->name('biceps-zaawansowany');


Route::get('/początkujący', 'PoczątkującyController@index')->name('początkujący');
Route::get('/średni', 'ŚredniController@index')->name('średni');
Route::get('/zaawansowany', 'ZaawansowanyController@index')->name('zaawansowany');



