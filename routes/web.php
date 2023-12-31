<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [ BookController::class , 'index' ])->name('libros.index');

//Route::get('/', [ CourseController::class , 'indexCourses' ])->name('libros.index');

Route::get('libros', [ BookController::class , 'index' ])->name('libros.index');

Route::get('libros/create',[ BookController::class , 'create'])->middleware(['auth', 'verified'])->name('libros.create');

Route::get('libros/{id}', [BookController::class , 'show'])->middleware(['auth', 'verified'])->name('libros.show');

require __DIR__.'/auth.php';
