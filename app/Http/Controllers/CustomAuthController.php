<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Usuario;
use App\Models\Ejemplar;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    const paginacion = 10;

    public function index()
    {
      return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Credenciales no válidas');
    }



    public function register()
    {
        return view('auth.register');
    }


    public function customRegister(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Inicio de sesión exitoso');
    }


    public function create(array $data)
    {
      return Usuario::create([
        'nombre' => $data['name'],
        'apellidos' => $data['apellidos'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('No tienes permitido el acceso');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
