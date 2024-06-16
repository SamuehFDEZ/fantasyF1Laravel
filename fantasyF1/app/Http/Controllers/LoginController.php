<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
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

        // Verify if the user exists in database
        $usuario = Usuario::where('nombre', $credentials['nombre'])->first();

        if (!$usuario) {
            // If not exists redirects with failure message
            throw ValidationException::withMessages([
                'loginError' => __('auth.failed')

            ]);
        }

        // Verify if the provided password equals to the stored password
        if (!Hash::check($credentials['contrasenya'], $usuario->contrasenya)) {
            // If fails, error message
            throw ValidationException::withMessages([
                'loginError' => __('auth.failed')
            ]);
        }
        session(['nombreDeUsuario' => $usuario->nombre]);
        session(['idDeUsuario' => $usuario->userID]);
        // Creates a cookie for the user logged
        $cookie = Cookie::make('nombreDeUsuario', $usuario->nombre, 60); // La cookie durará 60 minutos
        // If it's correct, sends the user to the main page
        return redirect()->route('index')->withCookie($cookie);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    // cracks the session of the user
    public function logout(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }

    /**
     * deletes the user of the application.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function eliminarUsuario(Request $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $userID = session('idDeUsuario');
            $user = Usuario::findOrFail($userID);
            if ($user) {
                $user->delete();
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->route('index');
            } else {
                return back()->with('mensaje',   __('auth.notFound'));
            }
        } catch (\Exception $e) {
            return back()->with('mensaje',  __('auth.failedDelete'));
        }
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
