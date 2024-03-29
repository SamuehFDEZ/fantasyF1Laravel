<?php

namespace Database\Seeders;


use App\Models\Usuario;
use Illuminate\Database\Seeder;

class usuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usuario = [
            ['nombre' => 'SamuehFDEZ', 'contrasenya' => '123456789', 'email' => 'samu@gmail.com']
        ];

        foreach ($usuario as $user) {
            $usuarios = new Usuario();
            $usuarios->nombre = $user['nombre'];
            $usuarios->contrasenya = bcrypt($user['contrasenya']);
            $usuarios->email = $user['email'];
            $usuarios->save();
        }
    }
}
