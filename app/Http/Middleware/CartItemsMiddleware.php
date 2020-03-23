<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Cart;

class CartItemsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( !Session::has('cart') )
            return redirect()->route('home'); //Caso seja acessada a rota paypal sem items no carrinho, redireciona para a home

        $cart = new Cart;

        if( $cart->totalItems() == 0)
            return redirect()->route('home'); //Caso o carrinho esteja zerado, redireciona para a home

        return $next($request);
    }
}
