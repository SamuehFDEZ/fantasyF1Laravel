<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Usuario::class],
            'constrasenya' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        echo $request;

        $user = Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'constrasenya' => Hash::make($request->constrasenya),
        ]);
        event(new Registered($user));


        Auth::login($user);

        return redirect('registro');
    }
}
