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
    <!-- CSS para pagina cadastro Interno -->
    <link rel="stylesheet" href="{{asset('../CSS/cadastroInterno.css')}}">
    <!-- CSS para pagina pesquisa -->
    <link rel="stylesheet" href="{{asset('../CSS/pesquisa.css')}}">


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
<body onkeydown="closedModal(event)">
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

            <?php
                // reabre sessão
                session_start();

                if (isset($_SESSION["time"]))
                {
                    if ($_SESSION["time"]<time())
                    {
                        session_destroy();
                    }
                } else {
                    session_destroy();
                }

            ?>

            @if (!isset( $_SESSION["usuario"] ) )
                </div>
                <a href="/register" id="cadastro">Cadastre-se</a>
                <div>
            @else
                </div>
                <a id="cadastro" href="/profile">Olá, {{ $_SESSION["usuario"]}}!</a>
                <div>

            @endif
            
            <form action="/pesquisa" method="GET">
            <input type="search" name="busca" id="busca" placeholder="Busca..." required><br>
                <button id="btn-busca"type="submit">Buscar</button>
            </form>

            @if (!isset( $_SESSION["usuario"] ))

            <a href="/login">
                <input type="submit" id="btn-login" value="Login">
            </a>

            @else

            <a href="/carrinho">
                <input type="submit" id="btn-login" value="Carrinho">
            </a>

            @endif

            </div>
            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
        </nav>
    </header>
    <main>
