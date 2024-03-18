<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Constructor;

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
            ['nombre' => 'Red Bull', 'añoCreacion' => 1997, 'valorMercado' => 28.0, 'nacionalidad' => 'Austria'],
            ['nombre' => 'Ferrari', 'añoCreacion' => 1950, 'valorMercado' => 19.6, 'nacionalidad' => 'Italia'],
            ['nombre' => 'Mercedes AMG', 'añoCreacion' => 1970, 'valorMercado' => 20.2, 'nacionalidad' => 'Alemania'],
            ['nombre' => 'McLaren', 'añoCreacion' => 1966, 'valorMercado' => 23.3, 'nacionalidad' => 'Reino Unido'],
            ['nombre' => 'Aston Martin', 'añoCreacion' => 2018, 'valorMercado' => 14.1, 'nacionalidad' => 'Reino Unido'],
            ['nombre' => 'Alpine', 'añoCreacion' => 1986, 'valorMercado' => 8.3, 'nacionalidad' => 'Francia'],
            ['nombre' => 'Visa Cash App RB', 'añoCreacion' => 1985, 'valorMercado' => 8.4, 'nacionalidad' => 'Italia'],
            ['nombre' => 'Stake F1 Team', 'añoCreacion' => 1993, 'valorMercado' => 3.5, 'nacionalidad' => 'Suiza'],
            ['nombre' => 'Hass', 'añoCreacion' => 2016, 'valorMercado' => 6.2, 'nacionalidad' => 'Estados Unidos'],
            ['nombre' => 'Williams', 'añoCreacion' => 1978, 'valorMercado' => 6.2, 'nacionalidad' => 'Reino Unido']
        ];

        foreach ($constructors as $constructorData) {
            $constructor = new Constructor();
            $constructor->nombre = $constructorData['nombre'];
            $constructor->añoCreacion = $constructorData['añoCreacion'];
            $constructor->valorMercado = $constructorData['valorMercado'];
            $constructor->nacionalidad = $constructorData['nacionalidad'];
            $constructor->save();
        }
    }
}
