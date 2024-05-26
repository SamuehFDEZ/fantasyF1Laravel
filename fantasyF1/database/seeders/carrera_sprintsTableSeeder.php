<?php

namespace Database\Seeders;

use App\Models\Carrera_Sprint;
use Illuminate\Database\Seeder;

class carrera_sprintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $carreraSprints = [
            // Ronda 5
            ['nombre_piloto' => 'Max Verstappen', 'sprintID' => 1, 'tiempo' => '32:04.660', 'posicion' => 1, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Lewis Hamilton', 'sprintID' => 1, 'tiempo' => '+13.043s', 'posicion' => 2, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Sergio Pérez', 'sprintID' => 1, 'tiempo' => '+15.258s', 'posicion' => 3, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Charles Leclerc', 'sprintID' => 1, 'tiempo' => '+17.486s', 'posicion' => 4, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Carlos Sainz', 'sprintID' => 1, 'tiempo' => '+20.696s', 'posicion' => 5, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Lando Norris', 'sprintID' => 1, 'tiempo' => '+22.088s', 'posicion' => 6, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Oscar Piastri', 'sprintID' => 1, 'tiempo' => '+24.713s', 'posicion' => 7, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'George Russell', 'sprintID' => 1, 'tiempo' => '+25.696s', 'posicion' => 8, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Zhou Guanyu', 'sprintID' => 1, 'tiempo' => '+31.951s', 'posicion' => 9, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Kevin Magnussen', 'sprintID' => 1, 'tiempo' => '+37.398s', 'posicion' => 10, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Daniel Ricciardo', 'sprintID' => 1, 'tiempo' => '+37.840s', 'posicion' => 11, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Valtteri Bottas', 'sprintID' => 1, 'tiempo' => '+38.295s', 'posicion' => 12, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Esteban Ocon', 'sprintID' => 1, 'tiempo' => '+39.841s', 'posicion' => 13, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Lance Stroll', 'sprintID' => 1, 'tiempo' => '+40.299s', 'posicion' => 14, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Pierre Gasly', 'sprintID' => 1, 'tiempo' => '+40.838s', 'posicion' => 15, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Yuki Tsunoda', 'sprintID' => 1, 'tiempo' => '+41.870s', 'posicion' => 16, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Alex Albon', 'sprintID' => 1, 'tiempo' => '+42.998s', 'posicion' => 17, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Logan Sargeant', 'sprintID' => 1, 'tiempo' => '+46.352s', 'posicion' => 18, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Nico Hülkenberg', 'sprintID' => 1, 'tiempo' => '+49.630s', 'posicion' => 19, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Fernando Alonso', 'sprintID' => 1, 'tiempo' => 'DNF', 'posicion' => 20, 'vueltas_hechas' => 17],

            // Ronda 6
            ['nombre_piloto' => 'Max Verstappen', 'sprintID' => 2, 'tiempo' => '31:31.383', 'posicion' => 1, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Charles Leclerc', 'sprintID' => 2, 'tiempo' => '+3.371s', 'posicion' => 2, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Sergio Pérez', 'sprintID' => 2, 'tiempo' => '+5.095s', 'posicion' => 3, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Daniel Ricciardo', 'sprintID' => 2, 'tiempo' => '+14.971s', 'posicion' => 4, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Carlos Sainz', 'sprintID' => 2, 'tiempo' => '+15.222s', 'posicion' => 5, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Oscar Piastri', 'sprintID' => 2, 'tiempo' => '+15.750s', 'posicion' => 6, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Nico Hülkenberg', 'sprintID' => 2, 'tiempo' => '+22.054s', 'posicion' => 7, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Yuki Tsunoda', 'sprintID' => 2, 'tiempo' => '+29.816s', 'posicion' => 8, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Pierre Gasly', 'sprintID' => 2, 'tiempo' => '+31.880s', 'posicion' => 9, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Logan Sargeant', 'sprintID' => 2, 'tiempo' => '+34.355s', 'posicion' => 10, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Zhou Guanyu', 'sprintID' => 2, 'tiempo' => '+35.078s', 'posicion' => 11, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'George Russell', 'sprintID' => 2, 'tiempo' => '+35.755s', 'posicion' => 12, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Alex Albon', 'sprintID' => 2, 'tiempo' => '+36.086s', 'posicion' => 13, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Valtteri Bottas', 'sprintID' => 2, 'tiempo' => '+36.892s', 'posicion' => 14, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Esteban Ocon', 'sprintID' => 2, 'tiempo' => '+37.740s', 'posicion' => 15, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Lewis Hamilton', 'sprintID' => 2, 'tiempo' => '+49.347s', 'posicion' => 16, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Fernando Alonso', 'sprintID' => 2, 'tiempo' => '+59.409s', 'posicion' => 17, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Kevin Magnussen', 'sprintID' => 2, 'tiempo' => '+66.303s', 'posicion' => 18, 'vueltas_hechas' => 19],
            ['nombre_piloto' => 'Lance Stroll', 'sprintID' => 2, 'tiempo' => '+0 lap', 'posicion' => 19, 'vueltas_hechas' => 1],
            ['nombre_piloto' => 'Lando Norris', 'sprintID' => 2, 'tiempo' => '+0 lap', 'posicion' => 20, 'vueltas_hechas' => 0],

        ];

        foreach ($carreraSprints as $sprint) {
            $spr = new Carrera_Sprint();
            $spr->nombre_piloto = $sprint['nombre_piloto'];
            $spr->sprintID = $sprint['sprintID'];
            $spr->tiempo = $sprint['tiempo'];
            $spr->posicion = $sprint['posicion'];
            $spr->vueltas_hechas = $sprint['vueltas_hechas'];
            $spr->save();
        }
    }
}
