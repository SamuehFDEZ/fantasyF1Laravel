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
        $validatedData = $request->validated(); // We get de data from the form

        Usuario::create([
            'nombre' => $validatedData['nombre'],
            'email' => $validatedData['email'],
            'contrasenya' => bcrypt($validatedData['contrasenya']),
            'remember_token' => Str::random(60), // generates the token
        ]);

        return back()->with('mensaje', __('auth.success'));
    }
    /**
     * Handle account delete request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function eliminarUsuario(): \Illuminate\Http\RedirectResponse
    {
        try {
            $userID = session('idDeUsuario'); // gets the id of the user logged
            $user = Usuario::findOrFail($userID); // gets the user with the id
            if ($user) {
                $user->delete(); // deletes the user
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
