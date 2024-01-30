<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

//use App\Models\Libro; Está borrado por problemas en migraciones

use App\Models\Book;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(LibroSeeder::class);
        //Libro::factory(50)->create();
        User::factory(10)->create();
        Book::factory(10)->create();
    }
}
