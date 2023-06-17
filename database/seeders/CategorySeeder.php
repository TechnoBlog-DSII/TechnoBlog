<?php

namespace Database\Seeders;

use App\Models\Category;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::create([
            'name' => 'Programación'
        ]);
        Category::create([
            'name' => 'Videojuegos'
        ]);
        Category::create([
            'name' => 'Desarrollo de juegos'
        ]);
        Category::create([
            'name' => 'Solución de problemas'
        ]);
        Category::create([
            'name' => 'Páginas útiles'
        ]);
        Category::create([
            'name' => 'Périfericos y accesorios'
        ]);

    }
}
