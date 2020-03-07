@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro">Cadastro de Produto</h1>
<div class="container-formulario my-5 py-5">

    <form action="/admin/produto/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="local">Local</label>
            <textarea name="local" id="local" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" class="form-control">
        </div>
        <div class="form-group">
            <select name="fk_categoria" id="fk_categoria" class="form-control">
                <option disabled selected> Selecione um opção</option>
                @if(isset($categorias))
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id_categoria}}">{{$categoria->nome}}
                </option>
                @endforeach
                @endif
            </select>
        </div>
        <div class="form-group pt-5">
            <label for="imagem"> Imagem </label><br>
            <input type="file" name="imagem" id="imagem">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
@endsection
