<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class RegisterController extends Controller
{
    //
    // public function insert(Request $request)
    // {
    //     $produto = new Produto();

    //     $produto->nome = $request->nome;
    //     $produto->descricao = $request->descricao;
    //     $produto->preco = $request->preco;
    //     $produto->fk_categoria = $request->fk_categoria;


    //     $arquivo = $request->file('imagem');
    //     if (!empty($arquivo)) {
    //         // salvando
    //         $nomePasta = 'uploads';
    //         $arquivo->storePublicly($nomePasta); //nome temporário do arquivo
    //         $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
    //         $nomeArquivo = $arquivo->getClientOriginalName(); //faz a hash para nome do arquivos
    //         $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
    //         // movendo
    //         $arquivo->move($caminhoAbsoluto, $nomeArquivo);
    //         $produto->imagem = $caminhoRelativo;
    //     }

    //     $produto->save();

    //     return redirect('/admin/produto');
    // }

    public function insert(Request $request)
    {
        $usuario = new Usuario();

        // $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        if ($request->todos)
        {
            $usuario->aventura = true;
            $usuario->cidades = true;
            $usuario->gastronomia = true;
            $usuario->historico = true;
            $usuario->natureza = true;
            $usuario->noturna = true;
        } else {
            $usuario->aventura = $request->aventura ? true : false;
            $usuario->cidades = $request->cidades ? true : false;
            $usuario->gastronomia = $request->gastronomia ? true : false;
            $usuario->historico = $request->historico ? true : false;
            $usuario->natureza = $request->natureza ? true : false;
            $usuario->noturna = $request->noturna ? true : false;
        }

        $usuario->save();

        // return view('cadastrointerno', compact('usuario'));
        return view('/cadastrointerno', compact('usuario'));
        
    }
}
