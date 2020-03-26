<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class AboutController extends Controller
{
    public function index()
    {
        $equipe = Usuario::where('id_usuario', '<=', 6 )->get();
        return view('about', compact('equipe'));
    }
}
