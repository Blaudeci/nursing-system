<?php

Route::get('/', function (){
    return view('auth/login');
});

Route::get('password/reset/{token}', function(){
	return view('auth.passwords.reset');
});

/*CRUD Usuario*/
Route::resource('/usuario', 'Painel\UserController');
Route::get('usuario/{id}/destroy', 'Painel\UserController@destroy');
Route::get('usuario/{id}/status_inativado', 'Painel\UserController@status_inativado');
Route::get('usuario/{id}/status_ativado', 'Painel\UserController@status_ativado');

/*CRUD Paciente*/
Route::resource('/paciente', 'Painel\PacienteController');
Route::get('paciente/{id}/destroy', 'Painel\PacienteController@destroy');
Route::get('paciente/{id}/show', 'Painel\PacienteController@show');
Route::get('paciente/{id}/status_inativado', 'Painel\PacienteController@status_inativado');
Route::get('paciente/{id}/status_ativado', 'Painel\PacienteController@status_ativado');

/*CRUD Ocorrência*/
Route::get('ocorrencia/index-create', 'Painel\OcorrenciaController@index_create');
Route::resource('/ocorrencia', 'Painel\OcorrenciaController');
Route::get('ocorrencia/{id}/create', 'Painel\OcorrenciaController@create');
Route::get('ocorrencia/{id}/destroy', 'Painel\OcorrenciaController@destroy');
Route::get('ocorrencia/{id}/show', 'Painel\OcorrenciaController@show');

/*Perfil User*/
Route::resource('/perfil', 'Painel\PerfilController');

/*Relatório*/
Route::resource('/relatorio', 'Painel\RelatorioController');

/*Gráfico*/
Route::resource('/graficos', 'Painel\GraficoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');