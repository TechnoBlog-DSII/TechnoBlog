<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Sergio Escudero Tabares',
            'email' => 'sergio@gmail.com',
            'password' => bcrypt('Set12345678?'),
        ]);
        User::create([
            'name' => 'Esteban Andrés Hernandez',
            'email' => 'esteban@gmail.com',
            'password' => bcrypt('EsteAnd123?'),
        ]);
        User::create([
            'name' => 'Johan Loaiza',
            'email' => 'johan@gmail.com',
            'password' => bcrypt('N12318js1?'),
        ]);
        User::create([
            'name' => 'Felipe Jaramillo',
            'email' => 'felipe.jaramillo@gmail.com',
            'password' => bcrypt('Felpamillo?'),
        ]);
        

    }
}
