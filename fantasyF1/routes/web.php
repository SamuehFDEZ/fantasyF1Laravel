<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registrar', function () {
    return view('registrar');
})->name('registrar');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::post('/login', [RegisteredUserController::class, 'store'])->name('registro');
Route::post('/login', [LoginController::class, 'iniciarSesion'])->name('iniciarSesion');

Route::middleware('auth')->group(function () {
    //Route::post('/login', [RegisteredUserController::class, 'store'])->name('registrar');
/*    Route::post('/register', [RegisterController::class, 'register'])->name('register');*/
    Route::post('/login',[LoginController::class, 'iniciarSesion'])->name('iniciarSesion');
    /*Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/
});

/*Route::controller(RegisteredUserController::class)->group(function (){
    Route::post('/registrar', 'store')->name('registro');

});*/

require __DIR__.'/auth.php';
