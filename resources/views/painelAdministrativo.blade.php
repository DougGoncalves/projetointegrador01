@extends('layouts.master_layout')
@section('conteudo')

@if (!isset( $_SESSION["usuario"] ) )

<div class="container-formulario" style="margin-top: 40px;">
    <div class="row">
        <h2 style:"text-align:center"> Você não tem permissão para acessar essa página!</h2>
    </div>
</div>

@else

<h1 class="titulo-cadastro">Bem vindo, {{ $_SESSION["usuario"]}}! </h1>

    <div class="container-formulario">
        <h2 style="text-align:center;">Gostaria de acessar qual sessão ? </h2>
        <div style="text-align:center; margin-top: 40px;">
            <a href="/admin/pedidos" style="text-decoration:none; color: #000;font-size: 32px; font-weight:bold; margin-right:10px;">Pedidos</a>
            <a href="/admin/produto" style="text-decoration:none; color: #000; font-size: 32px; font-weight:bold; margin-right:10px;">Produtos</a>
            <a href="/admin/usuarios"style="text-decoration:none; color: #000; font-size: 32px; font-weight:bold;">Usuários</a>
        </div>
    </div>
    <div class="row">
        <a href="/" class="btn btn-primary" style="text-decoration:none; margin-bottom: 10px;"> <<< Home </a>
    </div>

@endif
@endsection
