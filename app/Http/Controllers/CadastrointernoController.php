<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastrointernoController extends Controller
{
    public function index()
    {
        return view('cadastrointerno');
    }

    public function update(Request $request, $id_usuario) {
        
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
        
        $usuario->save();

        return redirect('/');

    }
}
