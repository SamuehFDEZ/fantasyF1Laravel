<?php

namespace App\Http\Controllers;

use App\Models\Circuito;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CircuitoController extends Controller
{
    // gets the data of the circuit
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
    // same endpoint but with the parameter round
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


}
