@extends('layouts.master_layout')
@section('conteudo')
<h1 class="titulo-cadastro">Pedidos</h1>
<div class="container-formulario">
    <div class="row">
        <table class="table table-responsive" style="margin-top:20px; ">
            <thead style="font-size: 1.5em; font-weight:bold">
                <tr>
                    <td>Pedido</td>
                    <td>Nome</td>
                    <td>Status</td>
                    <td>Produtos</td>
                    <td>Total</td>
                    <td>Ação</td>
                </tr>
            </thead>
    </div>
  <tbody>
    @if(isset($pedidos) && count($pedidos) > 0)
    @foreach($pedidos as $pedido)
    <tr>
      <td>
        <a href="/admin/pedido/{{$pedido->id_pedido}}" style="text-decoration: none; color:inherit;">{{$pedido->id_pedido}}</a>
      </td>
      <td>
        <a href="/admin/pedido/{{$pedido->id_pedido}}" style="text-decoration: none; color:inherit;">{{$pedido->usuario->nome}}</a>
      </td>
      <td>
        <a href="/admin/pedido/{{$pedido->id_pedido}}" style="text-decoration: none; color:inherit;">{{$pedido->status}}</a>
      </td>
      <td>
        <a href="/admin/pedido/{{$pedido->id_pedido}}" style="text-decoration: none; color:inherit; font-weight:bold;">Ver Produtos</a>
      </td>
      <td>
        <a href="/admin/pedido/{{$pedido->id_pedido}}" style="text-decoration: none; color:inherit;">R$ {{ number_format($pedido->total, 2, ',', '.') }}</a>
      </td>
      <td>
        <a href="/admin/pedido/excluir/{{$pedido->id_pedido}}" class="btn btn-danger" style="text-decoration: none;">Excluir</a>
      </td>
    </tr>
    @endforeach
    @else
    <tr class="alert alert-info">
      <td>Nenhum pedido realizado!</td>
    </tr>
    @endif
  </tbody>
</table>
</div>
<div class="row">
    <a href="/admin" class="btn btn-primary" style="text-decoration:none; margin-bottom: 10px;"> <<< Voltar </a>
</div>
@endsection
