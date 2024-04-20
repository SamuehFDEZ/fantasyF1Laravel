<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'nombre' => ['required', 'string'],
            'contrasenya' => ['required', 'string'],
        ]);

        // Verificar manualmente la autenticación
        $credentials = $request->only('nombre', 'contrasenya');
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'loginError' => 'Credenciales incorrectas'
            ]);
        }


        // Si el inicio de sesión es exitoso, redirige a una ruta específica
        return redirect()->route('index');



        /*$request->validate([
            'nombre' => ['required', 'string'],
            'contrasenya' => ['required', 'string'],
        ]);

        // Verificar la autenticación
        if (!Auth::attempt($request->only('nombre', 'contrasenya'))) {
            throw ValidationException::withMessages([
                'nombre' => 'Credenciales incorrectas'
            ]);
        }

        // Si el inicio de sesión es exitoso, redirige a una ruta específica
        return redirect()->route('index');*/

    }
        //$credentials = $request->getCredentials();


        /*if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->with('mensaje','Error');
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);*/


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
