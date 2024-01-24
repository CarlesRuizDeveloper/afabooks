<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userID' => 1, // Cambia esto según tus necesidades
            'IDCategoria' => $this->faker->randomElement([1, 2]), // Cambia esto según tus necesidades
            'codigo' => $this->faker->unique()->isbn13,
            'courseID' => 1, // Cambia esto según tus necesidades
            'descripcion' => $this->faker->sentence,
            'marca' => $this->faker->word,
            'observaciones' => $this->faker->paragraph,
            'estado' => $this->faker->randomElement(['disponible', 'solicitado', 'entregado']),
        ];
    }
}
