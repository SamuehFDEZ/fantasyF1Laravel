<?php

namespace Database\Factories;

use App\Models\Circuito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Circuito>
 */
class CircuitoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            $this->faker->name(),
            $this->faker->name(),
            $this->faker->name(),
        ];

        return [
            'ronda' => $this->faker->unique()->numberBetween(25, 100),
            'km' => $this->faker->randomNumber(4, true),
            'fecha' =>$this->faker->date('Y-m-d'),
            'nombre' => $this->faker->name(),
            'num_vueltas' => $this->faker->randomNumber(2, true),
            'num_curvas' => $this->faker->randomNumber(2, true),
            'autor_RecordCircuito' => $this->faker->name(),
            'tiempo_RecordCircuito' => $this->tiempoVuelta(),
            'año_RecordCircuito' => $this->faker->numberBetween(1950,2023),
            'DNF' => $this->faker->numberBetween(1,20),
            'DriverOfTheDay' => $this->faker->name(),
            'Adelantamientos' => $this->faker->numberBetween(0,20),
            'podiums' => implode(",",$names),
            'vueltaRapida' => $this->tiempoVuelta()
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
