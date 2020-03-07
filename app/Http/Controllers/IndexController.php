<?php

namespace App\Http\Controllers;


use App\Produto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
