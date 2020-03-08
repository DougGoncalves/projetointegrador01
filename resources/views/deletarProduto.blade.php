@extends('layouts.master_layout')
@section('conteudo')
@if(isset($produto))
<h1 class="titulo-cadastro">Excluir {{$produto->nome}}?</h1>
<section id="produtos-admin" class="mt-5">
  <div class="container-formulario">
    <div class="row mb-5">
      <form action="/admin/produtos/excluir/{{$produto->id_experiencia}}" enctype="multipart/form-data" method="POST" class="col-md-6 mt-1">
        {{csrf_field()}}
        <div class="form-group">
          <input readonly disabled type="text" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}">
        </div>
        <div class="form-group">
          <input readonly disabled type="text" name="nome" id="nome" class="form-control" value="{{ $produto->categoria->nome }}">
        </div>
        <div class="form-group">
          <input readonly disabled type="number" name="preco" id="preco" class="form-control" value="{{ $produto->preco }}">
        </div>
        <div class="form-group">
            <textarea readonly disabled name="local" id="local" class="form-control" rows="2">{{ $produto->local }}</textarea>
          </div>
        <div class="form-group">
          <textarea readonly disabled name="descricao" id="descricao" class="form-control" rows="2">{{ $produto->descricao }}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger"> Excluir</button>
        </div>
      </form>
      <div class="col-mt-8">
        @if(isset($produto->imagem))
        <div class="row">
            <img src="{{ $produto->imagem }}" class="img-thumbnail" alt="capa de {{ $produto->nome }}" style="max-height: 480px; max-width: 340px">
        </div>
        @endif
      </div>
    </div>
  </div>
</section>
@else
<section class="container mt-5">
  <div class="alert alert-danger mt-5">Produto não encontrado</div>
  <a href="/admin" class="btn btn-primary">voltar</a>
</section>
@endif
@endsection
