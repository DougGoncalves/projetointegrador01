@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro text-center">Detalhes do Pedido: {{$pedido->id_pedido}}</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
            <form method="GET" action="/admin/pedidos" enctype="multipart/form-data">
            @csrf
            @if(isset($produtos))
            @foreach($produtos as $produto)
                <div class="form-row">
                    <div class="form-group">
                        Nome do Produto:
                        <input readonly disabled type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}">
                    </div>
                    <div class="form-group">
                        Quantidade:
                        <input readonly disabled type="text" name="quantidade" id="qtd" class="form-control" value="{{ $produto->pivot->quantidade }}">
                    </div>
                    <div class="form-group">
                        Preço:
                        <input readonly disabled type="text" name="preco" id="preco" class="form-control" value='R$ {{ number_format($produto->pivot->preco, 2, ',', '.') }}'>
                    </div>
                </div>
                <div class="form-group col-sm-2">
                    <img src="{{$produto->imagem}}" alt="capa de {{$produto->nome}}" class="img-thumbnail" style="max-height: 480px; max-width: 340px">
                </div>
              
                @endforeach
                @endif


                <div class="botoes" style="display: flex;">
                <div class="enviar">
                <button class="btn btn-primary btn-lg btn-enviar mr-5"> <a href="/admin/pedidos" style="text-decoration:none; color: #fff;">Voltar</a></button>
            </div>
        </div>
            </form>
        </div>
    </section>
</div>
@endsection
