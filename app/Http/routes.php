<?php

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::get('/busca-video', ['as' => 'busca-video', 'uses' => 'Dashboard\DashboardController@buscarVideo']);
    Route::get('/lecionar', ['as' => 'lecionar', 'uses' => 'Dashboard\DashboardController@getLecionar']);
    Route::post('/lecionar/sala', ['as' => 'sala', 'uses' => 'Dashboard\DashboardController@entrarSala']);

    Route::get('/manual', ['as' => 'manual', 'uses' => 'Dashboard\DashboardController@getManual']);
    Route::get('/sugestoes', ['as' => 'sugestoes', 'uses' => 'Dashboard\DashboardController@getSugestoes']);
    Route::get('/lecionar/sala/aula', ['as' => 'aula', 'uses' => 'Dashboard\DashboardController@getAula']);

    Route::get('/sala', ['as' => 'sala-aluno', 'uses' => 'Dashboard\DashboardController@entrarSalaAluno']);
    Route::get('/revisao-escolar', ['as' => 'revisao-escolar', 'uses' => 'Dashboard\DashboardController@getRevisaoEscolar']);
    Route::get('/', ['as' => 'dashboard', 'uses' => 'Dashboard\DashboardController@index']);
});

Route::get('/login', ['as'=>'login', 'uses' => 'Auth\AuthController@index']);
Route::post('/login', ['as'=>'login', 'uses' => 'Auth\AuthController@login']);
Route::get('/logout', ['as'=>'logout', 'uses' => 'Auth\AuthController@logout']);

Route::get('/sida', ['as' => 'sida', 'uses' => 'Site\SiteController@sida']);
Route::get('/contato', ['as'=>'contato', 'uses'=>'Site\SiteController@contato']);
Route::get('/alfabetizacao', ['as' => 'alfabetizacao', 'uses'=>'Site\SiteController@getAlfabetizacao']);
Route::get('/', ['as'=>'home', 'uses'=>'Site\SiteController@index']);