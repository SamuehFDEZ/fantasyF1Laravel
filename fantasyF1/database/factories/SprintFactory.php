<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    /**
     * Genera un valor aleatorio en formato "1:27.215"
     *
     * @return string
     */
    public function customRandomValue(): string
    {
        $minutes = $this->generator->numberBetween(0, 59);
        $seconds = $this->generator->randomFloat(3, 0, 59.999);
        return "1:$minutes.$seconds";
    }
}

class SprintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Crear una instancia de Faker y agregar CustomFakerProvider como proveedor
        $faker = \Faker\Factory::create();
        $faker->addProvider(new CustomFakerProvider($faker));

        // Obtener un valor aleatorio utilizando CustomFakerProvider
        $randomValue = $faker->customRandomValue();

        return [
            'sprintID' => $this->faker->numberBetween(1,24),
            'fecha' => $this->faker->date('d-m-Y'),
            'vueltaRapida' => $randomValue, // Utilizar el valor aleatorio generado
            'ronda' => $this->faker->numberBetween(1, 10), // Definir un valor para 'ronda'
        ];
    }
}
