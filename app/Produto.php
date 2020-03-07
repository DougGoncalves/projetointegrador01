<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'experiencias';
    protected $primaryKey = 'id_experiencia';
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }

}
