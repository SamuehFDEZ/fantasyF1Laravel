<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function actualizarPilotosYConstructores(Request $request, $userID): \Illuminate\Http\RedirectResponse
    {
        if ($userID != session('idDeUsuario')) {
            return back()->with('Usuario no autenticado');
        }

        $request->validate([
            'pilotos' => 'array',
            'constructores' => 'array',
            'pilotos.*.nombre_piloto' => 'string',
            'pilotos.*.puntosRealizados' => 'integer',
            'constructores.*.nombre_constructor' => 'string',
            'constructores.*.puntosRealizados' => 'integer',
        ]);

        $pilotos = $request->input('pilotos', []);
        $constructores = $request->input('constructores', []);

        /*La transaccion nos permite ejecutar varias cosas al mismo tiempo, a la vez
        eliminamos los registros que tenga el usuario en ambas tablas y lo actualizamos
        insertando un nuevo registro a las tablas
        aunque el usuario mantenga por ejemplo 4 pilotos y solo cambie uno, no es un problema
        porque borra los anteriores para añadir aunque sea uno nuevo*/
        DB::transaction(function () use ($userID, $pilotos, $constructores) {
            DB::table('usuario_pilotos')->where('userID', $userID)->delete();
            DB::table('usuario_constructor')->where('userID', $userID)->delete();

            if (!empty($pilotos)) {
                foreach ($pilotos as $piloto) {
                    DB::table('usuario_pilotos')->insert([
                        'userID' => $userID,
                        'nombre_piloto' => $piloto['nombre_piloto'],
                        'puntosRealizados' => $piloto['puntosRealizados'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }

            if (!empty($constructores)) {
                foreach ($constructores as $constructor) {
                    DB::table('usuario_constructor')->insert([
                        'userID' => $userID,
                        'nombre_constructor' => $constructor['nombre_constructor'],
                        'puntosRealizados' => $constructor['puntosRealizados'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        });

        return back()->with(['mensaje' => 'Equipo guardado']);
    }
}
