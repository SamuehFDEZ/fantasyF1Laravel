<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    // Function to update drivers and constructors for a user
    public function actualizarPilotosYConstructores(Request $request, $userID): \Illuminate\Http\JsonResponse
    {
        // Check if the user is authenticated
        if ($userID != session('idDeUsuario')) {
            return response()->json(['error' => 'Usuario no autenticado']);
        }

        // Validate the incoming request
        $request->validate([
            'pilotos' => 'array',
            'constructores' => 'array',
            'pilotos.*.nombre_piloto' => 'string',
            'pilotos.*.puntosRealizados' => 'integer',
            'constructores.*.nombre_constructor' => 'string',
            'constructores.*.puntosRealizados' => 'integer',
        ]);

        // Retrieve pilots and constructors from the request
        $pilotos = $request->input('pilotos', []);
        $constructores = $request->input('constructores', []);

        /*
        The transaction allows us to execute multiple operations at once.
        We delete the records that the user has in both tables and update them by inserting new records into the tables.
        Even if the user keeps, for example, 4 drivers and only changes one, it is not a problem because it deletes the previous ones to add even one new.
        */
        DB::transaction(function () use ($userID, $pilotos, $constructores) {
            // Delete existing records for the user in both tables
            DB::table('usuario_pilotos')->where('userID', $userID)->delete();
            DB::table('usuario_constructor')->where('userID', $userID)->delete();

            // Insert new driver records if there are any pilots
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

            // Insert new constructor records if there are any constructors
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

        // Return a JSON response indicating the team was saved successfully
        return response()->json(['equipo_guardado' => 'Equipo guardado correctamente']);
    }
}
