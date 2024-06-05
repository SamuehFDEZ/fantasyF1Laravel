<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $validatedData = $request->validated(); // Obtener los datos validados

        Usuario::create([
            'nombre' => $validatedData['nombre'],
            'email' => $validatedData['email'],
            'contrasenya' => bcrypt($validatedData['contrasenya']),
            'remember_token' => Str::random(60), // Generar el remember_token aquí
        ]);

        return back()->with('mensaje', __('auth.success'));
    }

    public function eliminarUsuario(): \Illuminate\Http\RedirectResponse
    {
        try {
            $userID = session('idDeUsuario'); // Obtener el ID del usuario de la sesión
            $user = Usuario::findOrFail($userID); // Obtener el usuario utilizando el ID
            if ($user) {
                $user->delete(); // Eliminar el usuario
                return back()->with('mensaje', __('auth.successDelete'));
            } else {
                return back()->with('mensaje', __('auth.notFound'));
            }
        } catch (\Exception $e) {
            return back()->with('mensaje', __('auth.failedDelete'));
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
    protected function authenticated($request, $user)
    {
        return redirect()->intended();
    }
}
