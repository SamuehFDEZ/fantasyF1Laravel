<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piloto>
 */
class PilotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_piloto' => $this->faker->numberBetween(1, 99),
            'nombre' => $this->faker->name(),
            'valorMercado' => $this->faker->randomFloat(1, 5, 30),
            'puntosRealizados' => $this->faker->numberBetween(0, 26),
            'fechaNac' => $this->faker->date('d_m_Y'),
            'nacionalidad' => $this->faker->country(),
            'userID' => $this->faker->name(),
            'nombre_constructor' => $this->faker->name(),
        ];
    }
}
