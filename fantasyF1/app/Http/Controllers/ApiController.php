<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\Piloto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function constructores(): JsonResponse
    {
        $constructor = Constructor::all()->sortByDesc('puntosRealizados');

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
        // pluck() para solo quedarme con los coches
        // doble orderByDesc para corregir orden de imgs
        $constructores = Constructor::orderByDesc('puntosRealizados')
            ->orderByDesc('nombre')
            ->pluck('coche') // pluck() para solo quedarte con los coches
            ->values();

        return response()->json($constructores);
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
}
