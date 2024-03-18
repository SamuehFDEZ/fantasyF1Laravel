<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cuali;

class cualisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cualis = [
            ['cualID' => 1, 'weather' => 'soleado', 'fecha'=> '2024-3-1', 'ronda'=> 1,],
            ['cualID' => 2, 'weather' => 'soleado', 'fecha'=> '2024-3-8', 'ronda'=> 2,]
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
