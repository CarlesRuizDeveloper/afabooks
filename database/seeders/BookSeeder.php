<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\User;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener el usuario con correo '1@1.com' e ID 1
        $user = User::where('email', '1@1.com')->where('id', 1)->first();

        if ($user) {
            // Crear 20 libros de lectura
            Book::factory(20)->create([
                'userID' => $user->id,
                'IDCategoria' => 2, // ID de la categoría de lectura
                'estado' => 'disponible',
            ]);

            // Crear 20 libros de texto
            Book::factory(20)->create([
                'userID' => $user->id,
                'IDCategoria' => 1, // ID de la categoría de texto
                'estado' => 'disponible',
            ]);
        } else {
            $this->command->error("Usuario con correo '1@1.com' e ID 1 no encontrado.");
        }
    }
}
