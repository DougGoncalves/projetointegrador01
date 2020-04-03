@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo">Carrinho de Compras</h1>
<!-- Exibe mensagem de alerta de confirmação de pedido-->
@if (session('message'))

<div class="alert alert-sucess">
    {{session('message')}}
</div>

@endif

<section class="container-carrinho">
    <div class="cart-container">
        <div class="cart-body">
            <div class="cart-item">

                @forelse($produtos as $produto)

                <div class="cart-row">
                    <div class="cart-row-cell pic">
                        <a href="/deletecarrinho/{{$produto['item']->id_experiencia}}">-</a>
                        <img src="{{$produto['item']->imagem}}" alt="">
                    </div>
                    <div class="cart-row-cell desc">
                        <h5>{{$produto['item']->nome}}</h5>
                    </div>
                    <div class="cart-row-cell quant">
                        <ul>
                            <li><a href="/removecarrinho/{{$produto['item']->id_experiencia}}">-</a></li>
                            <li>{{$produto['qtd']}}</li>
                            <li><a href="/addcarrinho/{{$produto['item']->id_experiencia}}">+</a></li>
                        </ul>
                    </div>
                    <div class="cart-row-cell amount">
                        <p>R$ {{ number_format($produto['item']->preco, 2, ',', '.')}}</p>
                    </div>
                </div>

                @empty

                    <div class="cart-row-cell desc " style=" text-align:center;">
                        <h2>Seu carrinho está vazio!</h2>
                    </div>

                @endforelse

                @if ( Session::has('cart') && Session::get('cart')->totalItems() >=1 )

                <div class="totals">
                    <p class="total-label">Subtotal</p>
                    <p class="total-amount">R$ {{ number_format($subtotal, 2, ',', '.') }} </p>
                </div>
                <div class="totals">
                    <p class="total-label">Taxa</p>
                    <p class="total-amount">R$ {{ number_format(0.05 * $subtotal, 2, ',', '.') }}</p>
                </div>
                <div class="totals">
                    <p class="total-label">Total</p>
                <p class="total-amount">R$ {{ number_format($total, 2, ',', '.') }}</p>
                </div>



                <div class="finalizar-compra">
                    <button><a  style="text-decoration: none; color:#fff;" href="{{ route('paypal') }}" >Finalizar Compra</a></button>
                </div>

                @endif

                <div class="row">
                    <a href="/experiencias" class="btn btn-primary" style="text-decoration:none; margin-bottom: 10px;"> <<< Continuar Comprando </a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
