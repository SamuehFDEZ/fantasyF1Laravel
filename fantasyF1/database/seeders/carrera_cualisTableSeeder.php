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
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 1, 'tiempo_q1' => '1:30.031', 'tiempo_q2' => '1:29.374', 'tiempo_q3' => '1:29.179', 'posicion' => 1],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 1, 'tiempo_q1' => '1:30.243', 'tiempo_q2' => '1:29.165', 'tiempo_q3' => '1:29.407', 'posicion' => 2],
            ['nombre_piloto' => 'George Russell', 'cualID' => 1, 'tiempo_q1' => '1:30.350', 'tiempo_q2' => '1:29.922', 'tiempo_q3' => '1:29.485', 'posicion' => 3],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 1, 'tiempo_q1' => '1:29.909', 'tiempo_q2' => '1:29.573', 'tiempo_q3' => '1:29.507', 'posicion' => 4],
            ['nombre_piloto' => 'Sergio Pérez', 'cualID' => 1, 'tiempo_q1' => '1:30.221', 'tiempo_q2' => '1:29.932', 'tiempo_q3' => '1:29.537', 'posicion' => 5],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 1, 'tiempo_q1' => '1:30.179', 'tiempo_q2' => '1:29.801', 'tiempo_q3' => '1:29.542', 'posicion' => 6],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 1, 'tiempo_q1' => '1:30.143', 'tiempo_q2' => '1:29.941', 'tiempo_q3' => '1:29.614', 'posicion' => 7],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 1, 'tiempo_q1' => '1:30.531', 'tiempo_q2' => '1:30.122', 'tiempo_q3' => '1:29.683', 'posicion' => 8],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 1, 'tiempo_q1' => '1:30.451', 'tiempo_q2' => '1:29.718', 'tiempo_q3' => '1:29.710', 'posicion' => 9],
            ['nombre_piloto' => 'Nico Hülkenberg', 'cualID' => 1, 'tiempo_q1' => '1:30.566', 'tiempo_q2' => '1:29.851', 'tiempo_q3' => '1:30.502', 'posicion' => 10],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 1, 'tiempo_q1' => '1:30.481', 'tiempo_q2' => '1:30.129', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 1, 'tiempo_q1' => '1:29.965', 'tiempo_q2' => '1:30.200', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 1, 'tiempo_q1' => '1:30.397', 'tiempo_q2' => '1:30.221', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 1, 'tiempo_q1' => '1:30.562', 'tiempo_q2' => '1:30.278', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 1, 'tiempo_q1' => '1:30.646', 'tiempo_q2' => '1:30.529', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 1, 'tiempo_q1' => '1:30.756', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 1, 'tiempo_q1' => '1:30.757', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 1, 'tiempo_q1' => '1:30.770', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 1, 'tiempo_q1' => '1:30.793', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 1, 'tiempo_q1' => '1:30.948', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],
            //cuali arabia saudi
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 2, 'tiempo_q1' => '1:28.171', 'tiempo_q2' => '1:28.033', 'tiempo_q3' => '1:27.472', 'posicion' => 1],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 2, 'tiempo_q1' => '1:28.318', 'tiempo_q2' => '1:28.112', 'tiempo_q3' => '1:27.791', 'posicion' => 2],
            ['nombre_piloto' => 'Sergio Pérez', 'cualID' => 2, 'tiempo_q1' => '1:28.638', 'tiempo_q2' => '1:28.467', 'tiempo_q3' => '1:27.807', 'posicion' => 3],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 2, 'tiempo_q1' => '1:28.706', 'tiempo_q2' => '1:28.122', 'tiempo_q3' => '1:27.846', 'posicion' => 4],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 2, 'tiempo_q1' => '1:28.755', 'tiempo_q2' => '1:28.343', 'tiempo_q3' => '1:28.089', 'posicion' => 5],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 2, 'tiempo_q1' => '1:28.805', 'tiempo_q2' => '1:28.479', 'tiempo_q3' => '1:28.132', 'posicion' => 6],
            ['nombre_piloto' => 'George Russell', 'cualID' => 2, 'tiempo_q1' => '1:28.749', 'tiempo_q2' => '1:28.448', 'tiempo_q3' => '1:28.316', 'posicion' => 7],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 2, 'tiempo_q1' => '1:28.994', 'tiempo_q2' => '1:28.606', 'tiempo_q3' => '1:28.460', 'posicion' => 8],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 2, 'tiempo_q1' => '1:28.988', 'tiempo_q2' => '1:28.564', 'tiempo_q3' => '1:28.547', 'posicion' => 9],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 2, 'tiempo_q1' => '1:28.250', 'tiempo_q2' => '1:28.578', 'tiempo_q3' => '1:28.572', 'posicion' => 10],
            ['nombre_piloto' => 'Oliver Bearman', 'cualID' => 2, 'tiempo_q1' => '1:28.984', 'tiempo_q2' => '1:28.642', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 2, 'tiempo_q1' => '1:29.107', 'tiempo_q2' => '1:28.980', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 2, 'tiempo_q1' => '1:29.069', 'tiempo_q2' => '1:29.020', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 2, 'tiempo_q1' => '1:29.065', 'tiempo_q2' => '1:29.025', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Nico Hülkenberg', 'cualID' => 2, 'tiempo_q1' => '1:29.055', 'tiempo_q2' => 'DNF', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 2, 'tiempo_q1' => '1:29.179', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 2, 'tiempo_q1' => '1:29.475', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 2, 'tiempo_q1' => '1:29.479', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 2, 'tiempo_q1' => '1:29.526', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 2, 'tiempo_q1' => 'DNF', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],
            //cuali australia
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 3, 'tiempo_q1' => '1:16.819', 'tiempo_q2' => '1:16.387', 'tiempo_q3' => '1:15.915', 'posicion' => 1],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 3, 'tiempo_q1' => '1:16.731', 'tiempo_q2' => '1:16.189', 'tiempo_q3' => '1:16.185', 'posicion' => 2],
            ['nombre_piloto' => 'Sergio Pérez', 'cualID' => 3, 'tiempo_q1' => '1:16.805', 'tiempo_q2' => '1:16.631', 'tiempo_q3' => '1:16.274', 'posicion' => 3],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 3, 'tiempo_q1' => '1:17.430', 'tiempo_q2' => '1:16.750', 'tiempo_q3' => '1:16.315', 'posicion' => 4],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 3, 'tiempo_q1' => '1:16.984', 'tiempo_q2' => '1:16.304', 'tiempo_q3' => '1:16.435', 'posicion' => 5],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 3, 'tiempo_q1' => '1:17.369', 'tiempo_q2' => '1:16.601', 'tiempo_q3' => '1:16.572', 'posicion' => 6],
            ['nombre_piloto' => 'George Russell', 'cualID' => 3, 'tiempo_q1' => '1:17.062', 'tiempo_q2' => '1:16.901', 'tiempo_q3' => '1:16.724', 'posicion' => 7],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 3, 'tiempo_q1' => '1:17.356', 'tiempo_q2' => '1:16.791', 'tiempo_q3' => '1:16.788', 'posicion' => 8],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 3, 'tiempo_q1' => '1:17.376', 'tiempo_q2' => '1:16.780', 'tiempo_q3' => '1:17.072', 'posicion' => 9],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 3, 'tiempo_q1' => '1:16.991', 'tiempo_q2' => '1:16.710', 'tiempo_q3' => '1:17.552', 'posicion' => 10],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 3, 'tiempo_q1' => '1:17.499', 'tiempo_q2' => '1:16.960', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 3, 'tiempo_q1' => '1:17.130', 'tiempo_q2' => '1:17.167', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 3, 'tiempo_q1' => '1:17.543', 'tiempo_q2' => '1:17.340', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 3, 'tiempo_q1' => '1:17.709', 'tiempo_q2' => '1:17.427', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 3, 'tiempo_q1' => '1:17.617', 'tiempo_q2' => '1:17.697', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Nico Hülkenberg', 'cualID' => 3, 'tiempo_q1' => '1:17.976', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 3, 'tiempo_q1' => '1:17.982', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 3, 'tiempo_q1' => '1:18.085', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 3, 'tiempo_q1' => '1:18.188', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            //cuali japon
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 4, 'tiempo_q1' => '1:28.866', 'tiempo_q2' => '1:28.740', 'tiempo_q3' => '1:28.197', 'posicion' => 1],
            ['nombre_piloto' => 'Sergio Pérez', 'cualID' => 4, 'tiempo_q1' => '1:29.303', 'tiempo_q2' => '1:28.752', 'tiempo_q3' => '1:28.263', 'posicion' => 2],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 4, 'tiempo_q1' => '1:29.536', 'tiempo_q2' => '1:28.940', 'tiempo_q3' => '1:28.489', 'posicion' => 3],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 4, 'tiempo_q1' => '1:29.513', 'tiempo_q2' => '1:29.099', 'tiempo_q3' => '1:28.682', 'posicion' => 4],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 4, 'tiempo_q1' => '1:29.254', 'tiempo_q2' => '1:29.082', 'tiempo_q3' => '1:28.686', 'posicion' => 5],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 4, 'tiempo_q1' => '1:29.425', 'tiempo_q2' => '1:29.148', 'tiempo_q3' => '1:28.760', 'posicion' => 6],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 4, 'tiempo_q1' => '1:29.661', 'tiempo_q2' => '1:28.887', 'tiempo_q3' => '1:28.766', 'posicion' => 7],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 4, 'tiempo_q1' => '1:29.338', 'tiempo_q2' => '1:29.196', 'tiempo_q3' => '1:28.786', 'posicion' => 8],
            ['nombre_piloto' => 'George Russell', 'cualID' => 4, 'tiempo_q1' => '1:29.799', 'tiempo_q2' => '1:29.140', 'tiempo_q3' => '1:29.008', 'posicion' => 9],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 4, 'tiempo_q1' => '1:29.775', 'tiempo_q2' => '1:29.417', 'tiempo_q3' => '1:29.413', 'posicion' => 10],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 4, 'tiempo_q1' => '1:29.727', 'tiempo_q2' => '1:29.472', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Nico Hülkenberg', 'cualID' => 4, 'tiempo_q1' => '1:29.821', 'tiempo_q2' => '1:29.494', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 4, 'tiempo_q1' => '1:29.602', 'tiempo_q2' => '1:29.593', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 4, 'tiempo_q1' => '1:29.963', 'tiempo_q2' => '1:29.714', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 4, 'tiempo_q1' => '1:29.811', 'tiempo_q2' => '1:29.816', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 4, 'tiempo_q1' => '1:30.024', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 4, 'tiempo_q1' => '1:30.119', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 4, 'tiempo_q1' => '1:30.131', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 4, 'tiempo_q1' => '1:30.139', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 4, 'tiempo_q1' => '1:30.143', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],

            //cuali china
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 5, 'tiempo_q1' => '1:34.742', 'tiempo_q2' => '1:33.794', 'tiempo_q3' => '1:33.660', 'posicion' => 1],
            ['nombre_piloto' => 'Sergio Pérez', 'cualID' => 5, 'tiempo_q1' => '1:35.457', 'tiempo_q2' => '1:34.026', 'tiempo_q3' => '1:33.982', 'posicion' => 2],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 5, 'tiempo_q1' => '1:35.116', 'tiempo_q2' => '1:34.652', 'tiempo_q3' => '1:34.148', 'posicion' => 3],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 5, 'tiempo_q1' => '1:34.842', 'tiempo_q2' => '1:34.460', 'tiempo_q3' => '1:34.165', 'posicion' => 4],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 5, 'tiempo_q1' => '1:35.014', 'tiempo_q2' => '1:34.659', 'tiempo_q3' => '1:34.273', 'posicion' => 5],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 5, 'tiempo_q1' => '1:34.797', 'tiempo_q2' => '1:34.399', 'tiempo_q3' => '1:34.289', 'posicion' => 6],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 5, 'tiempo_q1' => '1:34.970', 'tiempo_q2' => '1:34.368', 'tiempo_q3' => '1:34.297', 'posicion' => 7],
            ['nombre_piloto' => 'George Russell', 'cualID' => 5, 'tiempo_q1' => '1:35.084', 'tiempo_q2' => '1:34.609', 'tiempo_q3' => '1:34.433', 'posicion' => 8],
            ['nombre_piloto' => 'Nico Hülkenberg', 'cualID' => 5, 'tiempo_q1' => '1:35.068', 'tiempo_q2' => '1:34.667', 'tiempo_q3' => '1:34.604', 'posicion' => 9],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 5, 'tiempo_q1' => '1:35.169', 'tiempo_q2' => '1:34.769', 'tiempo_q3' => '1:34.665', 'posicion' => 10],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 5, 'tiempo_q1' => '1:35.334', 'tiempo_q2' => '1:34.838', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 5, 'tiempo_q1' => '1:35.443', 'tiempo_q2' => '1:34.934', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 5, 'tiempo_q1' => '1:35.356', 'tiempo_q2' => '1:35.223', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 5, 'tiempo_q1' => '1:35.384', 'tiempo_q2' => '1:35.241', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 5, 'tiempo_q1' => '1:35.287', 'tiempo_q2' => '1:35.463', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 5, 'tiempo_q1' => '1:35.505', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 5, 'tiempo_q1' => '1:35.516', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 5, 'tiempo_q1' => '1:35.573', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 5, 'tiempo_q1' => '1:35.746', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 5, 'tiempo_q1' => '1:36.358', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],

            //cuali miami
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 6, 'tiempo_q1' => '1:27.689', 'tiempo_q2' => '1:27.566', 'tiempo_q3' => '1:27.241', 'posicion' => 1],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 6, 'tiempo_q1' => '1:28.081', 'tiempo_q2' => '1:27.533', 'tiempo_q3' => '1:27.382', 'posicion' => 2],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 6, 'tiempo_q1' => '1:27.937', 'tiempo_q2' => '1:27.941', 'tiempo_q3' => '1:27.455', 'posicion' => 3],
            ['nombre_piloto' => 'Sergio Pérez', 'cualID' => 6, 'tiempo_q1' => '1:27.772', 'tiempo_q2' => '1:27.839', 'tiempo_q3' => '1:27.460', 'posicion' => 4],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 6, 'tiempo_q1' => '1:27.913', 'tiempo_q2' => '1:27.871', 'tiempo_q3' => '1:27.594', 'posicion' => 5],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 6, 'tiempo_q1' => '1:28.032', 'tiempo_q2' => '1:27.721', 'tiempo_q3' => '1:27.675', 'posicion' => 6],
            ['nombre_piloto' => 'George Russell', 'cualID' => 6, 'tiempo_q1' => '1:28.159', 'tiempo_q2' => '1:28.095', 'tiempo_q3' => '1:28.067', 'posicion' => 7],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 6, 'tiempo_q1' => '1:28.167', 'tiempo_q2' => '1:27.697', 'tiempo_q3' => '1:28.107', 'posicion' => 8],
            ['nombre_piloto' => 'Nico Hülkenberg', 'cualID' => 6, 'tiempo_q1' => '1:28.383', 'tiempo_q2' => '1:28.200', 'tiempo_q3' => '1:28.146', 'posicion' => 9],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 6, 'tiempo_q1' => '1:28.324', 'tiempo_q2' => '1:28.167', 'tiempo_q3' => '1:28.192', 'posicion' => 10],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 6, 'tiempo_q1' => '1:28.177', 'tiempo_q2' => '1:28.222', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 6, 'tiempo_q1' => '1:27.976', 'tiempo_q2' => '1:28.324', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 6, 'tiempo_q1' => '1:28.209', 'tiempo_q2' => '1:28.371', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 6, 'tiempo_q1' => '1:28.343', 'tiempo_q2' => '1:28.413', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 6, 'tiempo_q1' => '1:28.453', 'tiempo_q2' => '1:28.427', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 6, 'tiempo_q1' => '1:28.463', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 6, 'tiempo_q1' => '1:28.487', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 6, 'tiempo_q1' => '1:28.617', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 6, 'tiempo_q1' => '1:28.619', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 6, 'tiempo_q1' => '1:28.824', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],


            //cuali imola
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 7, 'tiempo_q1' => '1:15.762', 'tiempo_q2' => '1:15.176', 'tiempo_q3' => '1:14.746', 'posicion' => 1],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 7, 'tiempo_q1' => '1:15.940', 'tiempo_q2' => '1:15.407', 'tiempo_q3' => '1:14.820', 'posicion' => 2],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 7, 'tiempo_q1' => '1:15.915', 'tiempo_q2' => '1:15.371', 'tiempo_q3' => '1:14.837', 'posicion' => 3],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 7, 'tiempo_q1' => '1:15.823', 'tiempo_q2' => '1:15.328', 'tiempo_q3' => '1:14.970', 'posicion' => 4],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 7, 'tiempo_q1' => '1:16.015', 'tiempo_q2' => '1:15.512', 'tiempo_q3' => '1:15.233', 'posicion' => 5],
            ['nombre_piloto' => 'George Russell', 'cualID' => 7, 'tiempo_q1' => '1:16.107', 'tiempo_q2' => '1:15.671', 'tiempo_q3' => '1:15.234', 'posicion' => 6],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 7, 'tiempo_q1' => '1:15.894', 'tiempo_q2' => '1:15.358', 'tiempo_q3' => '1:15.465', 'posicion' => 7],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 7, 'tiempo_q1' => '1:16.604', 'tiempo_q2' => '1:15.677', 'tiempo_q3' => '1:15.504', 'posicion' => 8],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 7, 'tiempo_q1' => '1:16.060', 'tiempo_q2' => '1:15.691', 'tiempo_q3' => '1:15.674', 'posicion' => 9],
            ['nombre_piloto' => 'Nico Hulkenberg', 'cualID' => 7, 'tiempo_q1' => '1:15.841', 'tiempo_q2' => '1:15.569', 'tiempo_q3' => '1:15.980', 'posicion' => 10],
            ['nombre_piloto' => 'Sergio Perez', 'cualID' => 7, 'tiempo_q1' => '1:16.404', 'tiempo_q2' => '1:15.706', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 7, 'tiempo_q1' => '1:16.361', 'tiempo_q2' => '1:15.906', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 7, 'tiempo_q1' => '1:16.458', 'tiempo_q2' => '1:15.992', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 7, 'tiempo_q1' => '1:16.524', 'tiempo_q2' => '1:16.200', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 7, 'tiempo_q1' => '1:16.015', 'tiempo_q2' => '1:16.381', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 7, 'tiempo_q1' => '1:16.626', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 7, 'tiempo_q1' => '1:16.834', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 7, 'tiempo_q1' => '1:16.854', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 7, 'tiempo_q1' => '1:16.917', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 7, 'tiempo_q1' => 'DNF', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],

            //cuali monaco

            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 8, 'tiempo_q1' => '1:11.584', 'tiempo_q2' => '1:10.825', 'tiempo_q3' => '1:10.270', 'posicion' => 1],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 8, 'tiempo_q1' => '1:11.500', 'tiempo_q2' => '1:10.756', 'tiempo_q3' => '1:10.424', 'posicion' => 2],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 8, 'tiempo_q1' => '1:11.543', 'tiempo_q2' => '1:11.075', 'tiempo_q3' => '1:10.518', 'posicion' => 3],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 8, 'tiempo_q1' => '1:11.760', 'tiempo_q2' => '1:10.732', 'tiempo_q3' => '1:10.542', 'posicion' => 4],
            ['nombre_piloto' => 'George Russell', 'cualID' => 8, 'tiempo_q1' => '1:11.492', 'tiempo_q2' => '1:10.929', 'tiempo_q3' => '1:10.543', 'posicion' => 5],
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 8, 'tiempo_q1' => '1:11.711', 'tiempo_q2' => '1:10.745', 'tiempo_q3' => '1:10.567', 'posicion' => 6],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 8, 'tiempo_q1' => '1:11.528', 'tiempo_q2' => '1:11.056', 'tiempo_q3' => '1:10.621', 'posicion' => 7],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 8, 'tiempo_q1' => '1:11.852', 'tiempo_q2' => '1:11.106', 'tiempo_q3' => '1:10.858', 'posicion' => 8],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 8, 'tiempo_q1' => '1:11.623', 'tiempo_q2' => '1:11.216', 'tiempo_q3' => '1:10.948', 'posicion' => 9],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 8, 'tiempo_q1' => '1:11.714', 'tiempo_q2' => '1:10.896', 'tiempo_q3' => '1:11.311', 'posicion' => 10],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 8, 'tiempo_q1' => '1:11.887', 'tiempo_q2' => '1:11.285', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Nico Hulkenberg', 'cualID' => 8, 'tiempo_q1' => '1:11.876', 'tiempo_q2' => '1:11.440', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 8, 'tiempo_q1' => '1:11.785', 'tiempo_q2' => '1:11.482', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 8, 'tiempo_q1' => '1:11.728', 'tiempo_q2' => '1:11.563', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 8, 'tiempo_q1' => '1:11.832', 'tiempo_q2' => '1:11.725', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 8, 'tiempo_q1' => '1:12.019', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 8, 'tiempo_q1' => '1:12.020', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Sergio Perez', 'cualID' => 8, 'tiempo_q1' => '1:12.060', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 8, 'tiempo_q1' => '1:12.512', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 8, 'tiempo_q1' => '1:13.028', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],

            //cuali montreal
            ['nombre_piloto' => 'George Russell', 'cualID' => 9, 'tiempo_q1' => '1:13.013', 'tiempo_q2' => '1:11.742', 'tiempo_q3' => '1:12.000', 'posicion' => 1],
            ['nombre_piloto' => 'Max Verstappen', 'cualID' => 9, 'tiempo_q1' => '1:12.360', 'tiempo_q2' => '1:12.549', 'tiempo_q3' => '1:12.000', 'posicion' => 2],
            ['nombre_piloto' => 'Lando Norris', 'cualID' => 9, 'tiempo_q1' => '1:12.959', 'tiempo_q2' => '1:12.201', 'tiempo_q3' => '1:12.021', 'posicion' => 3],
            ['nombre_piloto' => 'Oscar Piastri', 'cualID' => 9, 'tiempo_q1' => '1:12.907', 'tiempo_q2' => '1:12.462', 'tiempo_q3' => '1:12.103', 'posicion' => 4],
            ['nombre_piloto' => 'Daniel Ricciardo', 'cualID' => 9, 'tiempo_q1' => '1:13.240', 'tiempo_q2' => '1:12.572', 'tiempo_q3' => '1:12.178', 'posicion' => 5],
            ['nombre_piloto' => 'Fernando Alonso', 'cualID' => 9, 'tiempo_q1' => '1:13.117', 'tiempo_q2' => '1:12.635', 'tiempo_q3' => '1:12.228', 'posicion' => 6],
            ['nombre_piloto' => 'Lewis Hamilton', 'cualID' => 9, 'tiempo_q1' => '1:12.851', 'tiempo_q2' => '1:11.979', 'tiempo_q3' => '1:12.280', 'posicion' => 7],
            ['nombre_piloto' => 'Yuki Tsunoda', 'cualID' => 9, 'tiempo_q1' => '1:12.748', 'tiempo_q2' => '1:12.303', 'tiempo_q3' => '1:12.414', 'posicion' => 8],
            ['nombre_piloto' => 'Lance Stroll', 'cualID' => 9, 'tiempo_q1' => '1:13.088', 'tiempo_q2' => '1:12.659', 'tiempo_q3' => '1:12.796	', 'posicion' => 9],
            ['nombre_piloto' => 'Alex Albon', 'cualID' => 9, 'tiempo_q1' => '1:12.896', 'tiempo_q2' => '1:12.485', 'tiempo_q3' => '1:11.311', 'posicion' => 10],
            ['nombre_piloto' => 'Charles Leclerc', 'cualID' => 9, 'tiempo_q1' => '1:13.107', 'tiempo_q2' => '1:12.691', 'tiempo_q3' => '', 'posicion' => 11],
            ['nombre_piloto' => 'Carlos Sainz', 'cualID' => 9, 'tiempo_q1' => '1:13.038', 'tiempo_q2' => '1:12.728', 'tiempo_q3' => '', 'posicion' => 12],
            ['nombre_piloto' => 'Logan Sargeant', 'cualID' => 9, 'tiempo_q1' => '1:13.063', 'tiempo_q2' => '1:12.736', 'tiempo_q3' => '', 'posicion' => 13],
            ['nombre_piloto' => 'Kevin Magnussen', 'cualID' => 9, 'tiempo_q1' => '1:13.217', 'tiempo_q2' => '1:12.916', 'tiempo_q3' => '', 'posicion' => 14],
            ['nombre_piloto' => 'Pierre Gasly', 'cualID' => 9, 'tiempo_q1' => '1:13.289', 'tiempo_q2' => '1:12.940', 'tiempo_q3' => '', 'posicion' => 15],
            ['nombre_piloto' => 'Sergio Perez', 'cualID' => 9, 'tiempo_q1' => '1:13.326', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 16],
            ['nombre_piloto' => 'Valtteri Bottas', 'cualID' => 9, 'tiempo_q1' => '1:13.366', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 17],
            ['nombre_piloto' => 'Esteban Ocon', 'cualID' => 9, 'tiempo_q1' => '1:13.435', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 18],
            ['nombre_piloto' => 'Nico Hulkenberg', 'cualID' => 9, 'tiempo_q1' => '1:13.978', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 19],
            ['nombre_piloto' => 'Zhou Guanyu', 'cualID' => 9, 'tiempo_q1' => '1:14.292', 'tiempo_q2' => '', 'tiempo_q3' => '', 'posicion' => 20],
        ];

        foreach ($carreraCualis as $carreraCuali) {
            $carCuali = new Carrera_Cuali();
            $carCuali->nombre_piloto = $carreraCuali['nombre_piloto'];
            $carCuali->cualID = $carreraCuali['cualID'];
            $carCuali->tiempo_q1 = $carreraCuali['tiempo_q1'];
            $carCuali->tiempo_q2 = $carreraCuali['tiempo_q2'];
            $carCuali->tiempo_q3 = $carreraCuali['tiempo_q3'];
            $carCuali->posicion = $carreraCuali['posicion'];
            $carCuali->save();
        }
    }
}
