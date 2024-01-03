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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('requestID');
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('bookID')->constrained('books', 'bookID'); // Ajusta el nombre de la columna si es diferente
            $table->enum('estado_solicitud', ['solicitado', 'aceptado', 'rechazado', 'entregado', 'disponible']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
