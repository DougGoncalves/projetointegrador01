<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $table = 'item_pedido';
    protected $primaryKey = 'id_item_pedido';
    public $timestamps = false;
}
