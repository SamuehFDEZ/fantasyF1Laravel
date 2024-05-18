<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/mi-equipo', function () {
    return view('mi-equipo');
})->name('mi-equipo');

Route::get('/comoJugar', function () {
    return view('comoJugar');
})->name('comoJugar');

Route::get('/premios', function () {
    return view('premios');
})->name('premios');

Route::get('/constructor', function () {
    return view('constructor');
})->name('constructor');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::delete("/login", [LoginController::class, 'eliminarUsuario'])->name('eliminarUsuario');


Route::get('/registrar', [RegisterController::class, 'view'])->name('registro');
Route::post('/registrar', [RegisterController::class, 'register']);
Route::delete("/registrar", [RegisterController::class, 'eliminarUsuario'])->name('eliminarUsuario');


Route::middleware('guest')->group(function () {
    //Route::post('/registrar', [RegisterController::class, 'register'])->name('registro');
    //Route::post('/login', [RegisterController::class, 'login'])->name('login');
    //Route::post('/login', [RegisteredUserController::class, 'store'])->name('registrar');
    /*    Route::post('/register', [RegisterController::class, 'register'])->name('register');*/


    //Route::post('/login',[RegisterController::class, 'login'])->name('login');
    /*Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/
});


Route::middleware('auth')->group(function () {
    //Route::post('/login', [RegisteredUserController::class, 'store'])->name('registrar');
/*    Route::post('/register', [RegisterController::class, 'register'])->name('register');*/
/*    Route::post('/login', [RegisteredUserController::class, 'store'])->name('store');*/
    //Route::post('/login', [RegisterController::class, 'register'])->name('registro');
    //Route::post('/login',[RegisterController::class, 'login'])->name('login');
    /*Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/
});

/*Route::controller(RegisteredUserController::class)->group(function (){
    Route::post('/registrar', 'store')->name('registro');

});*/

require __DIR__.'/auth.php';
