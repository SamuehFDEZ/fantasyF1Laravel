<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
           'nombre' => 'required|string|max:255',
           'email' => 'required|string|email|max:255',
           'contrasenya' => 'required|string|min:8'
        ]);

        $user = Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'contrasenya' => Hash::make($request->contrasenya)
        ]);

        $token = $user->createToken('authToen')->plainTextToken;

        return response()->json(['message' => 'Usuario registrado', 'token' => $token]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nombre', 'password');

        if (Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['message' => 'Login OK', 'token' => $token]);
        }
        else{
            return response()->json(['message' => 'Login Error', 401]);

        }
    }

    public function user(Request $request)
    {
        $user = $request->user();

        if ($user){
            return response()->json([
               'nombre' => $user->nombre,
               'email' => $user->email
            ]);
        }
        else{
            return response()->json(['message' => 'Usuario no autenticado', 401]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Ha salido correctamente']);

    }
}
