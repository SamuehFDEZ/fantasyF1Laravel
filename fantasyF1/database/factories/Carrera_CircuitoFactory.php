<?php

namespace Database\Factories;

use App\Models\Circuito;
use App\Models\Piloto;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera_Circuito>
 */
class Carrera_CircuitoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_piloto' => $this->faker->unique()->numberBetween(1,100),
            'ronda' => $this->faker->unique()->numberBetween(1,100),
            'tiempo' => $this->tiempoVuelta(),
            'posicion' =>$this->faker->numberBetween(1,20)
        ];
    }

    public function tiempoVuelta(): string
    {
        $faker = Faker::create();

        // Generar un número aleatorio para los segundos entre 0 y 59
        $segundos = $faker->numberBetween(0, 59);

        // Generar un número aleatorio para los milisegundos entre 0 y 999
        $milisegundos = $faker->numberBetween(0, 999);

        // Formatear los números para que tengan siempre dos dígitos
        //pad_string es para rellenar si se queda vacío
        //STR_PAD_LEFT para donde se quiera añadir esos 0s
        $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);

        return "1:$segundos.$milisegundos";
    }
}
