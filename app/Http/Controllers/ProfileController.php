<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Pedido;


class ProfileController extends Controller
{
    public function profile()
    {
        return view('perfil');
    }

    public function meuspedidos()
    {
        session_start();
        $sessao = $_SESSION['id_usuario'];
        $meuspedidos = Pedido::all()->where('fk_usuario', '=', $sessao );

        return view('meuspedidos', compact('meuspedidos'));
    }

    public function meuperfil()
    {
        session_start();
        $ses = $_SESSION['id_usuario'];
        // $usuario = Usuario::all()->where('id_usuario', '=', $ses );
        $usuario = Usuario::find($ses);

        return view('meuPerfil', compact('usuario'));
    }

    public function logout()
    {
        session_start();
        session_destroy();

        return view ('logout');
    }
}
