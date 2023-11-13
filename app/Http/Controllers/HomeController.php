<?php

namespace App\Http\Controllers; //define dónde se encuentra el archivo

use Illuminate\Http\Request; //necesario para un CRUD

class HomeController extends Controller
{
    //aquí vamos a escribir métodos para administrar las rutas
    public function __invoke(){
        return view('home');
    }
}
