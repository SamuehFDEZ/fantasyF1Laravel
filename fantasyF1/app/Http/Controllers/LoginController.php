<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function viewLogin(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function login(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'nombre' => ['required'],
            'contrasenya' => ['required'],
        ]);

        $credentials = $request->only('nombre', 'contrasenya');

        // Verificar si el usuario existe en la base de datos
        $usuario = Usuario::where('nombre', $credentials['nombre'])->first();

        if (!$usuario) {
            // Si el usuario no existe, redirecciona con un mensaje de error
            throw ValidationException::withMessages([
                'loginError' => 'El usuario no existe'
            ]);
        }

        // Verificar si la contraseña proporcionada coincide con el hash almacenado
        if (!Hash::check($credentials['contrasenya'], $usuario->contrasenya)) {
            // Si la autenticación falla, redirecciona con un mensaje de error
            throw ValidationException::withMessages([
                'loginError' => 'Credenciales incorrectas'
            ]);
        }
        session(['nombreDeUsuario' => $usuario->nombre]);

        // Si la autenticación tiene éxito, redirecciona al usuario
        return redirect()->route('index');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }


    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user): \Illuminate\Http\RedirectResponse
    {
        return redirect()->intended();
    }
}
