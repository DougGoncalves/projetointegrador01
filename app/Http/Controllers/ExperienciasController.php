<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class ExperienciasController extends Controller
{
    public function index()
    {   $categorias = Categoria::all();
        $produtos = Produto::paginate(3);

        return view('experiencias', compact('categorias','produtos'));
    }

    // public function show($id){
    //     $produtos = Produto::where('fk_categoria','=',$id)->simplepaginate(4);
    //     $nomeCategoria =Categoria::find($id)->nome;

    //     return view('experiencias', compact('produtos', 'nomeCategoria'));
    // }
}
