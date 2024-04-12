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
            ['ronda' => 1, 'km' => 5412, 'fecha'=> '2024-3-2', 'nombre'=> 'Circuito Internacional de Baréin', 'num_vueltas'=> 57 , 'num_curvas'=> 15, 'autor_RecordCircuito'=> 'Pedro Martínez de la Rosa', 'tiempo_RecordCircuito'=> '1:31.447', 'año_RecordCircuito'=> 2005 , 'DNF'=> 3, 'DriverOfTheDay' => 'Carlos Sainz', 'Adelantamientos'=> 25, 'podiums'=> 'Max Verstppen, Sergio Pérez, Carlos Sainz', 'vueltaRapida'=> '1:32.608'],
            ['ronda' => 2, 'km' => 6174, 'fecha'=> '2024-3-9', 'nombre'=> 'Circuito de Jeddah', 'num_vueltas'=> 50 , 'num_curvas'=> 27, 'autor_RecordCircuito'=> 'Lewis Hamilton', 'tiempo_RecordCircuito'=> '1:30.734', 'año_RecordCircuito'=> 2021 , 'DNF'=> 2, 'DriverOfTheDay' => 'Oliver Bearman', 'Adelantamientos'=> 20, 'podiums'=> 'Max Verstppen, Sergio Pérez, Charles Leclerc', 'vueltaRapida'=> '1:31.632'],
            ['ronda' => 3, 'km' => 5278, 'fecha'=> '2024-3-24', 'nombre'=> 'Albert Park Circuit', 'num_vueltas'=> 58 , 'num_curvas'=> 27, 'autor_RecordCircuito'=> 'Charles Leclerc', 'tiempo_RecordCircuito'=> '1:19.813', 'año_RecordCircuito'=> 2024 , 'DNF'=> 2, 'DriverOfTheDay' => 'Carlos Sainz', 'Adelantamientos'=> 24, 'podiums'=> 'Charles Leclerc, Lando Norris, Carlos Sainz', 'vueltaRapida'=> '1:19.813'],
            ['ronda' => 4, 'km' => 5807, 'fecha'=> '2024-3-7', 'nombre'=> 'Suzuka International Racing Course', 'num_vueltas'=> 53 , 'num_curvas'=> 18, 'autor_RecordCircuito'=> 'Lewis Hamilton', 'tiempo_RecordCircuito'=> '1:30.983', 'año_RecordCircuito'=> 2019 , 'DNF'=> 3, 'DriverOfTheDay' => 'Charles Leclerc', 'Adelantamientos'=> 14, 'podiums'=> 'Max Verstppen, Sergio Pérez, Carlos Sainz', 'vueltaRapida'=> '1:54.235'],

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
            $circ->año_RecordCircuito = $circuito['año_RecordCircuito'];
            $circ->DNF = $circuito['DNF'];
            $circ->DriverOfTheDay = $circuito['DriverOfTheDay'];
            $circ->Adelantamientos = $circuito['Adelantamientos'];
            $circ->podiums = $circuito['podiums'];
            $circ->vueltaRapida = $circuito['vueltaRapida'];
            $circ->save();
        }

    }
}
