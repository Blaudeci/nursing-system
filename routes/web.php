<?php

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('/usuario', 'Painel\UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');