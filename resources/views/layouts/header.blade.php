<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('../CSS/estilo.css')}}">
    <!-- CSS para pagina about -->
    <link rel="stylesheet" href="{{asset('../CSS/about.css')}}">
    <!-- CSS para pagina carrinho -->
    <link rel="stylesheet" type="text/css" href="{{asset('./CSS/carrinho.css')}}">
    <!-- CSS para pagina cadastro -->
    <link rel="stylesheet" href="{{asset('../CSS/cadastro.css')}}">
<link rel="shortcut icon" href="{{asset('../Assets/Icon/fav.ico')}}" type="image/x-icon">
    <title>Blend Tour</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $(".menu-toggle").click(function(){
                $(".chamadas").toggleClass("chamadas--open",500);
                $(this).toggleClass("open");
            })
        });
    </script>
</head>
<body>
    <header>
        <nav>
            <a href="/">
            <img id="logo"src="{{asset('../../Galeria/logos/logoadesivo.png')}}" alt="logo_blend">
            </a>
            <div>
            <ul class="chamadas">
                <li><a href="/about">Sobre</a></li>
                <li><a href="/experiencias">Experiências</a></li>
                <li><a href="/conheca">Conheça</a></li>
                <li><a href="/suaviagem">Sua Viagem</a></li>
            </ul>
            @if (!isset( $_SESSION["usuario"] ))
                </div>
                <a href="/register" id="cadastro">Cadastre-se</a>
                <div>
            @else
                </div>
                <a id="cadastro">Olá {{ $_SESSION["usuario"] }}</a>
                <div>
            @endif
            <form >
            <input type="search" name="busca" id="busca" placeholder="Busca..."><br>
                <button id="btn-busca"type="submit">Buscar</button>
            </form>
            <a href="/login">
                <input type="submit" id="btn-login" value="Login">
            </a>
            </div>
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
        </nav>
    </header>
    <main>
