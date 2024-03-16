<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rememberToken = Str::random(60); // Genera una cadena aleatoria de 60 caracteres

        return [
            'nombre' => $this->faker->userName(),
            'contrasenya' => $this->faker->password(),
            'email' => $this->faker->safeEmail(),
            'remember_token' => $rememberToken
        ];
    }
}
