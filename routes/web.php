<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', static function () {
    return view('welcome');
});

Route::get('cursos', static function () {
    return "Bienvenidos a la página de cursos";
});

Route::get('cursos/create', static function () {
    return "En esta página podrás crear un curso";
});

//Route::get('cursos/{curso}', static function ($curso) {
//    return "Bienvenidos al curso $curso";
//});

//Podemos definir que esta variable sea opcional con el signo ? y hay que inicializarla
Route::get('cursos/{curso}/{categoria?}', static function ($curso, $categoria = null) {

    if ($categoria) {
        return "Bienvenidos al curso $curso, de la categoría $categoria";
    }

    return "Bienvenidos al curso $curso";

});
