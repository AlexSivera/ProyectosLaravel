<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $usuarios = Usuario::all();
        $usuarios->each(function ($usuario) {
            Post::factory()->count(3)->create([
                'usuario_id' => $usuario->id,
            ]);
        });
    }
}
