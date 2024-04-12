<?php

namespace Database\Seeders;

use App\Models\Constructor;
use Illuminate\Database\Seeder;

class constructorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $constructors = [
            ['nombre' => 'Red Bull', 'añoCreacion' => 1997, 'valorMercado' => 28.0, 'nacionalidad' => 'Austria', 'puntosRealizados' => 141],
            ['nombre' => 'Ferrari', 'añoCreacion' => 1950, 'valorMercado' => 19.6, 'nacionalidad' => 'Italia', 'puntosRealizados' => 120],
            ['nombre' => 'Mercedes AMG', 'añoCreacion' => 1970, 'valorMercado' => 20.2, 'nacionalidad' => 'Alemania', 'puntosRealizados' => 69],
            ['nombre' => 'McLaren', 'añoCreacion' => 1966, 'valorMercado' => 23.3, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 34],
            ['nombre' => 'Aston Martin', 'añoCreacion' => 2018, 'valorMercado' => 14.1, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 33],
            ['nombre' => 'Alpine', 'añoCreacion' => 1986, 'valorMercado' => 8.3, 'nacionalidad' => 'Francia', 'puntosRealizados' => 7],
            ['nombre' => 'Visa Cash App RB', 'añoCreacion' => 1985, 'valorMercado' => 8.4, 'nacionalidad' => 'Italia', 'puntosRealizados' => 4],
            ['nombre' => 'Stake F1 Team', 'añoCreacion' => 1993, 'valorMercado' => 3.5, 'nacionalidad' => 'Suiza', 'puntosRealizados' => 0],
            ['nombre' => 'Hass', 'añoCreacion' => 2016, 'valorMercado' => 6.2, 'nacionalidad' => 'Estados Unidos', 'puntosRealizados' => 0],
            ['nombre' => 'Williams', 'añoCreacion' => 1978, 'valorMercado' => 6.2, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 0]
        ];

        foreach ($constructors as $constructorData) {
            $constructor = new Constructor();
            $constructor->nombre = $constructorData['nombre'];
            $constructor->añoCreacion = $constructorData['añoCreacion'];
            $constructor->valorMercado = $constructorData['valorMercado'];
            $constructor->nacionalidad = $constructorData['nacionalidad'];
            $constructor->puntosRealizados = $constructorData['puntosRealizados'];

            $constructor->save();
        }
    }
}
