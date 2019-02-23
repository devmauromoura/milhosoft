<?php

use Illuminate\Support\Facades\View;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


/*	#### ROUTES PARA CONTROLE DE PÁGINAS ### */


Route::get('/home', 'HomeController@index')->name('home');

// Manipulação de Usuários

Route::group(['prefix' => '/usuario/', 'middleware' => 'auth'], function () {
    Route::get('/', 'UserController@show');
    Route::post('/create', 'UserController@create');
    Route::get('/{id}/edit', 'UserController@edit');
    Route::put('/{id}/update', 'UserController@update');
    Route::get('/{id}/delete', 'UserController@delete');

});

// Manipulação de Cursos

Route::group(['prefix' => '/curso/', 'middleware' => 'auth'], function () {
    Route::get('/', 'cursoController@show');
    Route::post('/create', 'cursoController@create');
    Route::get('/{id}/delete', 'cursoController@delete');
});

// Manipulação de Barracas

Route::group(['prefix' => '/barraca/'], function () {
    Route::post('/{id}', 'barracaController@post');
    Route::get('/{id}', 'barracaController@get');
    Route::put('/{id}', 'barracaController@put');
    Route::delete('/{id}', 'barracaController@delete');

});

// Manipulação de Pratos

Route::group(['prefix' => '/prato/', 'middleware' => 'auth'], function () {
    Route::post('/{id}', 'pratoController@post');
    Route::get('/{id}', 'pratoController@get');
    Route::put('/{id}', 'pratoController@put');
    Route::delete('/{id}', 'pratoController@delete');

});

// Manipulação de Votos

Route::group(['prefix' => '/voto/', 'middleware' => 'auth'], function () {
    Route::post('/{id}', 'votoController@post');
    Route::get('/{id}', 'votoController@get');

});

// Manipulação de Ficha

Route::group(['prefix' => '/ficha/', 'middleware' => 'auth'], function () {
    Route::post('/{id}', 'fichaController@post');
    Route::get('/{id}', 'fichaController@get');

});




/*	#### ROUTES PARA AUTENTICAÇÃO ### */

//Facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//Google
Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');
