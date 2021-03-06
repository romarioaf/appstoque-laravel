<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'ProdutoController@lista');

Route::get('/produto', 'ProdutoController@lista');
Route::get('/produto/json', 'ProdutoController@listaJson');
Route::get('/produto/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produto/novo', 'ProdutoController@novo');
Route::get('/produto/remove/{id}', 'ProdutoController@remove');
Route::post('/produto/adiciona', 'ProdutoController@adiciona');


//Route::get('/login', 'LoginController@formulario');
//Route::post('/login/auth', 'LoginController@login');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
