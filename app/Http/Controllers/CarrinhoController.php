<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cart;
use App\Produto;
use Session;

class CarrinhoController extends Controller
{

    public function index()
    {
        $cart = Session::has('cart') ? Session::get('cart') : new Cart;
        $total = $cart->total();
        $subtotal = $cart->subtotal();
        $produtos = $cart->getItems();

        return view('carrinho', compact('produtos', 'total', 'subtotal'));
    }

    public function addToCart(Request $request, $id)
    {
        $produto = Produto::find($id);
        if(!$produto)
              return redirect()->route('home');

        $cart = new Cart;
        $cart->add($produto);

        $request->session()->put('cart', $cart);

        return redirect()->route('carrinho');
    }

    public function decrement(Request $request, $id)
    {
        $produto = Produto::find($id);
        if( !$produto )
            return redirect()->route('home');

        $cart = new Cart;
        $cart->decrementItem($produto);

        $request->session()->put('cart', $cart);

        return redirect()->route('carrinho');
    }

    public function remove(Request $request, $id)
    {
        $produto = Produto::find($id);
        if( !$produto )
            return redirect()->route('home');

        $cart = new Cart;
        $cart->remove($produto);

        $request->session()->put('cart', $cart);

        return redirect()->route('carrinho');
    }


}



