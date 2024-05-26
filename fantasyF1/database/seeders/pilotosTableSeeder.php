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
            ['num_piloto' => 1, 'nombre' => 'Max Verstappen', 'valorMercado' => 30.0, 'puntosRealizados' => 169, 'fechaNac' => '1997-9-30', 'nacionalidad' => 'Holanda', 'nombre_constructor' => 'Red Bull', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/M/MAXVER01_Max_Verstappen/maxver01.png' ],
            ['num_piloto' => 11, 'nombre' => 'Sergio Pérez', 'valorMercado' => 21.1, 'puntosRealizados' => 107, 'fechaNac' => '1990-1-26', 'nacionalidad' => 'Mexico', 'nombre_constructor' => 'Red Bull', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/S/SERPER01_Sergio_Perez/serper01.png'],
            ['num_piloto' => 55, 'nombre' => 'Carlos Sainz', 'valorMercado' => 23.1, 'puntosRealizados' => 108, 'fechaNac' => '1994-9-01', 'nacionalidad' => 'España', 'nombre_constructor' => 'Ferrari', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/C/CARSAI01_Carlos_Sainz/carsai01.png'],
            ['num_piloto' => 16, 'nombre' => 'Charles Leclerc', 'valorMercado' => 19.4, 'puntosRealizados' => 138, 'fechaNac' => '1997-10-16', 'nacionalidad' => 'Mónaco', 'nombre_constructor' => 'Ferrari', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/C/CHALEC01_Charles_Leclerc/chalec01.png'],
            ['num_piloto' => 38, 'nombre' => 'Oliver Bearman', 'valorMercado' => 15.5, 'puntosRealizados' => 6, 'fechaNac' => '2005-6-08', 'nacionalidad' => 'Reino Unido', 'nombre_constructor' => 'Ferrari', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/O/OLIBEA01_Oliver_Bearman/olibea01.png'],
            ['num_piloto' => 63, 'nombre' => 'George Russell', 'valorMercado' => 15.1, 'puntosRealizados' => 54, 'fechaNac' => '1998-2-15', 'nacionalidad' => 'Reino Unido', 'nombre_constructor' => 'Mercedes AMG', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/G/GEORUS01_George_Russell/georus01.png'],
            ['num_piloto' => 44, 'nombre' => 'Lewis Hamilton', 'valorMercado' => 13.4, 'puntosRealizados' => 42, 'fechaNac' => '1985-1-07', 'nacionalidad' => 'Reino Unido', 'nombre_constructor' => 'Mercedes AMG', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LEWHAM01_Lewis_Hamilton/lewham01.png' ],
            ['num_piloto' => 4, 'nombre' => 'Lando Norris', 'valorMercado' => 23.1, 'puntosRealizados' => 113, 'fechaNac' => '1999-11-13', 'nacionalidad' => 'Reino Unido', 'nombre_constructor' => 'McLaren', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LANNOR01_Lando_Norris/lannor01.png'],
            ['num_piloto' => 81, 'nombre' => 'Oscar Piastri', 'valorMercado' => 17.1, 'puntosRealizados' => 71, 'fechaNac' => '2001-4-06', 'nacionalidad' => 'Australia', 'nombre_constructor' => 'McLaren', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/O/OSCPIA01_Oscar_Piastri/oscpia01.png'],
            ['num_piloto' => 14, 'nombre' => 'Fernando Alonso', 'valorMercado' => 16.2, 'puntosRealizados' => 33, 'fechaNac' => '1981-7-29', 'nacionalidad' => 'España', 'nombre_constructor' => 'Aston Martin', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/F/FERALO01_Fernando_Alonso/feralo01.png'],
            ['num_piloto' => 18, 'nombre' => 'Lance Stroll', 'valorMercado' => 9.5, 'puntosRealizados' => 11, 'fechaNac' => '1998-10-29', 'nacionalidad' => 'Canadá', 'nombre_constructor' => 'Aston Martin', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LANSTR01_Lance_Stroll/lanstr01.png'],
            ['num_piloto' => 24, 'nombre' => 'Zhou Guanyu', 'valorMercado' => 7.1, 'puntosRealizados' => 0, 'fechaNac' => '1999-5-30', 'nacionalidad' => 'China', 'nombre_constructor' => 'Stake F1 Team', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/G/GUAZHO01_Guanyu_Zhou/guazho01.png'],
            ['num_piloto' => 77, 'nombre' => 'Valtteri Bottas', 'valorMercado' => 5.9, 'puntosRealizados' => 0, 'fechaNac' => '1989-8-28', 'nacionalidad' => 'Finlandia', 'nombre_constructor' => 'Stake F1 Team', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/V/VALBOT01_Valtteri_Bottas/valbot01.png'],
            ['num_piloto' => 20, 'nombre' => 'Kevin Magnussen', 'valorMercado' => 6.7, 'puntosRealizados' => 1, 'fechaNac' => '1992-10-05', 'nacionalidad' => 'Dinamarca', 'nombre_constructor' => 'Haas', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/K/KEVMAG01_Kevin_Magnussen/kevmag01.png'],
            ['num_piloto' => 27, 'nombre' => 'Nico Hülkenberg', 'valorMercado' => 6.2, 'puntosRealizados' => 6, 'fechaNac' => '1987-8-19', 'nacionalidad' => 'Alemania', 'nombre_constructor' => 'Haas', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/N/NICHUL01_Nico_Hulkenberg/nichul01.png'],
            ['num_piloto' => 3, 'nombre' => 'Daniel Ricciardo', 'valorMercado' => 8.9, 'puntosRealizados' => 5, 'fechaNac' => '1989-7-01', 'nacionalidad' => 'Australia', 'nombre_constructor' => 'Visa Cash App RB', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/D/DANRIC01_Daniel_Ricciardo/danric01.png'],
            ['num_piloto' => 22, 'nombre' => 'Yuki Tsunoda', 'valorMercado' => 9.8, 'puntosRealizados' => 19, 'fechaNac' => '2000-5-11', 'nacionalidad' => 'Japón', 'nombre_constructor' => 'Visa Cash App RB', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/Y/YUKTSU01_Yuki_Tsunoda/yuktsu01.png'],
            ['num_piloto' => 23, 'nombre' => 'Alex Albon', 'valorMercado' => 6.5, 'puntosRealizados' => 2, 'fechaNac' => '1996-3-23', 'nacionalidad' => 'Tailandia', 'nombre_constructor' => 'Williams', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/A/ALEALB01_Alexander_Albon/alealb01.png'],
            ['num_piloto' => 2, 'nombre' => 'Logan Sargeant', 'valorMercado' => 5.0, 'puntosRealizados' => 0, 'fechaNac' => '2000-12-31', 'nacionalidad' => 'Estados Unidos', 'nombre_constructor' => 'Williams', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/L/LOGSAR01_Logan_Sargeant/logsar01.png'],
            ['num_piloto' => 31, 'nombre' => 'Esteban Ocon', 'valorMercado' => 8.3, 'puntosRealizados' => 1, 'fechaNac' => '1996-9-17', 'nacionalidad' => 'Francia', 'nombre_constructor' => 'Alpine', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/E/ESTOCO01_Esteban_Ocon/estoco01.png'],
            ['num_piloto' => 10, 'nombre' => 'Pierre Gasly', 'valorMercado' => 7.7, 'puntosRealizados' => 1, 'fechaNac' => '1996-2-07', 'nacionalidad' => 'Francia', 'nombre_constructor' => 'Alpine', 'imgPiloto' => 'https://media.formula1.com/d_driver_fallback_image.png/content/dam/fom-website/drivers/P/PIEGAS01_Pierre_Gasly/piegas01.png']
        ];

        foreach ($pilotos as $pilotoData) {
            $piloto = new Piloto();
            $piloto->num_piloto = $pilotoData['num_piloto'];
            $piloto->nombre = $pilotoData['nombre'];
            $piloto->valorMercado = $pilotoData['valorMercado'];
            $piloto->puntosRealizados = $pilotoData['puntosRealizados'];
            $piloto->fechaNac = $pilotoData['fechaNac'];
            $piloto->nacionalidad = $pilotoData['nacionalidad'];
            $piloto->nombre_constructor = $pilotoData['nombre_constructor'];
            $piloto->imgPiloto = base64_encode($pilotoData['imgPiloto']);
            $piloto->save();
        }
    }
}
