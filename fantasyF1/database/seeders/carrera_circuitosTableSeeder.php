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
            ['nombre_piloto' => 'Max Verstappen', 'ronda' => 1, 'tiempo' => '1:31.447', 'posicion' => 1, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Sergio Pérez', 'ronda' => 1, 'tiempo' => '+22.457s', 'posicion' => 2, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Carlos Sainz', 'ronda' => 1, 'tiempo' => '+25.110s', 'posicion' => 3, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Charles Leclerc', 'ronda' => 1, 'tiempo' => '+39.669s', 'posicion' => 4, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'George Russell', 'ronda' => 1, 'tiempo' => '+46.788s', 'posicion' => 5, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Lando Norris', 'ronda' => 1, 'tiempo' => '+48.458s', 'posicion' => 6, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Lewis Hamilton', 'ronda' => 1, 'tiempo' => '+50.324s', 'posicion' => 7, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Oscar Piastri', 'ronda' => 1, 'tiempo' => '+56.082s', 'posicion' => 8, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Fernando Alonso', 'ronda' => 1, 'tiempo' => '+74.887s', 'posicion' => 9, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Lance Stroll', 'ronda' => 1, 'tiempo' => '+93.216s', 'posicion' => 10, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Zhou Guanyu', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 11, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Kevin Magnussen', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 12, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Daniel Ricciardo', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 13, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Yuki Tsunoda', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 14, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Alex Albon', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 15, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Nico Hülkenberg' , 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 16, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Esteban Ocon', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 17, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Pierre Gasly', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 18, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Valteri Bottas', 'ronda' => 1, 'tiempo' => '+1 lap', 'posicion' => 19, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Logan Sargeant', 'ronda' => 1, 'tiempo' => '+2 lap', 'posicion' => 20, 'vueltas_hechas' => 55],
                // Ronda 2
            ['nombre_piloto' => 'Max Verstappen', 'ronda' => 2, 'tiempo' => '1:20.43.2', 'posicion' => 1, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Sergio Pérez', 'ronda' => 2, 'tiempo' => '+13.643s', 'posicion' => 2, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Charles Leclerc', 'ronda' => 2, 'tiempo' => '+18.639s', 'posicion' => 3, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Oscar Piastri', 'ronda' => 2, 'tiempo' => '+32.007s', 'posicion' => 4, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Fernando Alonso', 'ronda' => 2, 'tiempo' => '+35.759s', 'posicion' => 5, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'George Russell', 'ronda' => 2, 'tiempo' => '+39.936s', 'posicion' => 6, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Oliver Bearman', 'ronda' => 2, 'tiempo' => '+42.679s', 'posicion' => 7, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Lando Norris', 'ronda' => 2, 'tiempo' => '+45.708s', 'posicion' => 8, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Lewis Hamilton', 'ronda' => 2, 'tiempo' => '+47.391s', 'posicion' => 9, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Nico Hülkenberg', 'ronda' => 2, 'tiempo' => '+76.996s', 'posicion' => 10, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Alex Albon', 'ronda' => 2, 'tiempo' => '+88.354s', 'posicion' => 11, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Kevin Magnussen', 'ronda' => 2, 'tiempo' => '+105.737s', 'posicion' => 12, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Esteban Ocon', 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 13, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Logan Sargeant', 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 14, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Yuki Tsunoda', 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 15, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Daniel Ricciardo', 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 16, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Valteri Bottas', 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 17, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Zhou Guanyu', 'ronda' => 2, 'tiempo' => '+1 lap', 'posicion' => 18, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Lance Stroll', 'ronda' => 2, 'tiempo' => 'DNF', 'posicion' => 19, 'vueltas_hechas' => 5],
            ['nombre_piloto' => 'Pierre Gasly', 'ronda' => 2, 'tiempo' => 'DNF', 'posicion' => 20, 'vueltas_hechas' => 1],

            // Ronda 3
            ['nombre_piloto' => 'Carlos Sainz', 'ronda' => 3, 'tiempo' => '1:20.268', 'posicion' => 1, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Charles Leclerc', 'ronda' => 3, 'tiempo' => '+2.366s', 'posicion' => 2, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Lando Norris', 'ronda' => 3, 'tiempo' => '+5.904s', 'posicion' => 3, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Oscar Piastri', 'ronda' => 3, 'tiempo' => '+35.770s', 'posicion' => 4, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Sergio Pérez', 'ronda' => 3, 'tiempo' => '+56.309s', 'posicion' => 5, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Lance Stroll', 'ronda' => 3, 'tiempo' => '+93.222s', 'posicion' => 6, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Yuki Tsunoda', 'ronda' => 3, 'tiempo' => '+95.601s', 'posicion' => 7, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Fernando Alonso', 'ronda' => 3, 'tiempo' => '+100.992s', 'posicion' => 8, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Nico Hülkenberg', 'ronda' => 3, 'tiempo' => '+104.553s', 'posicion' => 9, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Kevin Magnussen', 'ronda' => 3, 'tiempo' => '+1 lap', 'posicion' => 10, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Alex Albon', 'ronda' => 3, 'tiempo' => '+1 lap', 'posicion' => 11, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Daniel Ricciardo', 'ronda' => 3, 'tiempo' => '+1 lap', 'posicion' => 12, 'vueltas_hechas' => 50],
            ['nombre_piloto' => 'Pierre Gasly', 'ronda' => 3, 'tiempo' => '+1 lap', 'posicion' => 13, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Valteri Bottas', 'ronda' => 3, 'tiempo' => '+1 lap', 'posicion' => 14, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Zhou Guanyu', 'ronda' => 3, 'tiempo' => '+1 lap', 'posicion' => 15, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Esteban Ocon', 'ronda' => 3, 'tiempo' => '+1 lap', 'posicion' => 16, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'George Russell', 'ronda' => 3, 'tiempo' => 'DNF', 'posicion' => 17, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Lewis Hamilton', 'ronda' => 3, 'tiempo' => 'DNF', 'posicion' => 18, 'vueltas_hechas' => 49],
            ['nombre_piloto' => 'Max Verstappen', 'ronda' => 3, 'tiempo' => 'DNF', 'posicion' => 19, 'vueltas_hechas' => 5],
                // Ronda 4
            ['nombre_piloto' => 'Max Verstappen', 'ronda' => 4, 'tiempo' => '1:54.235', 'posicion' => 1, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Sergio Pérez', 'ronda' => 4, 'tiempo' => '+12.535s', 'posicion' => 2, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Carlos Sainz', 'ronda' => 4, 'tiempo' => '+20.866s', 'posicion' => 3, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Charles Leclerc', 'ronda' => 4, 'tiempo' => '+26.522s', 'posicion' => 4, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Lando Norris', 'ronda' => 4, 'tiempo' => '+29.700s', 'posicion' => 5, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Fernando Alonso', 'ronda' => 4, 'tiempo' => '+44.272s', 'posicion' => 6, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'George Russell', 'ronda' => 4, 'tiempo' => '+45.951s', 'posicion' => 7, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Oscar Piastri', 'ronda' => 4, 'tiempo' => '+47.525s', 'posicion' => 8, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Lewis Hamilton', 'ronda' => 4, 'tiempo' => '+48.626s', 'posicion' => 9, 'vueltas_hechas' => 53],
            ['nombre_piloto' => 'Yuki Tsunoda', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 10, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Nico Hülkenberg', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 11, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Lance Stroll', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 12, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Kevin Magnussen', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 13, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Valteri Bottas', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 14, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Esteban Ocon', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 15, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Pierre Gasly', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 16, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Logan Sargeant', 'ronda' => 4, 'tiempo' => '+1 lap', 'posicion' => 17, 'vueltas_hechas' => 52],
            ['nombre_piloto' => 'Zhou Guanyu', 'ronda' => 4, 'tiempo' => 'DNF', 'posicion' => 18, 'vueltas_hechas' => 12],
            ['nombre_piloto' => 'Daniel Ricciardo', 'ronda' => 4, 'tiempo' => 'DNF', 'posicion' => 19, 'vueltas_hechas' => 0],
            ['nombre_piloto' => 'Alex Albon', 'ronda' => 4, 'tiempo' => 'DNF', 'posicion' => 20, 'vueltas_hechas' => 0],

            // Ronda 5
            ['nombre_piloto' => 'Max Verstappen', 'ronda' => 5, 'tiempo' => '1:40.525', 'posicion' => 1, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Lando Norris', 'ronda' => 5, 'tiempo' => '+13.773s', 'posicion' => 2, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Sergio Pérez', 'ronda' => 5, 'tiempo' => '+19.160s', 'posicion' => 3, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Charles Leclerc', 'ronda' => 5, 'tiempo' => '+23.623s', 'posicion' => 4, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Carlos Sainz', 'ronda' => 5, 'tiempo' => '+33.983s', 'posicion' => 5, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'George Russell', 'ronda' => 5, 'tiempo' => '+38.724s', 'posicion' => 6, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Fernando Alonso', 'ronda' => 5, 'tiempo' => '+43.414s', 'posicion' => 7, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Oscar Piastri', 'ronda' => 5, 'tiempo' => '++56.198s', 'posicion' => 8, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Lewis Hamilton', 'ronda' => 5, 'tiempo' => '+57.986s', 'posicion' => 9, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Nico Hülkenberg', 'ronda' => 5, 'tiempo' => '+60.476s', 'posicion' => 10, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Esteban Ocon', 'ronda' => 5, 'tiempo' => '+62.812s', 'posicion' => 11, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Alex Albon', 'ronda' => 5, 'tiempo' => '+65.506s', 'posicion' => 12, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Pierre Gasly', 'ronda' => 5, 'tiempo' => '+69.223s', 'posicion' => 13, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Zhou Guanyu', 'ronda' => 5, 'tiempo' => '+71.689s', 'posicion' => 14, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Lance Stroll', 'ronda' => 5, 'tiempo' => '+82.786s', 'posicion' => 15, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Kevin Magnussen', 'ronda' => 5, 'tiempo' => '+87.533s', 'posicion' => 16, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Logan Sargeant', 'ronda' => 5, 'tiempo' => '+95.110s', 'posicion' => 17, 'vueltas_hechas' => 56],
            ['nombre_piloto' => 'Daniel Ricciardo', 'ronda' => 5, 'tiempo' => 'DNF', 'posicion' => 18, 'vueltas_hechas' => 33],
            ['nombre_piloto' => 'Yuki Tsunoda', 'ronda' => 5, 'tiempo' => 'DNF', 'posicion' => 19, 'vueltas_hechas' => 26],
            ['nombre_piloto' => 'Valteri Bottas', 'ronda' => 5, 'tiempo' => 'DNF', 'posicion' => 20, 'vueltas_hechas' => 19],

            // Ronda 6
            ['nombre_piloto' => 'Lando Norris', 'ronda' => 6, 'tiempo' => '1:30.498', 'posicion' => 1, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Max Verstappen', 'ronda' => 6, 'tiempo' => '+7.612s', 'posicion' => 2, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Charles Leclerc', 'ronda' => 6, 'tiempo' => '+9.920s', 'posicion' => 3, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Sergio Pérez', 'ronda' => 6, 'tiempo' => '+14.650s', 'posicion' => 4, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Carlos Sainz', 'ronda' => 6, 'tiempo' => '+16.407s', 'posicion' => 5, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Lewis Hamilton', 'ronda' => 6, 'tiempo' => '+16.585s', 'posicion' => 6, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Yuki Tsunoda', 'ronda' => 6, 'tiempo' => '+26.185s', 'posicion' => 7, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'George Russell', 'ronda' => 6, 'tiempo' => '+34.789s', 'posicion' => 8, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Fernando Alonso', 'ronda' => 6, 'tiempo' => '+37.107s', 'posicion' => 9, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Esteban Ocon', 'ronda' => 6, 'tiempo' => '+39.746s', 'posicion' => 10, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Nico Hülkenberg', 'ronda' => 6, 'tiempo' => '+40.789s', 'posicion' => 11, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Pierre Gasly', 'ronda' => 6, 'tiempo' => '+44.958s', 'posicion' => 12, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Oscar Piastri', 'ronda' => 6, 'tiempo' => '+49.756s', 'posicion' => 13, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Zhou Guanyu', 'ronda' => 6, 'tiempo' => '+49.979s', 'posicion' => 14, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Daniel Ricciardo', 'ronda' => 6, 'tiempo' => '+50.956s', 'posicion' => 15, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Valteri Bottas', 'ronda' => 6, 'tiempo' => '+52.356s', 'posicion' => 16, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Lance Stroll', 'ronda' => 6, 'tiempo' => '+55.173s', 'posicion' => 17, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Alex Albon', 'ronda' => 6, 'tiempo' => '+76.091s', 'posicion' => 18, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Kevin Magnussen', 'ronda' => 6, 'tiempo' => '+84.683s', 'posicion' => 19, 'vueltas_hechas' => 57],
            ['nombre_piloto' => 'Logan Sargeant', 'ronda' => 6, 'tiempo' => 'DNF', 'posicion' => 20, 'vueltas_hechas' => 27],
        ];

        foreach ($carreraCircuitos as $carreraCircuitoData) {
            $carreraCircuito = new Carrera_Circuito();
            $carreraCircuito->nombre_piloto = $carreraCircuitoData['nombre_piloto'];
            $carreraCircuito->ronda = $carreraCircuitoData['ronda'];
            $carreraCircuito->tiempo = $carreraCircuitoData['tiempo'];
            $carreraCircuito->posicion = $carreraCircuitoData['posicion'];
            $carreraCircuito->vueltas_hechas = $carreraCircuitoData['vueltas_hechas'];
            $carreraCircuito->save();
        }
    }
}
