@extends('layouts.master_layout')
@section('conteudo')


<h1 class="titulo-cadastro">Bem vindo, Usuário ! </h1>

    <div class="container-formulario">
        <h2 style="text-align:center;">Gostaria de acessar qual sessão ? </h2>
        <div style="text-align:center; margin-top: 40px;">
            <a href="/admin/pedidos" style="text-decoration:none; color: #000;font-size: 32px; font-weight:bold; margin-right:10px;">Pedidos</a>
            <a href="/admin/produto" style="text-decoration:none; color: #000; font-size: 32px; font-weight:bold; margin-right:10px;">Produtos</a>
            <a href="/admin/usuarios"style="text-decoration:none; color: #000; font-size: 32px; font-weight:bold;">Usuários</a>
        </div>
    </div>
    
@endsection
