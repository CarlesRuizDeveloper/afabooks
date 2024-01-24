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
        Schema::create('books', function (Blueprint $table) {
            $table->id('id');// si no le llamo id no me funciona el show
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('courseID')->constrained('courses');
            $table->string('codigo')->nullable();
            $table->text('descripcion');
            $table->string('marca')->nullable();
            $table->text('observaciones')->nullable();
            $table->foreignId('IDCategoria')->constrained('categories', 'IDCategoria');
            //$table->date('fecha_publicacion');
            $table->enum('estado', ['disponible', 'solicitado', 'entregado'])->default('disponible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
