<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Usuario::create([
            'login' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        Usuario::create([
            'login' => 'alex',
            'password' => bcrypt('alex'),
        ]);

        Usuario::create([
            'login' => 'javi',
            'password' => bcrypt('javi'),
        ]);
    }
}
