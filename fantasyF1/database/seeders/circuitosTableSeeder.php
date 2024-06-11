<?php

namespace Database\Seeders;

use App\Models\Circuito;
use Illuminate\Database\Seeder;

class circuitosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $circuitos = [
            ['ronda' => 1, 'km' => 5412, 'fecha'=> '2024-3-2', 'nombre'=> 'Circuito Internacional de Baréin', 'num_vueltas'=> 57 , 'num_curvas'=> 15, 'autor_RecordCircuito'=> 'Pedro Martínez de la Rosa', 'tiempo_RecordCircuito'=> '1:31.447', 'anyo_RecordCircuito'=> 2005 , 'DNF'=> 3, 'DriverOfTheDay' => 'Carlos Sainz', 'Adelantamientos'=> 25, 'podiums'=> 'Max Verstppen, Sergio Pérez, Carlos Sainz', 'vueltaRapida'=> '1:32.608'],
            ['ronda' => 2, 'km' => 6174, 'fecha'=> '2024-3-9', 'nombre'=> 'Circuito de Jeddah', 'num_vueltas'=> 50 , 'num_curvas'=> 27, 'autor_RecordCircuito'=> 'Lewis Hamilton', 'tiempo_RecordCircuito'=> '1:30.734', 'anyo_RecordCircuito'=> 2021 , 'DNF'=> 2, 'DriverOfTheDay' => 'Oliver Bearman', 'Adelantamientos'=> 20, 'podiums'=> 'Max Verstppen, Sergio Pérez, Charles Leclerc', 'vueltaRapida'=> '1:31.632'],
            ['ronda' => 3, 'km' => 5278, 'fecha'=> '2024-3-24', 'nombre'=> 'Albert Park Circuit', 'num_vueltas'=> 58 , 'num_curvas'=> 27, 'autor_RecordCircuito'=> 'Charles Leclerc', 'tiempo_RecordCircuito'=> '1:19.813', 'anyo_RecordCircuito'=> 2024 , 'DNF'=> 2, 'DriverOfTheDay' => 'Carlos Sainz', 'Adelantamientos'=> 24, 'podiums'=> 'Charles Leclerc, Lando Norris, Carlos Sainz', 'vueltaRapida'=> '1:19.813'],
            ['ronda' => 4, 'km' => 5807, 'fecha'=> '2024-4-7', 'nombre'=> 'Suzuka International Racing Course', 'num_vueltas'=> 53 , 'num_curvas'=> 18, 'autor_RecordCircuito'=> 'Lewis Hamilton', 'tiempo_RecordCircuito'=> '1:30.983', 'anyo_RecordCircuito'=> 2019 , 'DNF'=> 3, 'DriverOfTheDay' => 'Charles Leclerc', 'Adelantamientos'=> 23, 'podiums'=> 'Max Verstppen, Sergio Pérez, Carlos Sainz', 'vueltaRapida'=> '1:54.235'],
            ['ronda' => 5, 'km' => 5451, 'fecha'=> '2024-4-21', 'nombre'=> 'Shanghai International Circuit', 'num_vueltas'=> 56 , 'num_curvas'=> 16, 'autor_RecordCircuito'=> 'Michael Schumacher', 'tiempo_RecordCircuito'=> '1:32.238', 'anyo_RecordCircuito'=> 2004 , 'DNF'=> 3, 'DriverOfTheDay' => 'Lando Norris', 'Adelantamientos'=> 25, 'podiums'=> 'Max Verstppen, Lando Norris, Sergio Pérez', 'vueltaRapida'=> '1:37.810'],
            ['ronda' => 6, 'km' => 5412, 'fecha'=> '2024-5-5', 'nombre'=> 'Miami International Autodrome', 'num_vueltas'=> 57 , 'num_curvas'=> 19, 'autor_RecordCircuito'=> 'Max Verstappen', 'tiempo_RecordCircuito'=> '1:29.708', 'anyo_RecordCircuito'=> 2023 , 'DNF'=> 1, 'DriverOfTheDay' => 'Lando Norris', 'Adelantamientos'=> 20, 'podiums'=> 'Lando Norris , Max Verstppen, Charles Leclerc', 'vueltaRapida'=> '1:30.634'],
            ['ronda' => 7, 'km' => 4909, 'fecha'=> '2024-5-19', 'nombre'=> 'Autodromo Internazionale Enzo e Dino Ferrari', 'num_vueltas'=> 63 , 'num_curvas'=> 19, 'autor_RecordCircuito'=> 'Lewis Hamilton', 'tiempo_RecordCircuito'=> '1:15.484', 'anyo_RecordCircuito'=> 2020 , 'DNF'=> 1, 'DriverOfTheDay' => 'Lando Norris', 'Adelantamientos'=> '10', 'podiums'=> 'Max Verstppen, Lando Norris, Charles Leclerc', 'vueltaRapida'=> '1:18.589'],
            ['ronda' => 8, 'km' => 3337, 'fecha'=> '2024-5-26', 'nombre'=> 'Circuit de Monaco', 'num_vueltas'=> 78 , 'num_curvas'=> 19, 'autor_RecordCircuito'=> 'Lewis Hamilton', 'tiempo_RecordCircuito'=> '1:12.909', 'anyo_RecordCircuito'=> 2021 , 'DNF'=> 4, 'DriverOfTheDay' => 'Charles Leclerc', 'Adelantamientos'=> '2', 'podiums'=> 'Charles Leclerc, Oscar Piastri, Carlos Sainz', 'vueltaRapida'=> '1:14.165'],
            ['ronda' => 9, 'km' => 4.361, 'fecha'=> '2024-6-9', 'nombre'=> 'Circuit Gilles-Villeneuve', 'num_vueltas'=> 70 , 'num_curvas'=> 14, 'autor_RecordCircuito'=> 'Valtteri Bottas', 'tiempo_RecordCircuito'=> '1:13.078', 'anyo_RecordCircuito'=> 2019 , 'DNF'=> 5, 'DriverOfTheDay' => 'Lando Norris', 'Adelantamientos'=> '10', 'podiums'=> 'Max Verstappen, Lando Norris, George Russell', 'vueltaRapida'=> '1:14.856'],
            ['ronda' => 10, 'km' => 4.657, 'fecha'=> '2024-6-22', 'nombre'=> 'Circuit de Barcelona-Catalunya', 'num_vueltas'=> 66 , 'num_curvas'=> 14, 'autor_RecordCircuito'=> 'Max Verstappen', 'tiempo_RecordCircuito'=> '1:16.330', 'anyo_RecordCircuito'=> 2023 , 'DNF'=> null, 'DriverOfTheDay' => null, 'Adelantamientos'=> null, 'podiums'=> null, 'vueltaRapida'=> null],

        ];

        foreach ($circuitos as $circuito) {
            $circ = new Circuito();
            $circ->ronda = $circuito['ronda'];
            $circ->km = $circuito['km'];
            $circ->fecha = $circuito['fecha'];
            $circ->nombre = $circuito['nombre'];
            $circ->num_vueltas = $circuito['num_vueltas'];
            $circ->num_curvas = $circuito['num_curvas'];
            $circ->autor_RecordCircuito = $circuito['autor_RecordCircuito'];
            $circ->tiempo_RecordCircuito = $circuito['tiempo_RecordCircuito'];
            $circ->anyo_RecordCircuito = $circuito['anyo_RecordCircuito'];
            $circ->DNF = $circuito['DNF'];
            $circ->DriverOfTheDay = $circuito['DriverOfTheDay'];
            $circ->Adelantamientos = $circuito['Adelantamientos'];
            $circ->podiums = $circuito['podiums'];
            $circ->vueltaRapida = $circuito['vueltaRapida'];
            $circ->save();
        }

    }
}
