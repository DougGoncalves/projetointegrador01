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

}
