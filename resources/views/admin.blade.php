@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro">Produtos</h1>
<div class="container-formulario">

    <a href="/admin/produto/create" class="btn btn-dark" >Novo produto</a>

    <table class="table table-responsive">
      <thead class="d-flex space-between">
        <tr>
          <td>Id</td>
          <td>Nome</td>
          <td>Categoria</td>
          <td>Ações</td>
        </tr>
      </thead>
      <tbody>
        @if(isset($produtos) && count($produtos) > 0)
        @foreach($produtos as $produto)
        <tr>
          <td>
            <a href="/admin/produtos/{{$produto->id_experiencia}}">{{$produto->id_experiencia}}</a>
          </td>
          <td>
            <a href="/admin/produtos/{{$produto->id_experiencia}}">{{$produto->nome}}</a>
          </td>
          <td>
          <a href="/admin/produtos/{{$produto->id_experiencia}}">{{$produto->categoria->nome}}</a>
          </td>
          <td>
            <a href="/admin/produtos/{{ $produto->id_experiencia }}" class="btn btn-secondary">Editar</a>
            <a href="/admin/produtos/excluir/{{ $produto->id_experiencia }}" class="btn btn-danger">Excluir</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="alert alert-info">
          <td>Nenhum produto para exibir</td>
        </tr>
        @endif
      </tbody>
    </table>
</div>
@endsection
