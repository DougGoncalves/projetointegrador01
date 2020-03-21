<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PayPal;

class PayPalController extends Controller
{
    public function paypal()
    {
        $paypay = new PayPal;

        return redirect()->away($paypay->generate());
    }

    public function returnPayPal(Request $request)
    {
        dd($request->all());
    }
}
