<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Este método se crea cuando el controlador va administrar una única ruta
    public function __invoke(){
//        return view('welcome');
        return view('home');
    }
}
