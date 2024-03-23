<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    protected function validator(array $data, $table)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:'.$table],
            'constrasenya' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
/*    public function register(RegisterRequest $request)
    {
        /*$user = Usuario::create($request->validated());

        auth()->login($user);

        return redirect('registrar')->with('success', "Account successfully registered.");


    }*/

    public function register(RegisterRequest $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'contrasenya' => 'required|min:8',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("registrar")->withSuccess('Great! You have Successfully loggedin');
    }
}
