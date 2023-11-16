<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//para decirle que busque el método index lo meto en un array y de segundo parámetro le meto el método que se encarga de esa ruta
Route::get('/', [CursoController::class, 'index'])->name('pri');
//utilizando el get podemos pasarle una función a la ruta, entonces en vez de usar el view vamos a usar get para dirigirnos a la ruta
//nos permite especificar en el primer argumeto a dónde vamos ('/') y luego le metemos una función

//me creo una función donde el contenido de la función es una variable que yo creo que llamo diccionario, con valores (lista clave valor)
//entonces la función termina en el return, que devuelve la vista que a efectos prácticos es lo mismo que antes. Devolvemos
//el fichero principal.blade.php y ['dic' => $diccionario] que es realmente la forma de pasarle la variable. La vista va a recibir una variable de php que 
//se llamará $dic y puedo recorrerlo en la vista
Route::get("/contacto",[CursoController::class, 'create'])->name("con");

//a usuarios le voy a pasar un controlador
Route::get("/usuarios",[UsuarioController::class, 'login'])->name("usr");
//::class busca el método invoke
Route::get("/blog",[CursoController::class, 'show'])->name("blg");

Route::get('home', HomeController::class)->name('home');

Route::get('/dashboard',[CursoController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cursos/{persona}', [CursoController::class, 'persona']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::post('/validar', [UsuarioController::class, 'login']);

require __DIR__.'/auth.php';
