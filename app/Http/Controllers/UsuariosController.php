<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $usuarios = Usuario::all();

        return response()->json([
            'data' => $usuarios
        ], 200);
    }

    public function login(Request $request)
    {
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) {
            // Si las credenciales son válidas, redirigir al usuario a la página de inicio
            return redirect('/');
        } else {
            // Si las credenciales no son válidas, volver al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
{
    $usuario = new Usuario;
    $usuario->nombre = $request->input('nombre');
    $usuario->apellidos = $request->input('apellidos');
    $usuario->email = $request->input('email');
    $usuario->password = bcrypt($request->input('password'));
    $usuario->save();

    return view('pages.index.index');
}

public function register(Request $request)
{
    // Validar los datos del formulario de registro
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:15',
        'apellidos' => 'required|string|max:40',
        'password' => 'required|string|max:40',
        'email' => 'required|email|unique:usuarios,email|max:255',
    ]);

    // Crear un nuevo usuario con los datos proporcionados
    $usuario = new Usuario;
    $usuario->nombre = $request->input('nombre');
    $usuario->apellidos = $request->input('apellidos');
    $usuario->email = $request->input('email');
    $usuario->password = bcrypt($request->input('password'));
    $usuario->save();

    // Redirigir al usuario a la página de inicio de sesión
    return redirect('/login');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nombre' => 'required|string|max:15',
        'apellidos' => 'required|string|max:40',
        'password' => 'required|string|max:40',
        'email' => 'required|email|unique:usuarios,email|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'error' => $validator->errors(),
        ], 400);
    }

    $usuario = new Usuario;
    $usuario->nombre = $request->input('nombre');
    $usuario->apellidos = $request->input('apellidos');
    $usuario->password = bcrypt($request->input('password'));
    $usuario->usuario = $request->input('usuario');
    $usuario->email = $request->input('email');
    $usuario->save();

    return response()->json([
        'message' => 'Usuario creado exitosamente',
        'data' => $usuario
    ], 201);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json([
                'error' => 'Usuario no encontrado'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'string|max:40',
            'apellidos' => 'string|max:40',
            'password' => 'string|max:40',
            'email' => 'email|unique:usuarios,email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 400);
        }

        if ($request->has('nombre')) {
            $usuario->nombre = $request->input('nombre');
        }

        if ($request->has('apellidos')) {
            $usuario->apellidos = $request->input('apellidos');
        }

        if ($request->has('password')) {
            $usuario->password = bcrypt($request->input('password'));
        }

        if ($request->has('email')) {
            $usuario->email = $request->input('email');
        }
         $usuario->save();

        return response()->json([
            'message' => 'Usuario actualizado exitosamente',
            'data' => $usuario
        ], 200);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json([
                'error' => 'Usuario no encontrado'
            ], 404);
        }

        $usuario->delete();

        return response()->json([
            'message' => 'Usuario eliminado exitosamente'
        ], 200);
    }
}
