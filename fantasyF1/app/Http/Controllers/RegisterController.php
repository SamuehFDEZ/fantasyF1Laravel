<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function view(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('registrar');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
/*        Log::info('Datos recibidos: ' . print_r($request->all(), true));*/
        $validatedData = $request->validated(); // Obtener los datos validados

        Usuario::create([
            'nombre' => $validatedData['nombre'],
            'email' => $validatedData['email'],
            'contrasenya' => bcrypt($validatedData['contrasenya']),
        ]);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('nombre', 'contrasenya'); // Ajustamos los nombres de los campos

        if (!Auth::attempt($credentials)) {
            return redirect()->route('login')->withErrors(trans('auth.failed'));
        }

        return redirect()->route('index'); // Redirige al índice después del inicio de sesión exitoso
    }

    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated($request, $user)
    {
        return redirect()->intended();
    }
}
