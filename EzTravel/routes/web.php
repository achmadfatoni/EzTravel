<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ez', 'EzController@index');

Route::get('/ez/tour/{tour}', 'EzController@showtour');

//Route::get('/ez/{id}', 'EzController@show');
