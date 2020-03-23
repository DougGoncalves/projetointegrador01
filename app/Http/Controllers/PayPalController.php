<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\PayPal;

class PayPalController extends Controller
{
    public function __construct()
    {
        $this->middleware('cart-items');
    }

    public function paypal()
    {
        $cart = new Cart;

        $paypay = new PayPal($cart);

        return redirect()->away($paypay->generate());
    }

    public function returnPayPal(Request $request)
    {
        $sucess = ($request->sucess == 'true') ? true : false;
        $paymentId = $request->paymentId;
        $token = $request->token;
        $payerId = $request->PayerID;

        // if ( !$sucess )
        //     dd('Pedido Cancelado!');

        $cart = new Cart;
        $paypal = new PayPal($cart);

        $paypal->execute($paymentId, $token, $payerId);
    }
}
