<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produto');
    }

    public function create(){

        $categorias = Categoria::all();

        return view('cadastroProduto', compact('categorias'));
    }

    public function insert(Request $request)
    {
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->fk_categoria = $request->fk_categoria;


        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploads';
            $arquivo->storePublicly($nomePasta); //nome temporário do arquivo
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); //faz a hash para nome do arquivos
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin/produto');
    }

    public function admin()
    {
        $produtos = Produto::all();

        return view('admin', compact('produtos'));
    }

    public function update($id_produto)
    {
        $produto = Produto::find($id_produto);
        $categorias = Categoria::all();

        return view('editarProduto', compact('produto', 'categorias'));

    }

    public function put(Request $request, $id_produto)
    {
        $produto = Produto::find($id_produto);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->fk_categoria = $request->fk_categoria;


        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploads';
            $arquivo->storePublicly($nomePasta); //nome temporário do arquivo
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); //faz a hash para nome do arquivos
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin/produto');

    }

    public function delete($id_produto)
    {
        $produto = Produto::find($id_produto);

        return view('deletarProduto', compact('produto'));
    }

    public function remove($id_produto)
    {
        $produto = Produto::find($id_produto);

        $produto->delete();

        return redirect('admin/produto');
    }
}
