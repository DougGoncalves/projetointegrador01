<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    //
    public function index() {

        $usuarios = Usuario::all();

        return view('adminUsuario', compact('usuarios'));
    }

    public function create() {

        return view('criarUsuario');

    }

    public function insert(Request $request) {

        $usuario = New Usuario();

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
        $usuario->email = $request->email;
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

        return redirect('/admin/usuarios');

    }


    public function update($id_usuario) {

        $usuario = Usuario::find($id_usuario);

        $confirmasenha = false;
        return view('editarUsuario', compact('confirmasenha', 'usuario'));

    }

    public function put(Request $request, $id_usuario) {
        
        $usuario = Usuario::find($id_usuario);
        
        $usuario->nome = $request->nome;
        $request->cpf = trim($request->cpf);
        $request->cpf = str_replace(".", "", $request->cpf);
        $request->cpf = str_replace(",", "", $request->cpf);
        $request->cpf = str_replace("-", "", $request->cpf);
        $usuario->cpf = $request->cpf;
        $usuario->dtnasc = $request->dtnasc;
        $usuario->sexo = $request->sexo;
        
        if($request->senha != '') {
            $usuario->senha = Hash::make($request->senha);
        }

        $usuario->telefoneUm = $request->telefoneUm;
        $usuario->telefoneDois = $request->telefoneDois;
        $usuario->email = $request->email;

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
        
        $usuario->save();

        return redirect('/admin/usuarios');

    }

    public function delete($id_usuario) {

        $usuario = Usuario::find($id_usuario);

        return view('deletarUsuario', compact('usuario'));

    }

    public function remove($id_usuario) {

        $usuario = Usuario::find($id_usuario);

        $usuario->delete();

        return redirect('/admin/usuarios');

    }

}
