<?php

namespace App\Http\Controllers;

use App\Models\Circuito;
use App\Models\Constructor;
use App\Models\Piloto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
    
    public function imgPilotos(): JsonResponse
    {
        // Obtener todos los pilotos excluyendo a Oliver Bearman
        $pilotos = Piloto::where('nombre', '!=', 'Oliver Bearman')
            ->orderByDesc('nombre')
            ->orderByDesc('puntosRealizados')
            ->get(['nombre', 'puntosRealizados', 'valorMercado', 'imgPiloto']);

        // Decodificar cada imagen y almacenarla en un nuevo array
        $imagenesDecodificadas = $pilotos->pluck('imgPiloto')->map(function ($imagenBase64) {
            return base64_decode($imagenBase64);
        });

        return response()->json($imagenesDecodificadas);
    }

}
