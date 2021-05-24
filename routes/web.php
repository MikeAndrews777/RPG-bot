<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('testrpg');
});

Route::get('/home', function () {
    return view('testrpg');
});

Route::get('/play', 'Controller@index');
Route::get('/play/{encounter}', 'Controller@show');

// Example of non-elegant routing
Route::get('/characters', 'CharacterController@index');
Route::get('/characters/create', 'CharacterController@create');
Route::post('/characters', 'CharacterController@store');
Route::get('/characters/list', 'CharacterController@index');
Route::get('/characters/list/{character}', 'CharacterController@show');
Route::get('/characters/edit/{character}', 'CharacterController@edit');
Route::put('/characters/list/{character}', 'CharacterController@update');
Route::get('/characters/delete/{character}', 'CharacterController@destroy');

// Example of elegant routing
Route::resource('/encounters', 'EncounterController');

