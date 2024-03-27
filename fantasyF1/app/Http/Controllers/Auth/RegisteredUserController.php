<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{

    public function view(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('registrar');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255', 'unique:'.Usuario::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Usuario::class],
            'contrasenya' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contrasenya' => bcrypt($request->contrasenya),
        ]);
/*        event(new Registered($user));*/


        Auth::login($user);

        return to_route('registrar');
    }
}
