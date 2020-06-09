<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'indexController@index');

# Rotas para senha única
Route::get('login', 'LoginController@redirectToProvider');
Route::get('callback', 'LoginController@handleProviderCallback');
Route::get('logout', 'LoginController@logout');
