<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition(): array
    {
        $login = $this->faker->unique()->userName();
        return [
            'login' => $login,
            'password' => bcrypt($login),
        ];
    }
}
