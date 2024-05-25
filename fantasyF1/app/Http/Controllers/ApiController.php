<?php

namespace App\Http\Controllers;

use App\Models\Circuito;
use App\Models\Constructor;
use App\Models\Piloto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    public function circuitos(): JsonResponse
    {
        $constructor = Circuito::all()->map(function ($circuito) {
            return [
                'ronda' => $circuito->ronda,
                'km' => $circuito->km,
                'fecha' => $circuito->fecha,
                'nombre' => $circuito->nombre,
                'num_vueltas' => $circuito->num_vueltas,
                'num_curvas' => $circuito->num_curvas,
                'autor_RecordCircuito' => $circuito->autor_RecordCircuito,
                'tiempo_RecordCircuito' => $circuito->tiempo_RecordCircuito,
                'anyo_RecordCircuito' => $circuito->anyo_RecordCircuito,
            ];
        });

        return response()->json($constructor);
    }

    public function circuitosPorRonda(Request $request, $ronda): JsonResponse
    {
        $constructor = Circuito::where('ronda', $ronda)->get()->map(function ($circuito) {
            return [
                'ronda' => $circuito->ronda,
                'km' => $circuito->km,
                'fecha' => $circuito->fecha,
                'nombre' => $circuito->nombre,
                'num_vueltas' => $circuito->num_vueltas,
                'num_curvas' => $circuito->num_curvas,
                'autor_RecordCircuito' => $circuito->autor_RecordCircuito,
                'tiempo_RecordCircuito' => $circuito->tiempo_RecordCircuito,
                'anyo_RecordCircuito' => $circuito->anyo_RecordCircuito,
            ];
        });

        return response()->json($constructor);
    }

    public function constructores(): JsonResponse
    {
        $constructor = Constructor::all()->sortByDesc('puntosRealizados')->pluck('nombre');

        return response()->json($constructor);
    }

    public function constructoresPorNombre(Request $request, $nombre): JsonResponse
    {
        $constructores = Constructor::where('nombre', $nombre)->get();

        return response()->json($constructores);
    }

    public function constructoresPorPuntos(): JsonResponse
    {
        // pluck() para solo quedarme con los puntos
        $constructores = Constructor::all()->sortByDesc('puntosRealizados')->pluck('puntosRealizados')->values();

        return response()->json($constructores);
    }

    public function constructoresCoches(): JsonResponse
    {
        // Obtener todos los constructores
        $constructores = Constructor::orderByDesc('puntosRealizados')
            ->orderByDesc('nombre')
            ->get();

        // Decodificar cada imagen y almacenarla en un nuevo array
        $imagenesDecodificadas = $constructores->pluck('coche')->map(function ($imagenBase64) {
            return base64_decode($imagenBase64);
        });

        return response()->json($imagenesDecodificadas);
    }

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



    public function imgCoches(): JsonResponse
    {
        // Obtener todos los registros y ordenarlos por 'puntosRealizados' en orden descendente
        $constructores = Constructor::all()->sortByDesc('puntosRealizados');

        // Mapear la colección para decodificar las imágenes y extraer los datos necesarios
        $imagenesDecodificadas = $constructores->map(function ($constructor) {
            return [
                'coche' => base64_decode($constructor->coche),
                'logo' => base64_decode($constructor->logo),
                'nombre' => $constructor->nombre,
                'puntosRealizados' => $constructor->puntosRealizados,
                'valorMercado' => $constructor->valorMercado,
            ];
        });

        // Devolver los datos en formato JSON
        return response()->json($imagenesDecodificadas);
    }

    public function logosCoches(): JsonResponse
    {
        // Obtener todos los registros y ordenarlos por 'puntosRealizados' en orden descendente
        $constructores = Constructor::all()->sortByDesc('puntosRealizados');

        // Mapear la colección para decodificar las imágenes y extraer los datos necesarios
        $imagenesDecodificadas = $constructores->map(function ($constructor) {
            return [
                'logo' => base64_decode($constructor->logo),
            ];
        });

        // Convertir la colección a array y reindexar
        $imagenesDecodificadas = $imagenesDecodificadas->values()->all();

        // Devolver los datos en formato JSON
        return response()->json($imagenesDecodificadas);
    }



    public function actualizarPilotosYConstructores(Request $request): \Illuminate\Http\RedirectResponse
    {
       /* try {*/
            // Verificar si el userID está en la sesión
            if (!session()->has('idDeUsuario')) {
                return back()->with('Usuario no autenticado');
            }

            $userID = session('idDeUsuario');

            // Validar los datos entrantes
            $request->validate([
                'pilotos' => 'required|array',
                'constructores' => 'required|array',
                'pilotos.*.nombre_piloto' => 'required|string',
                'pilotos.*.puntosRealizados' => 'required|integer',
                'constructores.*.nombre_constructor' => 'required|string',
                'constructores.*.puntosRealizados' => 'required|integer',
            ]);

            $pilotos = $request->input('pilotos', []);
            $constructores = $request->input('constructores', []);

            foreach ($pilotos as $piloto) {
                DB::table('usuario_pilotos')->updateOrInsert([
                    'userID' => $userID,
                    'nombre_piloto' => $piloto['nombre_piloto'],
                    'puntosRealizados' => $piloto['puntosRealizados'],
                    'created_at' => now(),
                    'updated_at' => now()
                ],
               /* [
                    'userID' => $userID,
                    'nombre_piloto' => $piloto['nombre_piloto'],
                    'puntosRealizados' => $piloto['puntosRealizados'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]*/);
            }

            foreach ($constructores as $constructor) {
                DB::table('usuario_constructor')->updateOrInsert([
                    'userID' => $userID,
                    'nombre_constructor' => $constructor['nombre_constructor'],
                    'puntosRealizados' => $constructor['puntosRealizados'],
                    'created_at' => now(),
                    'updated_at' => now()
                ],
               /* [
                    'userID' => $userID,
                    'nombre_constructor' => $constructor['nombre_constructor'],
                    'puntosRealizados' => $constructor['puntosRealizados'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]*/);
            }

        /*} catch (\Exception $e) {
            // Log the error
            Log::error('Error actualizando pilotos y constructores: '.$e->getMessage());
        }*/
        return back()->with(['mensaje' => 'Equipo guardado']);
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

    public function obtenerConstructores(Request $request): JsonResponse
    {
        $constructores = DB::table('usuarios as u')
            ->join('usuario_constructor as co', 'u.userID', '=', 'co.userID')
            ->join('constructor as c', 'c.nombre', '=', 'co.nombre_constructor')
            ->select('u.userID', 'u.nombre', DB::raw('CONVERT(c.coche USING utf8) AS coche'), 'u.puntosRealizadosTotales')
            ->distinct()
            ->get();

        $constructoresDecodificados = $constructores->map(function ($constructor) {
            return [
                'userID' => $constructor->userID,
                'nombre' => $constructor->nombre,
                'coche' => base64_decode($constructor->coche),
                'puntosRealizadosTotales' => $constructor->puntosRealizadosTotales,
            ];
        });

        // Envuelve los constructores en un array asociativo con la clave "constructores"
        $constructoresEnvueltos = ['constructores' => $constructoresDecodificados];

        return response()->json($constructoresEnvueltos);
    }


}
