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

Route::any('/pesquisa', 'ExperienciasController@search');

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

Route::get('/admin/usuarios', 'UsuarioController@index'); //CRUD Usuários
Route::get('/admin/usuario/create', 'UsuarioController@create'); //CRUD Usuários
Route::post('/admin/usuario/insert', 'UsuarioController@insert'); //CRUD Usuários
Route::get('/admin/usuario/{id}', 'UsuarioController@update');//CRUD Usuários
Route::post('/admin/usuario/{id}', 'UsuarioController@put');//CRUD Usuários
Route::get('/admin/usuario/excluir/{id}', 'UsuarioController@delete');//CRUD Usuários
Route::post('/admin/usuario/excluir/{id}', 'UsuarioController@remove');//CRUD Usuários

Route::get('/paypal', 'PayPalController@paypal')->name('paypal');//envia pagamento para paypal
Route::get('return-paypal', 'PayPalController@returnPayPal')->name('return.paypal');//retorna status de pagamento do paypal para o banco

//CRUD Pedidos
Route::get('/admin/pedidos', 'PedidoController@index'); //CRUD Pedidos
Route::get('/admin/pedido/{id}', 'PedidoController@details');//CRUD Pedidos
Route::get('/admin/pedido/excluir/{id}', 'PedidoController@delete');//CRUD Pedidos
Route::post('/admin/pedido/excluir/{id}', 'PedidoController@remove');//CRUD Pedidos

// Login
Route::post('/login', 'LoginController@checkLogin');


