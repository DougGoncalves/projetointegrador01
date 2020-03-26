<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Produto;

class ExperienciasController extends Controller
{
    public function index()
    {   $categorias = Categoria::all();
        // $produtos = Produto::paginate(1);

        $produtos = Produto::all()->where('id_experiencia', '=', 1);
        $prod2 = Produto::all()->where('id_experiencia', '=', 2);
        $prod3 = Produto::all()->where('id_experiencia', '=', 3);
        $prod4 = Produto::all()->where('id_experiencia', '=', 6);
        $prod5 = Produto::all()->where('id_experiencia', '=', 10);
        $prod6 = Produto::all()->where('id_experiencia', '=', 11);
        $prod7 = Produto::all()->where('id_experiencia', '=', 15);
        $prod8 = Produto::all()->where('id_experiencia', '=', 18);
        $prod9 = Produto::all()->where('id_experiencia', '=', 19);
        $prod10 = Produto::all()->where('id_experiencia', '=', 21);
        $prod11 = Produto::all()->where('id_experiencia', '=', 22);
        $prod12 = Produto::all()->where('id_experiencia', '=', 24);
        $prod13 = Produto::all()->where('id_experiencia', '=', 26);
        $prod14 = Produto::all()->where('id_experiencia', '=', 27);
        $prod15 = Produto::all()->where('id_experiencia', '=', 28);
        $prod16 = Produto::all()->where('id_experiencia', '=', 30);
        $prod17 = Produto::all()->where('id_experiencia', '=', 31);
        $prod18 = Produto::all()->where('id_experiencia', '=', 32);


        return view('experiencias', compact('categorias', 'produtos', 'prod2', 'prod3', 'prod4', 'prod5', 'prod6', 'prod7', 'prod8', 'prod9', 'prod10', 'prod11', 'prod12', 'prod13','prod14', 'prod15', 'prod16', 'prod17', 'prod18'));
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        $categ = Produto::find($id)->fk_categoria;
        $categoria = Categoria::find($categ)->nome;

        return view('produto', compact('produto', 'categoria'));
    }

    public function filtroCategoria($id){
        $produtos = Produto::where('fk_categoria','=',$id)->simplepaginate(4);
        $nomeCategoria =Categoria::find($id)->nome;

        return view('produtos', compact('produtos', 'nomeCategoria'));
    }

    public function search(Request $request)
    {
        $buscar = Produto::where('id_experiencia', 'LIKE', '%'.$request->busca.'%')
                       ->orWhere('nome', 'like', '%'.$request->busca.'%')
                       ->orWhere('descricao', 'LIKE', '%'.$request->busca.'%')
                       ->orWhere('local', 'LIKE', '%'.$request->busca.'%')
                       ->orWhere('imagem', 'LIKE', '%'.$request->busca.'%')->get();

        return view('pesquisa', ['buscar'=>$buscar, 'busca'=>$request->busca]);
    }
}
