<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Primer método

//Route::get('/', static function () {
//    return view('welcome');
//});

//Route::get('cursos', static function () {
//    return "Bienvenidos a la página de cursos";
//});

//Route::get('cursos/create', static function () {
//    return "En esta página podrás crear un curso";
//});

//Route::get('cursos/{curso}', static function ($curso) {
//    return "Bienvenidos al curso $curso";
//});

//Podemos definir que esta variable sea opcional con el signo ? y hay que inicializarla
//Route::get('cursos/{curso}/{categoria?}', static function ($curso, $categoria = null) {
//
//    if ($categoria) {
//        return "Bienvenidos al curso $curso, de la categoría $categoria";
//    }
//
//    return "Bienvenidos al curso $curso";
//
//});

//2do Método

//La lógica debe estar en los controladores

//Route::get('/', HomeController::class );
//
//Route::get('cursos', [CursoController::class,'index']);
//
//Route::get('cursos/create', [CursoController::class,'create']);

//Podemos definir que esta variable sea opcional con el signo ? y hay que inicializarla
//Route::get('cursos/{curso}/{categoria?}', [CursoController::class,'show']);

//3er método

Route::get('/', HomeController::class );

//Grupos de rutas
Route::controller(CursoController::class)->group(function (){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}/{categoria?}', 'show');
});


