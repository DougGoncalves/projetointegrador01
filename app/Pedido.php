<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'id_pedido';
    public $timestamps = false;

    protected $fillable = ['fk_usuario', 'total', 'status', 'payment_id', 'identify'];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'item_pedido')->withPivot('quantidade','preco');
    }

    public function newOrderProducts($totalCart, $paymentId, $identify, $itemsCart)
    {
        $pedido = $this->create([
            'fk_usuario' => 1, //ALTERAR PARA ROTA DE USUARIO LOGADO, DEPOIS DE ESTABELECIDA
            'total'      => $totalCart,
            'status'     => 'started',
            'payment_id' => $paymentId,
            'identify'   => $identify,
        ]);
        $productsOrder = [];

        foreach($itemsCart as $item ) {
            $idProduct = $item['item']->id_experiencia;
            $productsOrder[$idProduct] = [
                'quantidade' => $item['qtd'],
                'preco' => $item['item']->preco,
            ];
        } //foreach seleciona cada item do carrinho para ser enviada a tabela item_pedido

        $pedido->produtos()->attach($productsOrder);//chama o método produtos da Model Pedido e passa seus valores pelo método Attach para item_pedido no banco
    }

    public function changeStatus($paymentId, $status)
    {
        $this->where('payment_id', $paymentId)
             ->update(['status' => $status]);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_usuario');
    }
}
