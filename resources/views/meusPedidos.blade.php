@extends('layouts.admin_layout')
@section('content')
<h1 class="titulo-cadastro">Meus Pedidos</h1>
<div class="container-formulario">
    <div class="row">
    @if(isset($meuspedidos) && count($meuspedidos) > 0)
        <table class="table table-responsive" style="margin-top:20px">
            <thead style="font-size: 1.5em; font-weight:bold; margin-left: 20px;">
                <tr >
                    <td>Pedido</td>
                    <td>Status</td>
                    <td>Produtos</td>
                    <td>Total</td>
                </tr>
            </thead>
    </div>
  <tbody>

    @foreach($meuspedidos as $pedido)
    <tr>
      <td>
        <a href="#" style="text-decoration: none; color:inherit;">{{$pedido->id_pedido}}</a>
      </td>
      <td>
        <a href="#" style="text-decoration: none; color:inherit;">{{$pedido->status}}</a>
      </td>
      <td>
        <a href="/admin/pedido/{{$pedido->id_pedido}}" style="text-decoration: none; color:inherit; font-weight:bold;">Ver Produtos</a>
      </td>
      <td>
        <a href="#" style="text-decoration: none; color:inherit;">R$ {{ number_format($pedido->total, 2, ',', '.') }}</a>
      </td>
    </tr>
    @endforeach
    @else
    <tr class="alert alert-info" style="text-align:center">
      <h2>Nenhum pedido realizado!</h2>
    </tr>
    @endif
  </tbody>
</table>
</div>
<div class="row">
    <a href="/profile" class="btn btn-primary" style="text-decoration:none; margin-bottom: 10px;"> <<< Voltar </a>
</div>
@endsection
