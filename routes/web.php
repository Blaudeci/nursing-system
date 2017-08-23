<?php

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('/usuario', 'Painel\UserController');
Route::get('usuario/{id}/destroy', 'Painel\UserController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');