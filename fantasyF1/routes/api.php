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

Route::post("/constructor", [ApiController::class, 'constructores'])->name('constructores');
Route::post("/constructor/{nombre}", [ApiController::class, 'constructoresPorNombre'])->name('constructoresPorNombre');

Route::post("/piloto/{equipo}", [ApiController::class, 'pilotosGroupByTeam'])->name('pilotosGroupByTeam');
Route::post("/piloto", [ApiController::class, 'pilotos'])->name('pilotos');
