<?php

namespace Database\Seeders;

use App\Models\Carrera_Cuali;
use Illuminate\Database\Seeder;

class carrera_cualisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $carreraCualis = [
            //cuali 1
            ['num_piloto' => 1, 'cualID' => 1, 'tiempo_q1' => '1:30.031', 'tiempo_q2' => '1:29.374', 'tiempo_q3' => '1:29.179', 'posicion' => 1],
            ['num_piloto' => 16, 'cualID' => 1, 'tiempo_q1' => '1:30.243', 'tiempo_q2' => '1:29.165', 'tiempo_q3' => '1:29.407', 'posicion' => 2],
            ['num_piloto' => 63, 'cualID' => 1, 'tiempo_q1' => '1:30.350', 'tiempo_q2' => '1:29.922', 'tiempo_q3' => '1:29.485', 'posicion' => 3],
            ['num_piloto' => 55, 'cualID' => 1, 'tiempo_q1' => '1:29.909', 'tiempo_q2' => '1:29.573', 'tiempo_q3' => '1:29.507', 'posicion' => 4],
            ['num_piloto' => 11, 'cualID' => 1, 'tiempo_q1' => '1:30.221', 'tiempo_q2' => '1:29.932', 'tiempo_q3' => '1:29.537', 'posicion' => 5],
            ['num_piloto' => 14, 'cualID' => 1, 'tiempo_q1' => '1:30.179', 'tiempo_q2' => '1:29.801', 'tiempo_q3' => '1:29.542', 'posicion' => 6],
            ['num_piloto' => 4, 'cualID' => 1, 'tiempo_q1' => '1:30.143', 'tiempo_q2' => '1:29.941', 'tiempo_q3' => '1:29.614', 'posicion' => 7],
            ['num_piloto' => 81, 'cualID' => 1, 'tiempo_q1' => '1:30.531', 'tiempo_q2' => '1:30.122', 'tiempo_q3' => '1:29.683', 'posicion' => 8],
            ['num_piloto' => 44, 'cualID' => 1, 'tiempo_q1' => '1:30.451', 'tiempo_q2' => '1:29.718', 'tiempo_q3' => '1:29.710', 'posicion' => 9],
            ['num_piloto' => 27, 'cualID' => 1, 'tiempo_q1' => '1:30.566', 'tiempo_q2' => '1:29.851', 'tiempo_q3' => '1:30.502', 'posicion' => 10],
            ['num_piloto' => 22, 'cualID' => 1, 'tiempo_q1' => '1:30.481', 'tiempo_q2' => '1:30.129', 'tiempo_q3' => '', 'posicion' => 11],
            ['num_piloto' => 18, 'cualID' => 1, 'tiempo_q1' => '1:29.965', 'tiempo_q2' => '1:30.200', 'tiempo_q3' => '', 'posicion' => 12],
            ['num_piloto' => 23, 'cualID' => 1, 'tiempo_q1' => '1:30.397', 'tiempo_q2' => '1:30.221', 'tiempo_q3' => '', 'posicion' => 13],
            ['num_piloto' => 3, 'cualID' => 1, 'tiempo_q1' => '1:30.562', 'tiempo_q2' => '1:30.278', 'tiempo_q3' => '', 'posicion' => 14],
            ['num_piloto' => 20, 'cualID' => 1, 'tiempo_q1' => '1:30.646', 'tiempo_q2' => '1:30.529', 'tiempo_q3' => '', 'posicion' => 15],
            ['num_piloto' => 77, 'cualID' => 1, 'tiempo_q1' => '1:30.756', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['num_piloto' => 24, 'cualID' => 1, 'tiempo_q1' => '1:30.757', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['num_piloto' => 2, 'cualID' => 1, 'tiempo_q1' => '1:30.770', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['num_piloto' => 31, 'cualID' => 1, 'tiempo_q1' => '1:30.793', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['num_piloto' => 10, 'cualID' => 1, 'tiempo_q1' => '1:30.948', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],
            //cuali 2
            ['num_piloto' => 1, 'cualID' => 2, 'tiempo_q1' => '1:28.171', 'tiempo_q2' => '1:28.033', 'tiempo_q3' => '1:27.472', 'posicion' => 1],
            ['num_piloto' => 16, 'cualID' => 2, 'tiempo_q1' => '1:28.318', 'tiempo_q2' => '1:28.112', 'tiempo_q3' => '1:27.791', 'posicion' => 2],
            ['num_piloto' => 11, 'cualID' => 2, 'tiempo_q1' => '1:28.638', 'tiempo_q2' => '1:28.467', 'tiempo_q3' => '1:27.807', 'posicion' => 3],
            ['num_piloto' => 14, 'cualID' => 2, 'tiempo_q1' => '1:28.706', 'tiempo_q2' => '1:28.122', 'tiempo_q3' => '1:27.846', 'posicion' => 4],
            ['num_piloto' => 81, 'cualID' => 2, 'tiempo_q1' => '1:28.755', 'tiempo_q2' => '1:28.343', 'tiempo_q3' => '1:28.089', 'posicion' => 5],
            ['num_piloto' => 4, 'cualID' => 2, 'tiempo_q1' => '1:28.805', 'tiempo_q2' => '1:28.479', 'tiempo_q3' => '1:28.132', 'posicion' => 6],
            ['num_piloto' => 63, 'cualID' => 2, 'tiempo_q1' => '1:28.749', 'tiempo_q2' => '1:28.448', 'tiempo_q3' => '1:28.316', 'posicion' => 7],
            ['num_piloto' => 44, 'cualID' => 2, 'tiempo_q1' => '1:28.994', 'tiempo_q2' => '1:28.606', 'tiempo_q3' => '1:28.460', 'posicion' => 8],
            ['num_piloto' => 22, 'cualID' => 2, 'tiempo_q1' => '1:28.988', 'tiempo_q2' => '1:28.564', 'tiempo_q3' => '1:28.547', 'posicion' => 9],
            ['num_piloto' => 18, 'cualID' => 2, 'tiempo_q1' => '1:28.250', 'tiempo_q2' => '1:28.578', 'tiempo_q3' => '1:28.572', 'posicion' => 10],
            ['num_piloto' => 38, 'cualID' => 2, 'tiempo_q1' => '1:28.984', 'tiempo_q2' => '1:28.642', 'tiempo_q3' => '', 'posicion' => 11],
            ['num_piloto' => 23, 'cualID' => 2, 'tiempo_q1' => '1:29.107', 'tiempo_q2' => '1:28.980', 'tiempo_q3' => '', 'posicion' => 12],
            ['num_piloto' => 20, 'cualID' => 2, 'tiempo_q1' => '1:29.069', 'tiempo_q2' => '1:29.020', 'tiempo_q3' => '', 'posicion' => 13],
            ['num_piloto' => 3, 'cualID' => 2, 'tiempo_q1' => '1:29.065', 'tiempo_q2' => '1:29.025', 'tiempo_q3' => '', 'posicion' => 14],
            ['num_piloto' => 27, 'cualID' => 2, 'tiempo_q1' => '1:29.055', 'tiempo_q2' => 'DNF', 'tiempo_q3' => '', 'posicion' => 15],
            ['num_piloto' => 77, 'cualID' => 2, 'tiempo_q1' => '1:29.179', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['num_piloto' => 31, 'cualID' => 2, 'tiempo_q1' => '1:29.475', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['num_piloto' => 10, 'cualID' => 2, 'tiempo_q1' => '1:29.479', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['num_piloto' => 2, 'cualID' => 2, 'tiempo_q1' => '1:29.526', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['num_piloto' => 24, 'cualID' => 2, 'tiempo_q1' => 'DNF', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],
        ];

        foreach ($carreraCualis as $carreraCuali) {
            $carCuali = new Carrera_Cuali();
            $carCuali->num_piloto = $carreraCuali['num_piloto'];
            $carCuali->cualID = $carreraCuali['cualID'];
            $carCuali->tiempo_q1 = $carreraCuali['tiempo_q1'];
            $carCuali->tiempo_q2 = $carreraCuali['tiempo_q2'];
            $carCuali->tiempo_q3 = $carreraCuali['tiempo_q3'];
            $carCuali->posicion = $carreraCuali['posicion'];
            $carCuali->save();
        }
    }
}
