<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeLibro;
use App\Models\Book;
use App\Models\Course;
use DateTime;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Obtener los últimos 8 libros de texto
        $librosTexto = Book::where('IDCategoria', 1)->orderBy('id', 'desc')->take(8)->get();
    
        $librosLectura = Book::where('IDCategoria', 2)->orderBy('id', 'desc')->take(8)->get();
    
        $courses = Course::all();
    
        return view('libros.index', compact('librosTexto', 'librosLectura', 'courses'));
    }
    

    public function create()
    {
        $courses = Course::all();
       
        return view('libros.create', compact('courses'));
    }

    public function store(StoreLibro $request)
    {
        $libro = new Book();

        $userID = auth()->user();
        $libro->userID =  $userID->id;
        $libro->IDCategoria = $request->IDCategoria;
        $libro->codigo = $request->codigo;
        $libro->courseID = $request->courseID;      
        $libro->descripcion = $request->descripcion;
        $libro->marca = $request->marca;
        $libro->observaciones = $request->observaciones;
        
        $libro->save();

       return redirect()->route('libros.show', $libro->id);//se puede omitir el id, ya que Laravel lo hace-> yo lo uso en el update     
    }

 

    public function show($id)
    {
        $libro = Book::find($id);
        $courses = Course::all();
        
        return view('libros.show', compact('libro', 'courses'));
    }

    public function edit(Book $libro)
    {        
        $courses = Course::all();
        return view('libros.edit', compact('libro','courses'));

    }

    public function update( Request $request, Book $libro)
    {        
        $libro->IDCategoria = $request->IDCategoria;
        $libro->codigo = $request->codigo;
        $libro->courseID = $request->courseID;      
        $libro->descripcion = $request->descripcion;
        $libro->marca = $request->marca;
        $libro->observaciones = $request->observaciones; 
        
        $libro->save();
        return redirect()->route('libros.show', $libro);
    }




}
