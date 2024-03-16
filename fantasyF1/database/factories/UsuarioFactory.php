<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'nombre' => $this->faker->userName(),
            'contrasenya' => $this->faker->password(),
            'email' => $this->faker->safeEmail(),
            'remember_token' => $this->faker->randomElements(['a', 'b', 'c', 'd', 'e'], 5),
        ];
    }
}
