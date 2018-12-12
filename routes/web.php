<?php

Route::get('/', function () {

	$name = config('app.name');

	dd($name);

    return view('welcome');
});
