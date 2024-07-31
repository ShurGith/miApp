<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Juan',
            'email' => 'admin@example.com',
            'password' => '12345678',
        ]);
        Categoria::insert([
            'name' => 'Cafe'
        ]);
        Categoria::insert([
            'name' => 'Hamburguesas',
        ]);
        Categoria::insert([
            'name' => 'Platos',
        ]);
        Categoria::insert([
            'name' => 'Bebidas',
        ]);
        Categoria::insert([
            'name' => 'Postres',
        ]);
    }
}
