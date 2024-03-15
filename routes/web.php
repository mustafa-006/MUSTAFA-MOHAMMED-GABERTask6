<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreController;
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


Route::get('/home', function () {
    return view('home');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/select', function () {
    return view('select');
});
Route::get('/teams', function () {
    return view('teams');
});
Route::get('/score', function () {
    return view('score');
});


Route::get('/one', function () {
    return view('./teams/teamone');
});
Route::get('/two', function () {
    return view('./teams/teamtwo');
});
Route::get('/three', function () {
    return view('./teams/teamthree');
});
Route::get('/four', function () {
    return view('./teams/teamfour');
});

Route::post('/add-score', [ScoreController::class, 'addScore'])->name('add.score');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::post('/show', 'App\Http\Controllers\ShowController@show')->name('show');
