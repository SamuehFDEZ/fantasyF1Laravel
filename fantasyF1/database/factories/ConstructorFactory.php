<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Constructor>
 */
class ConstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'añoCreacion' => $this->faker->numberBetween(1950, 2024),
            'valorMercado' => $this->faker->randomFloat(1, 5, 30),
            'nacionalidad' => $this->faker->country()
        ];
    }
}
