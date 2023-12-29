<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id('bookID');
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users');
            $table->unsignedBigInteger('courseID');
            $table->foreign('courseID')->references('courseID')->on('cursos');
            $table->string('codigo');
            $table->text('descripcion');
            $table->string('marca');
            $table->text('observaciones')->nullable();
            $table->unsignedBigInteger('categoria');
            $table->foreign('categoria')->references('IDCategoria')->on('categorias');
            $table->date('fecha_publicacion');
            $table->enum('estado', ['disponible', 'solicitado', 'entregado'])->default('disponible');
            $table->timestamps();
        });
       
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
