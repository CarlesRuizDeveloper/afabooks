<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libro = new Libro();
        $libro->codigo = "723234";
        $libro->observaciones= "las observaciones";
        $libro->marca= "la marca";
        $libro->curso= "1 eso";
        $libro->updated_at= "2023-12-27 11:37:16";
        $libro->created_at= "2023-12-27 11:37:16";
        
        $libro->save();
    }
}
