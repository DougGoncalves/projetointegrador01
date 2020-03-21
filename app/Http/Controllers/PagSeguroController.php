<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagSeguro;

class PagSeguroController extends Controller
{
   public function pagseguro()
   {
       $pagseguro = new PagSeguro;

        $code = $pagseguro->generate();

        $urlRedirect = config('pagseguro.url_redirect_after_request').$code;

        return redirect()->away($urlRedirect);
   }
}
