<?php

use illuminate\Support\Facades\Route;


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
// Route::get('/experiencias/categoria/{id}', 'ExperienciasController@show');

Route::get('/produto', 'ProdutoController@index');

Route::get('/admin/produto', 'ProdutoController@admin');
Route::get('/admin/produto/create', 'ProdutoController@create' );
Route::post('/admin/produto/insert', 'ProdutoController@insert');
Route::get('admin/produtos/{id}', 'ProdutoController@update');
Route::post('admin/produtos/{id}', 'ProdutoController@put');
Route::get('admin/produtos/excluir/{id}', 'ProdutoController@delete');
Route::post('admin/produtos/excluir/{id}', 'ProdutoController@remove');

Route::get('/carrinho', 'CarrinhoController@index');

Route::get('/cadastrointerno', 'CadastrointernoController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/register/insert', 'RegisterController@insert');
Route::post('/cadastrointerno/{id}', 'CadastrointernoController@update');


