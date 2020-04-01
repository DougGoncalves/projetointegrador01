<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Usuario;

class RegisterController extends Controller
{
   
    public function insert(Request $request)
    {
        $usuario = new Usuario();

        $usuario->email = $request->email;


        if ($request->senha != $request->confirmasenha) {

            return view('auth.register', compact('usuario'));
            
        }

        $usuario->senha = Hash::make($request->senha);

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

        return view('/cadastrointerno', compact('usuario'));
        
    }
}
