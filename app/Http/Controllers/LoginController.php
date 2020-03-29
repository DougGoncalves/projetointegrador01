<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use LengthException;
use GuzzleHttp\Client;

class LoginController extends Controller
{

    public function checkLogin(Request $request) {

         $usuario = Usuario::where('email','=',$request->email)->get();
         session_start();

         if ( count($usuario)>0) {

            $senha = $usuario[0]->senha;

             if (password_verify($request->password, $senha)) {

                $_SESSION["usuario"] = $usuario[0]->nome;
                return redirect ('/');

            }
        } else {

                session_destroy();
                return redirect()->back()->with('alert', 'Usuário ou Senha inválidos!');

            }
        }

}

