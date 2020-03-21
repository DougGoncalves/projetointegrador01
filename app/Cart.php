<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;
use Session;

class Cart extends Model
{
    private $items = [];

    public function __construct()
    {
        if( Session::has('cart') ){
            $cart = Session::get('cart');

            $this->items = $cart->items;
        }
    }

    public function add(Produto $produto)
    {
        if (isset ($this->items[$produto->id_experiencia])){
            $this->items[$produto->id_experiencia] = [
                'item' => $produto,
                'qtd'  => $this->items[$produto->id_experiencia]['qtd'] + 1,
            ];
        } else {
            $this->items[$produto->id_experiencia] = [
                'item' => $produto,
                'qtd'  => 1,
            ];
        }
    }

    public function decrementItem(Produto $produto)
    {
        if( isset($this->items[$produto->id_experiencia]) ) {

            if( $this->items[$produto->id_experiencia]['qtd'] == 1 ) {
                unset($this->items[$produto->id_experiencia]);
            } else {
                $this->items[$produto->id_experiencia] = [
                    'item'  => $produto,
                    'qtd'   => $this->items[$produto->id_experiencia]['qtd'] - 1,
                ];
            }

        }
    }

    public function remove(Produto $produto)
    {
        if( isset($this->items[$produto->id_experiencia]) ) {
            unset($this->items[$produto->id_experiencia]);
        }
    }

    public function getItems()
    {
        return $this->items;
    }

    public function subtotal()
    {
        $subtotal = 0;

        if( count($this->items) == 0 )
            return $subtotal;

        foreach($this->items as $item) {
            $sub = $item['item']->preco * $item['qtd'];

            $subtotal+=$sub;
        }

        return $subtotal;
    }


    public function total()
    {
        $total = 0;

        if( count($this->items) == 0 )
            return $total;

        foreach($this->items as $item) {
            $subTotal = $item['item']->preco * $item['qtd'];

            $total += $subTotal + ($subTotal*0.05);
        }

        return $total;
    }

    public function totalItems()
    {
        return count($this->items);
    }
}
