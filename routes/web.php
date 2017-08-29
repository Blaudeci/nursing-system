<?php

Route::get('/', function () {
    return view('auth/login');
});

/*CRUD Usuario*/
Route::resource('/usuario', 'Painel\UserController');
Route::get('usuario/{id}/destroy', 'Painel\UserController@destroy');

/*CRUD Paciente*/
Route::resource('/paciente', 'Painel\PacienteController');


/*CRUD Ocorrência*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');