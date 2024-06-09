<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstructorController extends Controller
{
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

    public function coloresCoches(): JsonResponse
    {
        $constructor = Constructor::all()->sortByDesc('puntosRealizados')->pluck('colorEquipo');

        return response()->json($constructor);
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
