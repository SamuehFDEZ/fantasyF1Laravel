<?php

namespace Database\Seeders;

use App\Models\Carrera_Circuito;
use Illuminate\Database\Seeder;

class carrera_circuitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $carreraCircuitos = [
            // Ronda 1
            ['num_piloto' => 1, 'ronda' => 1, 'tiempo' => '1:31.447', 'posicion' => 1, 'vueltas_hechas' => 57],
            ['num_piloto' => 11, 'ronda' => 1, 'tiempo' => '+22.457', 'posicion' => 2, 'vueltas_hechas' => 57],
            ['num_piloto' => 55, 'ronda' => 1, 'tiempo' => '+25.110', 'posicion' => 3, 'vueltas_hechas' => 57],
            ['num_piloto' => 16, 'ronda' => 1, 'tiempo' => '+39.669', 'posicion' => 4, 'vueltas_hechas' => 57],
            ['num_piloto' => 63, 'ronda' => 1, 'tiempo' => '+46.788', 'posicion' => 5, 'vueltas_hechas' => 57],
            ['num_piloto' => 4, 'ronda' => 1, 'tiempo' => '+48.458', 'posicion' => 6, 'vueltas_hechas' => 57],
            ['num_piloto' => 44, 'ronda' => 1, 'tiempo' => '+50.324', 'posicion' => 7, 'vueltas_hechas' => 57],
            ['num_piloto' => 81, 'ronda' => 1, 'tiempo' => '+56.082', 'posicion' => 8, 'vueltas_hechas' => 57],
            ['num_piloto' => 14, 'ronda' => 1, 'tiempo' => '+74.887', 'posicion' => 9, 'vueltas_hechas' => 57],
            ['num_piloto' => 18, 'ronda' => 1, 'tiempo' => '+93.216', 'posicion' => 10, 'vueltas_hechas' => 57],
            ['num_piloto' => 24, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 11, 'vueltas_hechas' => 56],
            ['num_piloto' => 20, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 12, 'vueltas_hechas' => 56],
            ['num_piloto' => 3, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 13, 'vueltas_hechas' => 56],
            ['num_piloto' => 22, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 14, 'vueltas_hechas' => 56],
            ['num_piloto' => 23, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 15, 'vueltas_hechas' => 56],
            ['num_piloto' => 27, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 16, 'vueltas_hechas' => 56],
            ['num_piloto' => 31, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 17, 'vueltas_hechas' => 56],
            ['num_piloto' => 10, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 18, 'vueltas_hechas' => 56],
            ['num_piloto' => 77, 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 19, 'vueltas_hechas' => 56],
            ['num_piloto' => 2, 'ronda' => 1, 'tiempo' => '+2 lap', 'posicion' => 20, 'vueltas_hechas' => 55],

            // Ronda 2
            ['num_piloto' => 1, 'ronda' => 2, 'tiempo' => '1:20.43.2', 'posicion' => 1, 'vueltas_hechas' => 50],
            ['num_piloto' => 11, 'ronda' => 2, 'tiempo' => '+13.643', 'posicion' => 2, 'vueltas_hechas' => 50],
            ['num_piloto' => 16, 'ronda' => 2, 'tiempo' => '+18.639', 'posicion' => 3, 'vueltas_hechas' => 50],
            ['num_piloto' => 81, 'ronda' => 2, 'tiempo' => '+32.007', 'posicion' => 4, 'vueltas_hechas' => 50],
            ['num_piloto' => 14, 'ronda' => 2, 'tiempo' => '+35.759', 'posicion' => 5, 'vueltas_hechas' => 50],
            ['num_piloto' => 63, 'ronda' => 2, 'tiempo' => '+39.936', 'posicion' => 6, 'vueltas_hechas' => 50],
            ['num_piloto' => 38, 'ronda' => 2, 'tiempo' => '+42.679', 'posicion' => 7, 'vueltas_hechas' => 50],
            ['num_piloto' => 4, 'ronda' => 2, 'tiempo' => '+45.708', 'posicion' => 8, 'vueltas_hechas' => 50],
            ['num_piloto' => 44, 'ronda' => 2, 'tiempo' => '+47.391', 'posicion' => 9, 'vueltas_hechas' => 50],
            ['num_piloto' => 27, 'ronda' => 2, 'tiempo' => '+76.996', 'posicion' => 10, 'vueltas_hechas' => 50],
            ['num_piloto' => 23, 'ronda' => 2, 'tiempo' => '+88.354', 'posicion' => 11, 'vueltas_hechas' => 50],
            ['num_piloto' => 20, 'ronda' => 2, 'tiempo' => '+105.737', 'posicion' => 12, 'vueltas_hechas' => 50],
            ['num_piloto' => 31, 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 13, 'vueltas_hechas' => 49],
            ['num_piloto' => 2, 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 14, 'vueltas_hechas' => 49],
            ['num_piloto' => 22, 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 15, 'vueltas_hechas' => 49],
            ['num_piloto' => 3, 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 16, 'vueltas_hechas' => 49],
            ['num_piloto' => 77, 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 17, 'vueltas_hechas' => 49],
            ['num_piloto' => 24, 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 18, 'vueltas_hechas' => 49],
            ['num_piloto' => 18, 'ronda' => 2, 'tiempo' => 'DNF', 'posicion' => 19, 'vueltas_hechas' => 5],
            ['num_piloto' => 10, 'ronda' => 2, 'tiempo' => 'DNF', 'posicion' => 20, 'vueltas_hechas' => 1]
        ];

        foreach ($carreraCircuitos as $carreraCircuitoData) {
            $carreraCircuito = new Carrera_Circuito();
            $carreraCircuito->num_piloto = $carreraCircuitoData['num_piloto'];
            $carreraCircuito->ronda = $carreraCircuitoData['ronda'];
            $carreraCircuito->tiempo = $carreraCircuitoData['tiempo'];
            $carreraCircuito->posicion = $carreraCircuitoData['posicion'];
            $carreraCircuito->vueltas_hechas = $carreraCircuitoData['vueltas_hechas'];
            $carreraCircuito->save();
        }
    }
}
