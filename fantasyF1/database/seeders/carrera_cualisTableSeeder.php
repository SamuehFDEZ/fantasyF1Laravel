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
            //cuali bahrein
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
            //cuali arabia saudi
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
            //cuali australia
            ['num_piloto' => 1, 'cualID' => 3, 'tiempo_q1' => '1:16.819', 'tiempo_q2' => '1:16.387', 'tiempo_q3' => '1:15.915', 'posicion' => 1],
            ['num_piloto' => 55, 'cualID' => 3, 'tiempo_q1' => '1:16.731', 'tiempo_q2' => '1:16.189', 'tiempo_q3' => '1:16.185', 'posicion' => 2],
            ['num_piloto' => 11, 'cualID' => 3, 'tiempo_q1' => '1:16.805', 'tiempo_q2' => '1:16.631', 'tiempo_q3' => '1:16.274', 'posicion' => 3],
            ['num_piloto' => 4, 'cualID' => 3, 'tiempo_q1' => '1:17.430', 'tiempo_q2' => '1:16.750', 'tiempo_q3' => '1:16.315', 'posicion' => 4],
            ['num_piloto' => 16, 'cualID' => 3, 'tiempo_q1' => '1:16.984', 'tiempo_q2' => '1:16.304', 'tiempo_q3' => '1:16.435', 'posicion' => 5],
            ['num_piloto' => 81, 'cualID' => 3, 'tiempo_q1' => '1:17.369', 'tiempo_q2' => '1:16.601', 'tiempo_q3' => '1:16.572', 'posicion' => 6],
            ['num_piloto' => 63, 'cualID' => 3, 'tiempo_q1' => '1:17.062', 'tiempo_q2' => '1:16.901', 'tiempo_q3' => '1:16.724', 'posicion' => 7],
            ['num_piloto' => 22, 'cualID' => 3, 'tiempo_q1' => '1:17.356', 'tiempo_q2' => '1:16.791', 'tiempo_q3' => '1:16.788', 'posicion' => 8],
            ['num_piloto' => 18, 'cualID' => 3, 'tiempo_q1' => '1:17.376', 'tiempo_q2' => '1:16.780', 'tiempo_q3' => '1:17.072', 'posicion' => 9],
            ['num_piloto' => 14, 'cualID' => 3, 'tiempo_q1' => '1:16.991', 'tiempo_q2' => '1:16.710', 'tiempo_q3' => '1:17.552', 'posicion' => 10],
            ['num_piloto' => 44, 'cualID' => 3, 'tiempo_q1' => '1:17.499', 'tiempo_q2' => '1:16.960', 'tiempo_q3' => '', 'posicion' => 11],
            ['num_piloto' => 23, 'cualID' => 3, 'tiempo_q1' => '1:17.130', 'tiempo_q2' => '1:17.167', 'tiempo_q3' => '', 'posicion' => 12],
            ['num_piloto' => 77, 'cualID' => 3, 'tiempo_q1' => '1:17.543', 'tiempo_q2' => '1:17.340', 'tiempo_q3' => '', 'posicion' => 13],
            ['num_piloto' => 20, 'cualID' => 3, 'tiempo_q1' => '1:17.709', 'tiempo_q2' => '1:17.427', 'tiempo_q3' => '', 'posicion' => 14],
            ['num_piloto' => 31, 'cualID' => 3, 'tiempo_q1' => '1:17.617', 'tiempo_q2' => '1:17.697', 'tiempo_q3' => '', 'posicion' => 15],
            ['num_piloto' => 27, 'cualID' => 3, 'tiempo_q1' => '1:17.976', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['num_piloto' => 10, 'cualID' => 3, 'tiempo_q1' => '1:17.982', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['num_piloto' => 3, 'cualID' => 3, 'tiempo_q1' => '1:18.085', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['num_piloto' => 24, 'cualID' => 3, 'tiempo_q1' => '1:18.188', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            //cuali japon
            ['num_piloto' => 1, 'cualID' => 4, 'tiempo_q1' => '1:28.866', 'tiempo_q2' => '1:28.740', 'tiempo_q3' => '1:28.197', 'posicion' => 1],
            ['num_piloto' => 11, 'cualID' => 4, 'tiempo_q1' => '1:29.303', 'tiempo_q2' => '1:28.752', 'tiempo_q3' => '1:28.263', 'posicion' => 2],
            ['num_piloto' => 4, 'cualID' => 4, 'tiempo_q1' => '1:29.536', 'tiempo_q2' => '1:28.940', 'tiempo_q3' => '1:28.489', 'posicion' => 3],
            ['num_piloto' => 55, 'cualID' => 4, 'tiempo_q1' => '1:29.513', 'tiempo_q2' => '1:29.099', 'tiempo_q3' => '1:28.682', 'posicion' => 4],
            ['num_piloto' => 14, 'cualID' => 4, 'tiempo_q1' => '1:29.254', 'tiempo_q2' => '1:29.082', 'tiempo_q3' => '1:28.686', 'posicion' => 5],
            ['num_piloto' => 81, 'cualID' => 4, 'tiempo_q1' => '1:29.425', 'tiempo_q2' => '1:29.148', 'tiempo_q3' => '1:28.760', 'posicion' => 6],
            ['num_piloto' => 44, 'cualID' => 4, 'tiempo_q1' => '1:29.661', 'tiempo_q2' => '1:28.887', 'tiempo_q3' => '1:28.766', 'posicion' => 7],
            ['num_piloto' => 16, 'cualID' => 4, 'tiempo_q1' => '1:29.338', 'tiempo_q2' => '1:29.196', 'tiempo_q3' => '1:28.786', 'posicion' => 8],
            ['num_piloto' => 63, 'cualID' => 4, 'tiempo_q1' => '1:29.799', 'tiempo_q2' => '1:29.140', 'tiempo_q3' => '1:29.008', 'posicion' => 9],
            ['num_piloto' => 22, 'cualID' => 4, 'tiempo_q1' => '1:29.775', 'tiempo_q2' => '1:29.417', 'tiempo_q3' => '1:29.413', 'posicion' => 10],
            ['num_piloto' => 3, 'cualID' => 4, 'tiempo_q1' => '1:29.727', 'tiempo_q2' => '1:29.472', 'tiempo_q3' => '', 'posicion' => 11],
            ['num_piloto' => 27, 'cualID' => 4, 'tiempo_q1' => '1:29.821', 'tiempo_q2' => '1:29.494', 'tiempo_q3' => '', 'posicion' => 12],
            ['num_piloto' => 77, 'cualID' => 4, 'tiempo_q1' => '1:29.602', 'tiempo_q2' => '1:29.593', 'tiempo_q3' => '', 'posicion' => 13],
            ['num_piloto' => 23, 'cualID' => 4, 'tiempo_q1' => '1:29.963', 'tiempo_q2' => '1:29.714', 'tiempo_q3' => '', 'posicion' => 14],
            ['num_piloto' => 31, 'cualID' => 4, 'tiempo_q1' => '1:29.811', 'tiempo_q2' => '1:29.816', 'tiempo_q3' => '', 'posicion' => 15],
            ['num_piloto' => 18, 'cualID' => 4, 'tiempo_q1' => '1:30.024', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['num_piloto' => 10, 'cualID' => 4, 'tiempo_q1' => '1:30.119', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['num_piloto' => 20, 'cualID' => 4, 'tiempo_q1' => '1:30.131', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['num_piloto' => 2, 'cualID' => 4, 'tiempo_q1' => '1:30.139', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['num_piloto' => 24, 'cualID' => 4, 'tiempo_q1' => '1:30.143', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],

            //cuali china
            ['num_piloto' => 1, 'cualID' => 5, 'tiempo_q1' => '1:34.742', 'tiempo_q2' => '1:33.794', 'tiempo_q3' => '1:33.660', 'posicion' => 1],
            ['num_piloto' => 11, 'cualID' => 5, 'tiempo_q1' => '1:35.457', 'tiempo_q2' => '1:34.026', 'tiempo_q3' => '1:33.982', 'posicion' => 2],
            ['num_piloto' => 14, 'cualID' => 5, 'tiempo_q1' => '1:35.116', 'tiempo_q2' => '1:34.652', 'tiempo_q3' => '1:34.148', 'posicion' => 3],
            ['num_piloto' => 4, 'cualID' => 5, 'tiempo_q1' => '1:34.842', 'tiempo_q2' => '1:34.460', 'tiempo_q3' => '1:34.165', 'posicion' => 4],
            ['num_piloto' => 81, 'cualID' => 5, 'tiempo_q1' => '1:35.014', 'tiempo_q2' => '1:34.659', 'tiempo_q3' => '1:34.273', 'posicion' => 5],
            ['num_piloto' => 16, 'cualID' => 5, 'tiempo_q1' => '1:34.797', 'tiempo_q2' => '1:34.399', 'tiempo_q3' => '1:34.289', 'posicion' => 6],
            ['num_piloto' => 55, 'cualID' => 5, 'tiempo_q1' => '1:34.970', 'tiempo_q2' => '1:34.368', 'tiempo_q3' => '1:34.297', 'posicion' => 7],
            ['num_piloto' => 63, 'cualID' => 5, 'tiempo_q1' => '1:35.084', 'tiempo_q2' => '1:34.609', 'tiempo_q3' => '1:34.433', 'posicion' => 8],
            ['num_piloto' => 27, 'cualID' => 5, 'tiempo_q1' => '1:35.068', 'tiempo_q2' => '1:34.667', 'tiempo_q3' => '1:34.604', 'posicion' => 9],
            ['num_piloto' => 77, 'cualID' => 5, 'tiempo_q1' => '1:35.169', 'tiempo_q2' => '1:34.769', 'tiempo_q3' => '1:34.665', 'posicion' => 10],
            ['num_piloto' => 18, 'cualID' => 5, 'tiempo_q1' => '1:35.334', 'tiempo_q2' => '1:34.838', 'tiempo_q3' => '', 'posicion' => 11],
            ['num_piloto' => 3, 'cualID' => 5, 'tiempo_q1' => '1:35.443', 'tiempo_q2' => '1:34.934', 'tiempo_q3' => '', 'posicion' => 12],
            ['num_piloto' => 31, 'cualID' => 5, 'tiempo_q1' => '1:35.356', 'tiempo_q2' => '1:35.223', 'tiempo_q3' => '', 'posicion' => 13],
            ['num_piloto' => 23, 'cualID' => 5, 'tiempo_q1' => '1:35.384', 'tiempo_q2' => '1:35.241', 'tiempo_q3' => '', 'posicion' => 14],
            ['num_piloto' => 10, 'cualID' => 5, 'tiempo_q1' => '1:35.287', 'tiempo_q2' => '1:35.463', 'tiempo_q3' => '', 'posicion' => 15],
            ['num_piloto' => 24, 'cualID' => 5, 'tiempo_q1' => '1:35.505', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['num_piloto' => 20, 'cualID' => 5, 'tiempo_q1' => '1:35.516', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['num_piloto' => 44, 'cualID' => 5, 'tiempo_q1' => '1:35.573', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['num_piloto' => 22, 'cualID' => 5, 'tiempo_q1' => '1:35.746', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['num_piloto' => 2, 'cualID' => 5, 'tiempo_q1' => '1:36.358', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],
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
