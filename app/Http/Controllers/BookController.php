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
        $librosTexto = Book::where('IDCategoria', 1)
            ->where('estado', 'disponible')
            ->orderBy('id', 'desc')
            ->take(8)
            ->get();
    
        $librosLectura = Book::where('IDCategoria', 2)
            ->where('estado', 'disponible')
            ->orderBy('id', 'desc')
            ->take(8)
            ->get();
    
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
        
        
        return $libro;


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
        $libro->estado = $request->estado;
        
        $libro->save();
        return redirect()->route('libros.show', $libro);
    }

   
    public function showCurso($id)
    {
        $curso = Course::find($id);
        $courses = Course::all();
    
        if (!$curso) {
            return redirect()->route('libros.index')->with('error', 'Curso no encontrado');
        }
    
        $librosTexto = Book::where('IDCategoria', 1)
            ->where('courseID', $id)
            ->where('estado', 'disponible')
            ->orderBy('id', 'desc')
            ->get();
    
        $librosLectura = Book::where('IDCategoria', 2)
            ->where('courseID', $id)
            ->where('estado', 'disponible')
            ->orderBy('id', 'desc')
            ->get();
    
        return view('libros.curso', compact('curso','courses', 'librosTexto', 'librosLectura'));
    }
    
    


    

}
