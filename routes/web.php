<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/', function () {
    return view('iscrizione');
});

Route::resource('interessi', 'InteressiController');
Route::resource('contatti', 'ContattiController');