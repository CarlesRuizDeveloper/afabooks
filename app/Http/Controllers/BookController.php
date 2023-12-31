<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Course;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $libros = Book::all();
        $courses = Course::all();
        return view('libros.index', compact('libros','courses'));
       
    }

    public function create()
    {
        return view('libros.create');
    }

    public function show($id)
    {
        $libro = Book::find($id);
    
        return view('libros.show', compact('libro'));
    }


}
