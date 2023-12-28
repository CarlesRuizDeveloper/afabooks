<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',HomeController::class);

Route::get('libros', [ LibroController::class , 'index' ])->name('libros.index');

Route::get('libros/create',[ LibroController::class , 'create'])->name('libros.create');

Route::get('libros/{id}', [LibroController::class , 'show'])->name('libros.show');
