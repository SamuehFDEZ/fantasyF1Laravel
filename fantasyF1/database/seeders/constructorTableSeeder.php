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
            ['nombre' => 'Red Bull', 'añoCreacion' => 1997, 'valorMercado' => 28.0, 'nacionalidad' => 'Austria', 'puntosRealizados' => 301, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/red-bull-racing.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/red-bull-racing-logo.png', 'colorEquipo' => '#3671C6'],
            ['nombre' => 'Ferrari', 'añoCreacion' => 1950, 'valorMercado' => 23.6, 'nacionalidad' => 'Italia', 'puntosRealizados' => 252, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/ferrari.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/ferrari-logo.png', 'colorEquipo' => '#E80020'],
            ['nombre' => 'Mercedes AMG', 'añoCreacion' => 1970, 'valorMercado' => 19.2, 'nacionalidad' => 'Alemania', 'puntosRealizados' => 124, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/mercedes.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/mercedes-logo.png', 'colorEquipo' => '#27F4D2'],
            ['nombre' => 'McLaren', 'añoCreacion' => 1966, 'valorMercado' => 21.3, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 212, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/mclaren.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/mclaren-logo.png', 'colorEquipo' => '#FF8000'],
            ['nombre' => 'Aston Martin', 'añoCreacion' => 2018, 'valorMercado' => 12.1, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 58, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/aston-martin.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/aston-martin-logo.png', 'colorEquipo' => '#229971'],
            ['nombre' => 'Alpine', 'añoCreacion' => 1986, 'valorMercado' => 8.3, 'nacionalidad' => 'Francia', 'puntosRealizados' => 5, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/alpine.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/alpine-logo.png', 'colorEquipo' => '#0093CC'],
            ['nombre' => 'Visa Cash App RB', 'añoCreacion' => 1985, 'valorMercado' => 8.4, 'nacionalidad' => 'Italia', 'puntosRealizados' => 28, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/rb.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/rb-logo.png', 'colorEquipo' => '#6692FF'],
            ['nombre' => 'Stake F1 Team', 'añoCreacion' => 1993, 'valorMercado' => 3.5, 'nacionalidad' => 'Suiza', 'puntosRealizados' => 0, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/kick-sauber.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/kick-sauber-logo.png', 'colorEquipo' => '#52e252'],
            ['nombre' => 'Haas', 'añoCreacion' => 2016, 'valorMercado' => 6.2, 'nacionalidad' => 'Estados Unidos', 'puntosRealizados' => 7, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/haas.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/haas-logo.png', 'colorEquipo' => '#B6BABD'],
            ['nombre' => 'Williams', 'añoCreacion' => 1978, 'valorMercado' => 6.2, 'nacionalidad' => 'Reino Unido', 'puntosRealizados' => 2, 'coche' => 'https://media.formula1.com/d_team_car_fallback_image.png/content/dam/fom-website/teams/2024/williams.png.transform/4col/image.png', 'logo' => 'https://media.formula1.com/content/dam/fom-website/teams/2024/williams-logo.png', 'colorEquipo' => '#0093CC']
        ];

        foreach ($constructors as $constructorData) {
            $constructor = new Constructor();
            $constructor->nombre = $constructorData['nombre'];
            $constructor->añoCreacion = $constructorData['añoCreacion'];
            $constructor->valorMercado = $constructorData['valorMercado'];
            $constructor->nacionalidad = $constructorData['nacionalidad'];
            $constructor->puntosRealizados = $constructorData['puntosRealizados'];
            $constructor->coche = base64_encode($constructorData['coche']);
            $constructor->logo = base64_encode($constructorData['logo']);
            $constructor->colorEquipo = $constructorData['colorEquipo'];

            $constructor->save();
        }
    }
}
