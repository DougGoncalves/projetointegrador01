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

Route::get('/', 'IndexController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/suaviagem', 'SuaviagemController@index')->name('suaviagem');

Route::get('/conheca','ConhecaController@index')->name('conheca');

Route::get('/experiencias', 'ExperienciasController@index')->name('experiencias');
Route::get('/produtos/{id}', 'ExperienciasController@show'); //vai para página interna do produto, listando por id

Route::get('/admin/produto', 'ProdutoController@admin'); //CRUD Produtos
Route::get('/admin/produto/create', 'ProdutoController@create' );//CRUD Produtos
Route::post('/admin/produto/insert', 'ProdutoController@insert');//CRUD Produtos
Route::get('admin/produtos/{id}', 'ProdutoController@update');//CRUD Produtos
Route::post('admin/produtos/{id}', 'ProdutoController@put');//CRUD Produtos
Route::get('admin/produtos/excluir/{id}', 'ProdutoController@delete');//CRUD Produtos
Route::post('admin/produtos/excluir/{id}', 'ProdutoController@remove');//CRUD Produtos

Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho');
Route::get('/addcarrinho/{id}', 'CarrinhoController@addToCart')->name('add.carrinho');//envia as informações do produto para o carrinho
Route::get('/removecarrinho/{id}', 'CarrinhoController@decrement')->name('decrement.carrinho'); //diminui quantidade de items adicionados ao carrinho
Route::get('/deletecarrinho/{id}', 'CarrinhoController@remove')->name('remove.carrinho');// remove item por completo do carrinho

Route::get('/cadastrointerno', 'CadastrointernoController@index');

Auth::routes();

Route::post('/register/insert', 'RegisterController@insert');
Route::post('/cadastrointerno/{id}', 'CadastrointernoController@update');

Route::get('/admin/usuarios', 'UsuarioController@index');
Route::get('/admin/usuario/create', 'UsuarioController@create');
Route::post('/admin/usuario/insert', 'UsuarioController@insert');
Route::get('/admin/usuario/{id}', 'UsuarioController@update');
Route::post('/admin/usuario/{id}', 'UsuarioController@put');
Route::get('/admin/usuario/excluir/{id}', 'UsuarioController@delete');
Route::post('/admin/usuario/excluir/{id}', 'UsuarioController@remove');

Route::get('paypal', 'PayPalController@paypal')->name('paypal');
Route::get('return-paypal', 'PayPalController@returnPayPal')->name('return.paypal');

Route::get('pagseguro', 'PagSeguroController@pagseguro')->name('pagseguro');
