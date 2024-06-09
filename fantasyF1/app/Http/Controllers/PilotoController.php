<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PilotoController extends Controller
{
    public function pilotosGroupByTeam(Request $request, $equipo): JsonResponse
    {
        $piloto = Piloto::where('nombre_constructor', $equipo)->get();
        return response()->json($piloto);
    }

    public function pilotos(): JsonResponse
    {
        $piloto = Piloto::all();
        return response()->json($piloto);
    }

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
        // con esto obtenemos a los pilotos agrupados por su equipo ordenados por los puntos del constructor
        /*Ejemplo
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

        /*Explicación:
            Consulta modificada: Se selecciona también el nombre del equipo (c.nombre as equipo).

            Agrupamiento: Se itera sobre los pilotos y se agrupan por el equipo, creando un array multidimensional
            donde cada equipo contiene su lista de pilotos.

            Estructura final: array_values($equiposAgrupados) convierte el array asociativo a un array
            indexado numéricamente, que se ajusta a la estructura deseada.
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
