@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro">Produtos</h1>
    <div class="container-formulario">
        <div class="row">
            <a href="/admin/produto/create" class="btn btn-dark" style="text-decoration:none;">Novo produto</a>
        </div>
        <div class="row">
            <table class="table table-responsive" style="margin-top:20px; ">
                <thead style="font-size: 1.5em; font-weight:bold">
                    <tr>
                        <td>Id</td>
                        <td>Nome</td>
                        <td>Categoria</td>
                        <td>Ações</td>
                    </tr>
                </thead>
        </div>
      <tbody>
        @if(isset($produtos) && count($produtos) > 0)
        @foreach($produtos as $produto)
        <tr>
          <td>
            <a href="/admin/produtos/{{$produto->id_experiencia}}" style="text-decoration: none; color:inherit;">{{$produto->id_experiencia}}</a>
          </td>
          <td>
            <a href="/admin/produtos/{{$produto->id_experiencia}}" style="text-decoration: none; color:inherit;">{{$produto->nome}}</a>
          </td>
          <td>
          <a href="/admin/produtos/{{$produto->id_experiencia}}" style="text-decoration: none; color:inherit;">{{$produto->categoria->nome}}</a>
          </td>
          <td>
            <a href="/admin/produtos/{{ $produto->id_experiencia }}" class="btn btn-secondary" style="text-decoration: none;">Editar</a>
            <a href="/admin/produtos/excluir/{{ $produto->id_experiencia }}" class="btn btn-danger" style="text-decoration: none;">Excluir</a>
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
