<?php

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('welcome', 'WelcomeController@envioCorreo')->name('contactanos-correo');

// Auth::routes();

Auth::routes(["register" => false]);