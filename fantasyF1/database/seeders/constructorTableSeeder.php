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
            ['nombre' => 'Red Bull', 'añoCreacion' => 1997, 'valorMercado' => 28.0, 'nacionalidad' => 'Austria', 'puntosRealizados' => 195, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/red-bull-racing.png.transform/4col/image.png'],
            ['nombre' => 'Ferrari', 'añoCreacion' => 1950, 'valorMercado' => 19.6, 'nacionalidad' => 'Italia', 'puntosRealizados' => 151, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/ferrari.png.transform/4col/image.png'],
            ['nombre' => 'Mercedes AMG', 'añoCreacion' => 1970, 'valorMercado' => 20.2, 'nacionalidad' => 'Alemania', 'puntosRealizados' => 52, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/mercedes.png.transform/4col/image.png'],
            ['nombre' => 'McLaren', 'añoCreacion' => 1966, 'valorMercado' => 23.3, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 96, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/mclaren.png.transform/4col/image.png'],
            ['nombre' => 'Aston Martin', 'añoCreacion' => 2018, 'valorMercado' => 14.1, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 40, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/aston-martin.png.transform/4col/image.png'],
            ['nombre' => 'Alpine', 'añoCreacion' => 1986, 'valorMercado' => 8.3, 'nacionalidad' => 'Francia', 'puntosRealizados' => 0, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/alpine.png.transform/4col/image.png'],
            ['nombre' => 'Visa Cash App RB', 'añoCreacion' => 1985, 'valorMercado' => 8.4, 'nacionalidad' => 'Italia', 'puntosRealizados' => 7, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/rb.png.transform/4col/image.png'],
            ['nombre' => 'Stake F1 Team', 'añoCreacion' => 1993, 'valorMercado' => 3.5, 'nacionalidad' => 'Suiza', 'puntosRealizados' => 0, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/kick-sauber.png.transform/4col/image.png'],
            ['nombre' => 'Haas', 'añoCreacion' => 2016, 'valorMercado' => 6.2, 'nacionalidad' => 'Estados Unidos', 'puntosRealizados' => 5, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/haas.png.transform/4col/image.png'],
            ['nombre' => 'Williams', 'añoCreacion' => 1978, 'valorMercado' => 6.2, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 0, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/williams.png.transform/4col/image.png']
        ];

        foreach ($constructors as $constructorData) {
            $constructor = new Constructor();
            $constructor->nombre = $constructorData['nombre'];
            $constructor->añoCreacion = $constructorData['añoCreacion'];
            $constructor->valorMercado = $constructorData['valorMercado'];
            $constructor->nacionalidad = $constructorData['nacionalidad'];
            $constructor->puntosRealizados = $constructorData['puntosRealizados'];
            $constructor->coche = base64_encode($constructorData['coche']);

            $constructor->save();
        }
    }
}
