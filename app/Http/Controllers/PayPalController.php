<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\PayPal;
use App\Pedido;
use Session;

class PayPalController extends Controller
{
    public function __construct()
    {
        $this->middleware('cart-items');
    }

    public function paypal(Pedido $pedido)
    {
        $cart = new Cart;
        $paypay = new PayPal($cart);
        $result = $paypay->generate();

        if ($result['status']) {
            $paymentId = $result['payment_id'];
            $pedido->newOrderProducts($cart->total(), $paymentId , $result['identify'], $cart->getItems());

            Session::put('payment_id', $paymentId);

            return redirect()->away($result['url_paypal']);
        } else {
            return redirect()->route('carrinho')->with('message', 'Erro inesperado!');
        }
    }

    public function returnPayPal(Request $request, Pedido $pedido)
    {
        $sucess = ($request->sucess == 'true') ? true : false;
        $paymentId = $request->paymentId;
        $token = $request->token;
        $payerId = $request->PayerID;

        // if ( !$sucess )
        //     return redirect()->route('carrinho')->with('message', 'Pedido Cancelado');

        // if ( empty($paymentId) || empty($token) || empty($payerId))
        //     return redirect()->route('carrinho')->with('message', 'Não autorizado');

        // if ( !Session::has('paymend_id') || Session::get('paymend_id') != $paymentId )
        //     return redirect()->route('carrinho')->with('message', 'Não autorizado');

        $cart = new Cart;
        $paypal = new PayPal($cart);
        $response = $paypal->execute($paymentId, $token, $payerId);

        if ( $response == 'approved'){
            $pedido->changeStatus($paymentId, 'approved');

            $cart->emptyItems();
            Session::forget('payment_id');

            return redirect()->route('home');

        } else {
            return redirect()->route('carrinho')->with('message', 'Pedido Não Aprovado');

        }

    }
}
