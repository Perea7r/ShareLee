<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacionController extends Controller
{
    public function login(Request $request)
    {
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) {
            // Si las credenciales son válidas, redirigir al usuario a la página de inicio
            return redirect()->intended('/');
        } else {
            // Si las credenciales no son válidas, volver al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }
}
