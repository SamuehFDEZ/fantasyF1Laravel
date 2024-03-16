<?php

namespace Database\Factories;

use App\Models\Constructor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

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
        $nombresConstructores = Constructor::pluck('nombre')->toArray();

        return [
            'num_piloto' => $this->faker->numberBetween(1, 99),
            'nombre' => $this->faker->name(),
            'valorMercado' => $this->faker->randomFloat(1, 5, 30),
            'puntosRealizados' => $this->faker->numberBetween(0, 26),
            'fechaNac' => $this->faker->date('Y-m-d'),
            'nacionalidad' => $this->faker->country(),
            'nombre_constructor' => $this->faker->randomElement($nombresConstructores),
        ];
    }
}
