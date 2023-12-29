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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('requestID');
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('bookID'); // Sin la restricción de clave externa
            $table->enum('estado_solicitud', ['solicitado', 'aceptado', 'rechazado', 'entregado', 'disponible']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
