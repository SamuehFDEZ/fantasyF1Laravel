<?php

namespace Database\Seeders;

use App\Models\Cuali;
use Illuminate\Database\Seeder;

class cualisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $cualis = [
            ['cualID' => 1, 'weather' => 'soleado', 'fecha'=> '2024-3-1', 'ronda'=> 1],
            ['cualID' => 2, 'weather' => 'soleado', 'fecha'=> '2024-3-8', 'ronda'=> 2],
            ['cualID' => 3, 'weather' => 'soleado', 'fecha'=> '2024-3-22', 'ronda'=> 3],
            ['cualID' => 4, 'weather' => 'soleado', 'fecha'=> '2024-4-7', 'ronda'=> 4],
            ['cualID' => 5, 'weather' => 'lluvia intensa', 'fecha'=> '2024-4-19', 'ronda'=> 5],
            ['cualID' => 6, 'weather' => 'soleado', 'fecha'=> '2024-5-3', 'ronda'=> 6],
            ['cualID' => 7, 'weather' => 'soleado', 'fecha'=> '2024-5-17', 'ronda'=> 7],
            ['cualID' => 8, 'weather' => 'soleado', 'fecha'=> '2024-5-25', 'ronda'=> 8]
        ];

        foreach ($cualis as $cuali) {
            $cualificacion = new Cuali();
            $cualificacion->cualID = $cuali['cualID'];
            $cualificacion->weather = $cuali['weather'];
            $cualificacion->fecha = $cuali['fecha'];
            $cualificacion->ronda = $cuali['ronda'];
            $cualificacion->save();
        }
    }
}
