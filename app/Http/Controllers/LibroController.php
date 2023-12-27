<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        return "pagina principal libros";
    }

    public function create(){
        return "aqui creamos libro";
    }

    public function show($libro){
        return "este es el libro: $libro";
    }


}
