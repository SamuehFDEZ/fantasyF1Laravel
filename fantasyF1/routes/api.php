<?php

use App\Http\Controllers\ApiController;
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


Route::get("/constructor", [ApiController::class, 'constructores'])->name('constructores');
Route::post("/constructor/{nombre}", [ApiController::class, 'constructoresPorNombre'])->name('constructoresPorNombre');
Route::get("/constructor/puntos", [ApiController::class, 'constructoresPorPuntos'])->name('constructoresPorPuntos');
Route::get("/constructor/coches", [ApiController::class, 'constructoresCoches'])->name('constructoresCoches');
Route::get("/circuitos", [ApiController::class, 'circuitos'])->name('circuitos');
Route::get("/circuitos/{ronda}", [ApiController::class, 'circuitosPorRonda'])->name('circuitosPorRonda');
Route::get("/constructor/info", [ApiController::class, 'imgCoches'])->name('imgCoches');
Route::get("/constructor/logos", [ApiController::class, 'logosCoches'])->name('logosCoches');
Route::get("/constructor/colores", [ApiController::class, 'coloresCoches'])->name('coloresCoches');


Route::post("/piloto/{equipo}", [ApiController::class, 'pilotosGroupByTeam'])->name('pilotosGroupByTeam');
Route::post("/piloto", [ApiController::class, 'pilotos'])->name('pilotos');
Route::get("/piloto/info", [ApiController::class, 'imgPilotosNombrePuntosYMerc'])->name('imgPilotosNombrePuntosYMerc');
Route::get("/piloto/imgYNombre", [ApiController::class, 'imgPilotosYNombre'])->name('imgPilotosYNombre');


Route::get('/obtener-pilotos', [ApiController::class, 'obtenerPilotos'])->name('obtenerPilotos');
Route::get('/obtener-constructores', [ApiController::class, 'obtenerConstructores'])->name('obtenerConstructores');


