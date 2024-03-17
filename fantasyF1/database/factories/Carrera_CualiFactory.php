<?php

namespace Database\Factories;

use App\Models\Cuali;
use App\Models\Piloto;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera_Cuali>
 */
class Carrera_CualiFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //pluck obtiene los valores de la columna ronda de la tabla de cuali
        $cuali = Cuali::pluck('ronda')->unique()->toArray();
        $num_piloto = Piloto::pluck('num_piloto')->unique()->toArray();

        return [
            'num_piloto' => $this->faker->randomElement($num_piloto),
            'cualID' => $this->faker->randomElement($cuali),
            'posicion' => $this->faker->numberBetween(1, 20),
            'tiempo_q1' => $this->tiempoVuelta(),
            'tiempo_q2' => $this->tiempoVuelta(),
            'tiempo_q3' => $this->tiempoVuelta()
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
