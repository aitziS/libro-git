<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*controlador múltiple*/

class CursoController extends Controller
{
    //este va a administrar rutas distintas

    public function index(){ //principal
        //$nombre = 'pepe';
    //$lista = ['perro','gato','avestruz'];
        $diccionario = [['num' => 'uno'],['num' => 'dos'],['num' => 'tres']];
        return view('principal', ['dic' => $diccionario]);//no estamos seguros de si siempre se devuelve
    }

    public function create(){ //el de formularios para crear
        $doce = 12;
        return view('contacto', ['doce' => $doce]);
    }

    public function show(){ //el de mostrar algo
        return view('blog'); 
    }

    public function curso($curso){ //el de mostrar algo
        return view('cursos.curso', ['cursos' => $curso]); 
    }

    public function persona($persona){
        return view('cursos.'.$persona);
    }

    public function update(){

    }
}

//php artisan make:controller nombreController -i => me crea un invocable
//php artisan make:controller nombreController -r => vamos a usarlo para la base de datos (controlador múltiple)
//php artisan make:controller nombreController --api => vamos a usarlo para APIs