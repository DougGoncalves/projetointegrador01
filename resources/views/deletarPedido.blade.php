@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro text-center">Excluir Pedido {{$pedido->id_pedido}}?</h1>
    <section class="container-formulario">
        <div class="row-cadastro">
            <form method="POST" action="/admin/pedido/excluir/{{$pedido->id_pedido}}" enctype="multipart/form-data">
            @csrf
            @if(isset($pedido))
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome Usuário</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{$pedido->usuario->nome}}"
                             autofocus>
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-8">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" id="status" value="{{$pedido->status}}" >
                    </div>

                    <div class="form-group col-md-4"></div>

                    <div class="form-group col-md-4">
                        <label for="preco">Valor</label>
                        <input type="text" class="form-control" name="preco" id="preco"  value='R$ {{ number_format($pedido->total, 2, ',', '.') }}'>
                    </div>

                @endif

                </div>
                <div class="botoes" style="display: flex;">
                <div class="enviar">
                <button class="btn btn-danger btn-lg btn-enviar mr-5">Excluir</button>
            </div>
        </div>
            </form>
        </div>
    </section>
</div>
@endsection
