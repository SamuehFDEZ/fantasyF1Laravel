<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Carrera_Circuito;
use App\Models\Carrera_Cuali;
use App\Models\Carrera_Sprint;
use App\Models\Circuito;
use App\Models\Constructor;
use App\Models\Cuali;
use App\Models\Piloto;
use App\Models\Sprint;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
           /*usuariosTableSeeder::class,
           constructorTableSeeder::class,
           pilotosTableSeeder::class,
           circuitosTableSeeder::class,
           sprintsTableSeeder::class,
           cualisTableSeeder::class,
           carrera_circuitosTableSeeder::class,
           carrera_cualisTableSeeder::class,
           carrera_sprintsTableSeeder::class*/
        ]);
        Usuario::factory(20)->create();
        Constructor::factory(10)->create();
        Piloto::factory(20)->create();
        Circuito::factory(24)->create();
        Sprint::factory(1)->create();
        Cuali::factory(1)->create();
        Carrera_Circuito::factory(24)->create();
        Carrera_Sprint::factory(6)->create();
        Carrera_Cuali::factory(24)->create();

    }
}
