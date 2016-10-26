<?php

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::get('/busca-video', ['as' => 'busca-video', 'uses' => 'Dashboard\DashboardController@buscarVideo']);
    Route::get('/lecionar', ['as' => 'lecionar', 'uses' => 'Dashboard\DashboardController@getLecionar']);
    Route::post('/lecionar/sala', ['as' => 'sala', 'uses' => 'Dashboard\DashboardController@entrarSala']);

    Route::get('/lecionar/sala/aula', ['as' => 'aula', 'uses' => 'Dashboard\DashboardController@getAula']);
    Route::get('/', ['as' => 'dashboard', 'uses' => 'Dashboard\DashboardController@index']);
});

Route::get('/login', ['as'=>'login', 'uses' => 'Auth\AuthController@index']);
Route::post('/login', ['as'=>'login', 'uses' => 'Auth\AuthController@login']);
Route::get('/logout', ['as'=>'logout', 'uses' => 'Auth\AuthController@logout']);

Route::get('/sida', ['as' => 'sida', 'uses' => 'Site\SiteController@sida']);
Route::get('/contato', ['as'=>'contato', 'uses'=>'Site\SiteController@contato']);
Route::get('/', ['as'=>'home', 'uses'=>'Site\SiteController@index']);