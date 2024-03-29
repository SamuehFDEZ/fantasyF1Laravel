<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function view()
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
    public function register(RegisterRequest $request)
    {
        $user = Usuario::create([
            'nombre' => $request->input('nombre'), // Accedemos a los campos del formulario usando input()
            'email' => $request->input('email'),
            'contrasenya' => bcrypt($request->input('contrasenya')), // Usamos input() para obtener el valor
        ]);

        Auth::login($user);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('correo', 'contrasenya'); // Ajustamos los nombres de los campos

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
