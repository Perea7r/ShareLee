@extends('layouts.app')

@section('title', 'Perfil')
@section('meta-description', 'index meta description')
@section('content')

    <div class="flex  my-6 p-6">
        <div>
            <div class="drawer">
                <label for="my-drawer"></label>
                <ul class="bg-base-100 font-Montserrat text-xl text-center">
                    <li class="hover:bg-secondary p-3"><a href="#">Mis datos</a></li>
                    <li class="hover:bg-secondary p-3"><a href="#">Lista de deseos</a></li>
                    <li class="hover:bg-secondary p-3"><a href="#">Intercambios realizados</a></li>
                    <li class="hover:bg-secondary p-3"><a href="#">Mis libros</a></li>
                    <li class="hover:bg-secondary p-3"><a href="#">Mis mensajes</a></li>
            </div>
            </ul>
        </div>

        <div class="w-full mx-20">
            <h2 class="text-4xl font-Special border-b-2 border-black">Mis datos</h2>
            <div class="mt-2 flex-grow">
                <table class="table">
                    <tbody class="font-Montserrat text-xl">
                        <tr>
                            <th class="pl-0">Nombre y apellidos</th>
                            <td>{{ $usuario->nombre . ' ' . $usuario->apellidos }}</td>
                        </tr>

                        <tr>
                            <th class="pl-0">Email</th>
                            <td>{{ $usuario->email }}</td>
                        </tr>

                        <tr>
                            <th class="pl-0">Usuario</th>
                            <td>{{ $usuario->usuario }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button class="btn btn-primary w-64 uppercase font-Montserrat text-lg">Subir un
                libro</button>
        </div>
    </div>
@endsection
