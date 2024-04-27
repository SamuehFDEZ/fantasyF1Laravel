<?php

namespace Database\Seeders;

use App\Models\Piloto;
use Illuminate\Database\Seeder;

class pilotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pilotos = [
            ['num_piloto' => 1, 'nombre' => 'Max Verstappen', 'valorMercado' => 30.0, 'puntosRealizados' => 77, 'fechaNac' => '1997-9-30', 'nacionalidad' => 'Holanda', 'userID' => null, 'nombre_constructor' => 'Red Bull'],
            ['num_piloto' => 11, 'nombre' => 'Sergio Pérez', 'valorMercado' => 21.1, 'puntosRealizados' => 64 , 'fechaNac' => '1990-1-26', 'nacionalidad' => 'Mexico', 'userID' => null, 'nombre_constructor' => 'Red Bull'],
            ['num_piloto' => 55, 'nombre' => 'Carlos Sainz', 'valorMercado' => 18.8, 'puntosRealizados' => 55, 'fechaNac' => '1994-9-01', 'nacionalidad' => 'España', 'userID' => null, 'nombre_constructor' => 'Ferrari'],
            ['num_piloto' => 16, 'nombre' => 'Charles Leclerc', 'valorMercado' => 19.4, 'puntosRealizados' => 59, 'fechaNac' => '1997-10-16', 'nacionalidad' => 'Mónaco', 'userID' => null, 'nombre_constructor' => 'Ferrari'],
            ['num_piloto' => 38, 'nombre' => 'Oliver Bearman', 'valorMercado' => 15.5, 'puntosRealizados' => 6, 'fechaNac' => '2005-6-08', 'nacionalidad' => 'Reino Unido', 'userID' => null, 'nombre_constructor' => 'Ferrari'],
            ['num_piloto' => 63, 'nombre' => 'George Russell', 'valorMercado' => 19.1, 'puntosRealizados' => 24, 'fechaNac' => '1998-2-15', 'nacionalidad' => 'Reino Unido', 'userID' => null, 'nombre_constructor' => 'Mercedes AMG'],
            ['num_piloto' => 44, 'nombre' => 'Lewis Hamilton', 'valorMercado' => 19.4, 'puntosRealizados' => 10, 'fechaNac' => '1985-1-07', 'nacionalidad' => 'Reino Unido', 'userID' => null, 'nombre_constructor' => 'Mercedes AMG'],
            ['num_piloto' => 4, 'nombre' => 'Lando Norris', 'valorMercado' => 23.1, 'puntosRealizados' => 37, 'fechaNac' => '1999-11-13', 'nacionalidad' => 'Reino Unido', 'userID' => null, 'nombre_constructor' => 'McLaren'],
            ['num_piloto' => 81, 'nombre' => 'Oscar Piastri', 'valorMercado' => 19.1, 'puntosRealizados' => 32, 'fechaNac' => '2001-4-06', 'nacionalidad' => 'Australia', 'userID' => null, 'nombre_constructor' => 'McLaren'],
            ['num_piloto' => 14, 'nombre' => 'Fernando Alonso', 'valorMercado' => 15.9, 'puntosRealizados' => 24, 'fechaNac' => '1981-7-29', 'nacionalidad' => 'España', 'userID' => null, 'nombre_constructor' => 'Aston Martin'],
            ['num_piloto' => 18, 'nombre' => 'Lance Stroll', 'valorMercado' => 11.2, 'puntosRealizados' => 9, 'fechaNac' => '1998-10-29', 'nacionalidad' => 'Canadá', 'userID' => null, 'nombre_constructor' => 'Aston Martin'],
            ['num_piloto' => 24, 'nombre' => 'Zhou Guanyu', 'valorMercado' => 7.1, 'puntosRealizados' => 0, 'fechaNac' => '1999-5-30', 'nacionalidad' => 'China', 'userID' => null, 'nombre_constructor' => 'Stake F1 Team'],
            ['num_piloto' => 77, 'nombre' => 'Valteri Bottas', 'valorMercado' => 6.2, 'puntosRealizados' => 0, 'fechaNac' => '1989-8-28', 'nacionalidad' => 'Finlandia', 'userID' => null, 'nombre_constructor' => 'Stake F1 Team'],
            ['num_piloto' => 20, 'nombre' => 'Kevin Magnussen', 'valorMercado' => 6.7, 'puntosRealizados' => 1, 'fechaNac' => '1992-10-05', 'nacionalidad' => 'Dinamarca', 'userID' => null, 'nombre_constructor' => 'Haas'],
            ['num_piloto' => 27, 'nombre' => 'Nico Hülkenberg', 'valorMercado' => 6.2, 'puntosRealizados' => 3, 'fechaNac' => '1987-8-19', 'nacionalidad' => 'Alemania', 'userID' => null, 'nombre_constructor' => 'Haas'],
            ['num_piloto' => 3, 'nombre' => 'Daniel Ricciardo', 'valorMercado' => 8.9, 'puntosRealizados' => 0, 'fechaNac' => '1989-7-01', 'nacionalidad' => 'Australia', 'userID' => null, 'nombre_constructor' => 'Visa Cash App RB'],
            ['num_piloto' => 22, 'nombre' => 'Yuki Tsunoda', 'valorMercado' => 7.8, 'puntosRealizados' => 0, 'fechaNac' => '2000-5-11', 'nacionalidad' => 'Japón', 'userID' => null, 'nombre_constructor' => 'Visa Cash App RB'],
            ['num_piloto' => 23, 'nombre' => 'Alex Albon', 'valorMercado' => 6.8, 'puntosRealizados' => 0, 'fechaNac' => '1996-3-23', 'nacionalidad' => 'Tailandia', 'userID' => null, 'nombre_constructor' => 'Williams'],
            ['num_piloto' => 2, 'nombre' => 'Logan Sargeant', 'valorMercado' => 5.4, 'puntosRealizados' => 0, 'fechaNac' => '2000-12-31', 'nacionalidad' => 'Estados Unidos', 'userID' => null, 'nombre_constructor' => 'Williams'],
            ['num_piloto' => 31, 'nombre' => 'Esteban Ocon', 'valorMercado' => 8.3, 'puntosRealizados' => 0, 'fechaNac' => '1996-9-17', 'nacionalidad' => 'Francia', 'userID' => null, 'nombre_constructor' => 'Alpine'],
            ['num_piloto' => 10, 'nombre' => 'Pierre Gasly', 'valorMercado' => 7.7, 'puntosRealizados' => 0, 'fechaNac' => '1996-2-07', 'nacionalidad' => 'Francia', 'userID' => null, 'nombre_constructor' => 'Alpine']
        ];

        foreach ($pilotos as $pilotoData) {
            $piloto = new Piloto();
            $piloto->num_piloto = $pilotoData['num_piloto'];
            $piloto->nombre = $pilotoData['nombre'];
            $piloto->valorMercado = $pilotoData['valorMercado'];
            $piloto->puntosRealizados = $pilotoData['puntosRealizados'];
            $piloto->fechaNac = $pilotoData['fechaNac'];
            $piloto->nacionalidad = $pilotoData['nacionalidad'];
            $piloto->userID = $pilotoData['userID'];
            $piloto->nombre_constructor = $pilotoData['nombre_constructor'];
            $piloto->save();
        }
    }
}
