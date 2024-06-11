<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstructorController extends Controller
{
    // gets the name of the teams ordered by the score
    public function constructores(): JsonResponse
    {
        $constructor = Constructor::all()->sortByDesc('puntosRealizados')->pluck('nombre');

        return response()->json($constructor);
    }
    // gets the constrcutors with the name by parameter

    public function constructoresPorNombre(Request $request, $nombre): JsonResponse
    {
        $constructores = Constructor::where('nombre', $nombre)->get();

        return response()->json($constructores);
    }
    // gets the score of the teams ordered by the socre
    public function constructoresPorPuntos(): JsonResponse
    {
        // pluck() only to obtain the wished field of the table
        $constructores = Constructor::all()->sortByDesc('puntosRealizados')->pluck('puntosRealizados')->values();

        return response()->json($constructores);
    }
    // gets the image of the car
    public function constructoresCoches(): JsonResponse
    {

        $constructores = Constructor::orderByDesc('puntosRealizados')
            ->orderByDesc('nombre')
            ->get();

        // decodes the image
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
    // gets the teams colors
    public function coloresCoches(): JsonResponse
    {
        $constructor = Constructor::all()->sortByDesc('puntosRealizados')->pluck('colorEquipo');

        return response()->json($constructor);
    }
    // gets the teams selected by the user
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

        // gets the teams in an associative array
        $constructoresEnvueltos = ['constructores' => $constructoresDecodificados];

        return response()->json($constructoresEnvueltos);
    }
}
