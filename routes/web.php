<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clicked', function(){
	return "You have been clicked, punk";
});

Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');

