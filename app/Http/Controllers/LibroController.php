<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        return view('libros.index');
    }

    public function create(){
        return view('libros.create');
    }

    public function show($libro){
    return view('libros.show' , /*['libro' => $libro]*/ compact('libro'));// el compact lo hace más limpio

    }


}
