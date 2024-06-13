<?php

use App\Http\Controllers\CircuitoController;
use App\Http\Controllers\ConstructorController;
use App\Http\Controllers\PilotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
/*    Route::get("/login", [AuthController::class, 'login'])->name('login');
    Route::post("/login", [AuthController::class, 'login'])->name('login');*/
});

// API endpoints related with data of the teams
Route::get("/constructor", [ConstructorController::class, 'constructores'])->name('constructores');
Route::post("/constructor/{nombre}", [ConstructorController::class, 'constructoresPorNombre'])->name('constructoresPorNombre');
Route::get("/constructor/puntos", [ConstructorController::class, 'constructoresPorPuntos'])->name('constructoresPorPuntos');
Route::get("/constructor/coches", [ConstructorController::class, 'constructoresCoches'])->name('constructoresCoches');
Route::get("/circuitos", [CircuitoController::class, 'circuitos'])->name('circuitos');
Route::get("/circuitos/{ronda}", [CircuitoController::class, 'circuitosPorRonda'])->name('circuitosPorRonda');
Route::get("/constructor/info", [ConstructorController::class, 'imgCoches'])->name('imgCoches');
Route::get("/constructor/logos", [ConstructorController::class, 'logosCoches'])->name('logosCoches');
Route::get("/constructor/colores", [ConstructorController::class, 'coloresCoches'])->name('coloresCoches');

// API endpoints related with data of the drivers
Route::post("/piloto/{equipo}", [PilotoController::class, 'pilotosGroupByTeam'])->name('pilotosGroupByTeam');
Route::post("/piloto", [PilotoController::class, 'pilotos'])->name('pilotos');
Route::get("/piloto/info", [PilotoController::class, 'imgPilotosNombrePuntosYMerc'])->name('imgPilotosNombrePuntosYMerc');
Route::get("/piloto/imgYNombre", [PilotoController::class, 'imgPilotosYNombre'])->name('imgPilotosYNombre');

// API endpoints to manage the logic of save the drivers and teams chosen by the user
Route::get('/obtener-pilotos', [PilotoController::class, 'obtenerPilotos'])->name('obtenerPilotos');
Route::get('/obtener-constructores', [ConstructorController::class, 'obtenerConstructores'])->name('obtenerConstructores');


