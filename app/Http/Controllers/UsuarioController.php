<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;

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

        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->dtnasc = $request->dtnasc;
        $usuario->sexo = $request->sexo;
        $usuario->telefoneUm = $request->telefoneUm;
        $usuario->telefoneDois = $request->telefoneDois;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;

        $usuario->save();

        return redirect('/admin/usuarios');

    }


    public function update($id_usuario) {

        $usuario = Usuario::find($id_usuario);

        return view('editarUsuario', compact('usuario'));

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
        $usuario->senha = $request->senha;
        $usuario->telefoneUm = $request->telefoneUm;
        $usuario->telefoneDois = $request->telefoneDois;
        $usuario->email = $request->email;
        
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
