<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConhecaController extends Controller
{
    public function index()
    {
        return view('conheca');
    }
}
