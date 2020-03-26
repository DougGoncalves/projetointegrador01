<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use LengthException;

class LoginController extends Controller
{
    //

    public function checkLogin(Request $request) {

        $usuario = Usuario::where('email','=',$request->email)->get();

         if ( count($usuario)>0) {

            $senha = $usuario[0]->senha;

             if (password_verify($request->password, $senha)) {
                return view ('index', compact('usuario'));

            }
        } else {
            $message = "usuário inválido";
            return view ('index');
        }

    }



}
