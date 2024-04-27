<?php

namespace Database\Seeders;

use App\Models\Sprint;
use Illuminate\Database\Seeder;

class sprintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $sprints = [
            ['sprintID' => 1, 'fecha'=> '2024-4-19', 'vueltaRapida'=> '1:32.608', 'ronda' => 5]
        ];

        foreach ($sprints as $sprint) {
            $spr = new Sprint();
            $spr->sprintID = $sprint['sprintID'];
            $spr->fecha = $sprint['fecha'];
            $spr->vueltaRapida = $sprint['vueltaRapida'];
            $spr->ronda = $sprint['ronda'];
            $spr->save();
        }

    }
}
