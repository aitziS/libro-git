<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        $nombre = $request->input('nombre');
        $password = $request->input('password');//cafe
        $usuarios = DB::table('usuario')->get();
    
        foreach ($usuarios as $usuario) {                           
            if ($nombre == $usuario->usuario) {
                // Si encontramos una coincidencia, retornamos la vista 'entrada'  && password_verify($password, $usuario->clave)
                return view('entrada');
            }
        }
    
        // Si no encontramos coincidencias después de revisar todos los usuarios, retornamos la vista 'noentrada'
        return view('noentrada');
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}




