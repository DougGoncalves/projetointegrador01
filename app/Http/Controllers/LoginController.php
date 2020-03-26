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
         session_start();

         if ( count($usuario)>0) {

            $senha = $usuario[0]->senha;

             if (password_verify($request->password, $senha)) {
                //ini_set("session.cookie_lifetime","60"); 

                $_SESSION["usuario"] = $usuario[0]->nome;
                return redirect ('/');

            } 
        } else {

            if (isset($_SESSION["usuario"])) {

                //ini_set("session.cookie_lifetime","0");

                $_SESSION["usuario"] = null;
                session_unset();
                session_destroy();

            }
            return redirect()->back() ->with('alert', 'Usuário ou Senha inválidos!');
            //return redirect ('/');
        }

    }



}
