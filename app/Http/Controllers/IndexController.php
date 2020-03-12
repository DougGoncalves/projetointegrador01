<?php

namespace App\Http\Controllers;


use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
