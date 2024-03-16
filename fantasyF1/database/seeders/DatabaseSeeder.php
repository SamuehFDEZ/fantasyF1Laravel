<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Constructor;
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
        Constructor::factory(100)->create();

    }
}
