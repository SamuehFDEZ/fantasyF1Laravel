<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PilotoController extends Controller
{
    // gets the 2 drivers of each team
    public function pilotosGroupByTeam(Request $request, $equipo): JsonResponse
    {
        $piloto = Piloto::where('nombre_constructor', $equipo)->get();
        return response()->json($piloto);
    }
    // gets all drivers
    public function pilotos(): JsonResponse
    {
        $piloto = Piloto::all();
        return response()->json($piloto);
    }
    // gets all drivers except Oliver Bearman with the img, name, score and value
    public function imgPilotosNombrePuntosYMerc(): JsonResponse
    {
        $query = Piloto::where('nombre', '!=', 'Oliver Bearman')
            ->orderByDesc('puntosRealizados');

        $sql = $query->toSql();
        //dd($sql);

        $pilotos = $query->get(['imgPiloto', 'nombre', 'puntosRealizados', 'valorMercado']);

        $imagenesDecodificadas = $pilotos->map(function ($piloto) {
            return [
                'imgPiloto' => base64_decode($piloto->imgPiloto),
                'nombre' => $piloto->nombre,
                'puntosRealizados' => $piloto->puntosRealizados,
                'valorMercado' => $piloto->valorMercado,
            ];
        });

        return response()->json($imagenesDecodificadas);
    }

    public function imgPilotosYNombre(): JsonResponse
    {
        // gets the drivers grouped by the team ordered by the score of the team
        /*Example
            verst perez
            leclerc sainz
            etc etc
        */
        $query = DB::table('pilotos as p')
            ->join('constructor as c', 'p.nombre_constructor', '=', 'c.nombre')
            ->select('c.nombre as equipo', 'p.nombre', 'p.imgPiloto')
            ->where('p.nombre', '!=', 'Oliver Bearman')
            ->orderByDesc('c.puntosRealizados');

        $pilotos = $query->get();

        /*Explanation:
            Selects also the name of the team
            We iterate over the drivers and they grouped by the team creating a bidimensional array where each team
            contains its list of drivers
           array_values($equiposAgrupados) converts the associative array in a indexed array by numbers, having the
            wished structured
        */

        $equiposAgrupados = [];

        foreach ($pilotos as $piloto) {
            $equiposAgrupados[$piloto->equipo][] = [
                'nombre' => $piloto->nombre,
                'imgPiloto' => base64_decode($piloto->imgPiloto),
            ];
        }

        $resultadoFinal = array_values($equiposAgrupados);

        return response()->json($resultadoFinal);
    }
    // as the teams, we get the selected drivers by the user to be printed in the page
    public function obtenerPilotos(Request $request): JsonResponse
    {
        $pilotos = DB::table('usuarios as u')
            ->join('usuario_pilotos as p', 'u.userID', '=', 'p.userID')
            ->join('pilotos as pil', 'pil.nombre', '=', 'p.nombre_piloto')
            ->select('u.userID', 'u.nombre', DB::raw('CONVERT(pil.imgPiloto USING utf8) AS imgPiloto'), 'u.puntosRealizadosTotales')
            ->distinct()
            ->get();

        $pilotosDecodificados = $pilotos->map(function ($piloto) {
            return [
                'userID' => $piloto->userID,
                'nombre' => $piloto->nombre,
                'imgPiloto' => base64_decode($piloto->imgPiloto),
                'puntosRealizadosTotales' => $piloto->puntosRealizadosTotales,
            ];
        });

        $pilotosEnvueltos = ['pilotos' => $pilotosDecodificados];


        return response()->json($pilotosEnvueltos);
    }
}
