<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
/*
class LibroFactory extends Factory
{
    protected $model = Libro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *//*
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->name(), 
            'observaciones' => $this->faker->sentence(), 
            'marca' => $this->faker->sentence(), 
            'curso' => $this->faker->randomElement(['ESO', 'ESOs', 'batxillerat'])
        ];
    }
}
