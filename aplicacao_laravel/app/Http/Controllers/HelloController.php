<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
       echo "Olá! bem vindo ao meu site";
    }
}
