<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use LengthException;
use GuzzleHttp\Client;

use Illuminate\Support\Facades\Mail;
use App\Mail\mailBlend;
use Exception;

class LoginController extends Controller
{

    public function checkLogin(Request $request) {

         $usuario = Usuario::where('email','=',$request->email)->get();
         session_start();

         if ( count($usuario)>0 ) {

            $senha = $usuario[0]->senha;

             if (password_verify($request->password, $senha)) {

                session_destroy();
                
                session_start();

                $_SESSION["usuario"] = $usuario[0]->nome;
                $_SESSION["id_usuario"] = $usuario[0]->id_usuario;
                if ($request->remember == true) {
                    $_SESSION["time"] = time()+7200; // 2 horas de sessão                    
                } else {
                    $_SESSION["time"] = time()+1800; // 30 minutos de sessão
                }
                
                return redirect ('/');

            } else {

                session_destroy();
                return redirect()->back()->with('alert', 'Senha inválida!');
            }

        } else {

                session_destroy();
                return redirect()->back()->with('alert', 'Usuário inexistente!');

            }
        }


        public function sendingEmail(Request $request) {

            $usuario = Usuario::where('email','=',$request->sendemail)->get();

            if (count($usuario)>0 ) {

                $id_usuario = $usuario[0]->id_usuario;

                $usuario = Usuario::find($id_usuario);
                $senha = $this->generatePassword(4);
              
                $usuario->senha = password_hash($senha,PASSWORD_DEFAULT);

                $senhaArray = [];
                $senhaArray['senha'] = $senha;

                $usuario->save();

                try {
                    mail::send('auth.email', ['senhaArray'=>$senha], function($m) use ($request) {
                    $m->from('PRJIntegrador01@gmail.com', 'Blend Tour');
                    $m->to($request->sendemail);
                    $m->subject('Senha de Acesso ao Blend Tour');
                    }); 
                } catch (Exception $e) {
                    return redirect()->back()->with('alert', 'Email inexistente! Favor realizar cadastro.');
                }


                if (count(Mail::failures())==0) {
                     return redirect()->back()->with('alert', 'Senha enviada com sucesso');
                }

            } else {

                return redirect()->back()->with('alert', 'Usuário inexistente!');

            }

        }

        public function generatePassword($qtyCaraceters)
        {
            //Letras minúsculas embaralhadas
            $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');
        
            //Letras maiúsculas embaralhadas
            $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        
            //Números aleatórios
            $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
            $numbers .= 1234567890;
        
            //Caracteres Especiais
            $specialCharacters = str_shuffle('!@#$%*-');
        
            //Junta tudo
            $characters = $capitalLetters.$smallLetters.$numbers.$specialCharacters;
        
            //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
            $password = substr(str_shuffle($characters), 0, $qtyCaraceters);
        
            //Retorna a senha
            return $password;
        }

}

