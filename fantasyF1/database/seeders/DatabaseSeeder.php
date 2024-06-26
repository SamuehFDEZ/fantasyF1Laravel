<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
           /*usuariosTableSeeder::class,*/
           constructorTableSeeder::class,
           pilotosTableSeeder::class,
           circuitosTableSeeder::class,
           cualisTableSeeder::class,
           carrera_circuitosTableSeeder::class,
           carrera_cualisTableSeeder::class,
           sprintsTableSeeder::class,
           carrera_sprintsTableSeeder::class
        ]);
        Usuario::factory(20)->create();
        /*Circuito::factory(24)->create();
        Constructor::factory(10)->create();
        Piloto::factory(20)->create();
        Sprint::factory(2)->create();
        Cuali::factory(24)->create();
        Carrera_Circuito::factory(24)->create();
        Carrera_Sprint::factory(6)->create();
        Carrera_Cuali::factory(24)->create();*/

    }
}
