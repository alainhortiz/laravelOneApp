<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
//        return "Bienvenidos a la página de cursos";
        return view('cursos.index');
    }

    public function create(){
//        return "En esta página podrás crear un curso";
        return view('cursos.create');
    }

    public function show($curso, $categoria = null){
        if ($categoria) {
            return "Bienvenidos al curso $curso, de la categoría $categoria";
        }

//        return "Bienvenidos al curso $curso";
        return view('cursos.show',[
            'curso'=>$curso
        ]);
    }
}
