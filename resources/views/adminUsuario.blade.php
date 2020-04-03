@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro">Usuários</h1>
    <div class="container-formulario">
        <div class="row">
            <a href="/admin/usuario/create" class="btn btn-dark" style="text-decoration:none;">Novo Usuário</a>
        </div>
        <div class="row">
            <table class="table table-responsive" style="margin-top:20px;">
                <thead style="font-size: 1.5em; font-weight:bold">
                    <tr>
                        <td>Id</td>
                        <td>Nome</td>
                        <td>E-mail</td>
                        <td>Ações</td>
                    </tr>
                </thead>
        </div>
      <tbody>
        @if(isset($usuarios) && count($usuarios) > 0)
        @foreach($usuarios as $usuario)
        <tr>
          <td>
            <a href="/admin/usuario/{{$usuario->id_usuario}}" style="text-decoration: none; color:inherit;">{{$usuario->id_usuario}}</a>
          </td>
          <td>
            <a href="/admin/usuario/{{$usuario->id_usuario}}" style="text-decoration: none; color:inherit;">{{$usuario->nome}}</a>
          </td>
          <td>
          <a href="/admin/usuario/{{$usuario->id_usuario}}" style="text-decoration: none; color:inherit;">{{$usuario->email}}</a>
          </td>
          <td>
            <a href="/admin/usuario/{{$usuario->id_usuario}}" class="btn btn-secondary" style="text-decoration: none;">Editar</a>
            <a href="/admin/usuario/excluir/{{$usuario->id_usuario}}" class="btn btn-danger" style="text-decoration: none;">Excluir</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="alert alert-info">
          <td>Nenhum usuário para exibir</td>
        </tr>
        @endif
      </tbody>
    </table>
</div>
<div class="row">
    <a href="/admin" class="btn btn-primary" style="text-decoration:none; margin-bottom: 10px;"> <<< Voltar </a>
</div>
@endsection
