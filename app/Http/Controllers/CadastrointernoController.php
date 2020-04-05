<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

class CadastrointernoController extends Controller
{
    public function index()
    {
        return view('cadastrointerno');
    }

    public function update(Request $request, $id_usuario) {
        
        $usuario = Usuario::find($id_usuario);

        if ($request->senha != $request->confirmasenha) {

            $confirmasenha = true;
            return view('cadastrointerno', compact('confirmasenha', 'usuario'));
            
        }

        $usuario->nome = $request->nome;
        $request->cpf = trim($request->cpf);
        $request->cpf = str_replace(".", "", $request->cpf);
        $request->cpf = str_replace(",", "", $request->cpf);
        $request->cpf = str_replace("-", "", $request->cpf);
        $usuario->cpf = $request->cpf;
        $usuario->dtnasc = $request->dtnasc;
        $usuario->sexo = $request->sexo;
        $usuario->senha = Hash::make($request->senha);
        $usuario->telefoneUm = $request->telefoneUm;
        $usuario->telefoneDois = $request->telefoneDois;

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
            $usuario->imagem = $caminhoRelativo;
        }

        var_dump($usuario);
        
        $usuario->save();

        return redirect('/login');

    }
}
