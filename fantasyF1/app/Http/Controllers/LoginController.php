<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @throws BindingResolutionException
     */
    public function login(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->route('login')
                ->withErrors(trans('auth.failed'));
        }
        else{
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);

            return redirect()->route('index'); // Redirige al índice después del inicio de sesión exitoso
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
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
