@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo">Carrinho de Compras</h1>
<section class="container-carrinho">
    <div class="cart-container">
        <div class="cart-body">
            <div class="cart-item">

                <div class="cart-row">
                    <div class="cart-row-cell pic">
                        <a href="#">-</a>
                        <img src="./Galeria/imageDB/Aventura/asadelta.jpg" alt="">
                    </div>
                    <div class="cart-row-cell desc">
                        <h5> Asa Delta</h5>
                        <p> 14/12/2019 14:00</p>
                    </div>
                    <div class="cart-row-cell quant">
                        <ul>
                            <li><a href="#">-</a></li>
                            <li>2</li>
                            <li><a href="#">+</a></li>
                        </ul>
                    </div>
                    <div class="cart-row-cell amount">
                        <p>R$200,00</p>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-row-cell pic">
                        <a href="#">-</a>
                        <img src="./Galeria/imageDB/Cidades/bondinho.jpg" alt="">
                    </div>
                    <div class="cart-row-cell desc">
                        <h5> Pão de Açúcar</h5>
                        <p> 23/11/2019 09:30</p>
                    </div>
                    <div class="cart-row-cell quant">
                        <ul>
                            <li><a href="#">-</a></li>
                            <li>2</li>
                            <li><a href="#">+</a></li>
                        </ul>
                    </div>
                    <div class="cart-row-cell amount">
                        <p>R$140,00</p>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-row-cell pic">
                        <a href="#">-</a>
                        <img src="./Galeria/imageDB/Natureza/praiario.jpg" alt="">
                    </div>
                    <div class="cart-row-cell desc">
                        <h5> Praias do RJ</h5>
                        <p> 24/11/2019 09:30</p>
                    </div>
                    <div class="cart-row-cell quant">
                        <ul>
                            <li><a href="#">-</a></li>
                            <li>2</li>
                            <li><a href="#">+</a></li>
                        </ul>
                    </div>
                    <div class="cart-row-cell amount">
                        <p>R$130,00</p>
                    </div>
                </div>
                <div class="totals">
                    <p class="total-label">Subtotal</p>
                    <p class="total-amount">R$470,00</p>
                </div>
                <div class="totals">
                    <p class="total-label">Taxa</p>
                    <p class="total-amount">R$47,00</p>
                </div>
                <div class="totals">
                    <p class="total-label">Total</p>
                    <p class="total-amount">R$517,00</p>
                </div>
                <div class="finalizar-compra">
                    <button>Finalizar Compra</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

