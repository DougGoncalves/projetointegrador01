<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Produto;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();

        return view('adminPedido', compact('pedidos'));
    }

    public function delete($id_pedido) {

        $pedido = Pedido::find($id_pedido);

        return view('deletarPedido', compact('pedido'));
    }

    public function remove($id_pedido)
    {
        $pedido = Pedido::find($id_pedido);

        $pedido->delete();

        return redirect('/admin/pedidos');
    }

    public function details($id_pedido)
    {
        $pedido = Pedido::find($id_pedido);

        $produtos = $pedido->produtos()->get();

        $title = "Produtos do pedido: {$pedido->id_pedido}";

        return view ('produtosPedido', compact('pedido', 'produtos', 'title'));
    }
}
