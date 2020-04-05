@extends('layouts.admin_layout')
@section('content')
<?php session_start(); ?>

@if (!isset( $_SESSION["usuario"] ) )

<div class="container-formulario" style="margin-top: 40px;">
    <div class="row">
        <h2 style="text-align:center"> Você não tem permissão para acessar essa página!</h2>
    </div>
</div>

@else

<h1 class="titulo-cadastro">Bem vindo, {{ $_SESSION["usuario"] }}! </h1>

    <section class="container-formulario">
        <div style="text-align:center; margin-top: 40px;">
            <a href="/profile/meuperfil" style="text-decoration:none; color: #000;font-size: 20px; font-weight:bold; margin-right:10px;">Meu Perfil |</a>
            <a href="/profile/meuspedidos" style="text-decoration:none; color: #000;font-size: 20px; font-weight:bold; margin-right:10px;">Meus Pedidos |</a>
            <a href="/profile/logout"style="text-decoration:none; color: #000; font-size: 20px; font-weight:bold;">Sair</a>
        </div>
    </section>
    <div class="row">
        <a href="/" class="btn btn-primary" style="text-decoration:none; margin-bottom: 10px;"> <<< Home </a>
    </div>

@endif
@endsection
