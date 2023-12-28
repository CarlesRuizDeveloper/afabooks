<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){

        $libros = Libro::paginate();

        return view('libros.index', compact('libros'));
    }

    public function create(){
        return view('libros.create');
    }

    public function show($id){

        $libro = Libro::find($id);
    
        return view('libros.show' , /*['libro' => $libro]*/ compact('libro'));// el compact lo hace más limpio

    }


}
