<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');

Route::get('/about', 'AboutController@index');

Route::get('/suaviagem', 'SuaviagemController@index');

Route::get('/conheca','ConhecaController@index');

Route::get('/experiencias', 'ExperienciasController@index');

Route::get('/produto', 'ProdutoController@index');

Route::get('/carrinho', 'CarrinhoController@index');

Route::get('/cadastrointerno', 'CadastrointernoController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


