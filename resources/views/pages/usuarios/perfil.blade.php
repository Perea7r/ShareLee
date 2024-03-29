@extends('layouts.app')

@section('title', 'Perfil')
@section('meta-description', 'index meta description')
@section('content')

    <div class="flex my-6 p-6">
        <div>
            <div class="drawer">
                <label for="my-drawer"></label>
                <ul class="bg-base-100 font-Montserrat text-xl text-center w-56">
                    <li class="p-3 activo" data-target="mis-datos">
                        <a href="#mis-datos">Mis datos</a>
                    </li>
                    <li class="p-3" data-target="lista-deseos">
                        <a href="#lista-deseos">Lista de deseos</a>
                    </li>
                    <li class="p-3" data-target="intercambios-realizados">
                        <a href="#intercambios-realizados">Intercambios realizados</a>
                    </li>
                    <li class="p-3" data-target="mis-libros">
                        <a href="#mis-libros">Mis libros</a>
                    </li>
                    <li class="p-3" data-target="mis-mensajes">
                        <a href="#mis-mensajes">Mis mensajes</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="contenido">
            <div class="mis-datos contenido-oculto">

                <div class="w-full mx-20">
                    <h2 class="text-4xl font-Special border-b-2 border-black">Mis datos</h2>
                    <div class="mt-2 flex-grow">
                        <table class="table">
                            <tbody class="font-Montserrat text-xl">
                                <tr>
                                    <th class="pl-0">Nombre y apellidos</th>
                                    <td>{{ $usuario->nombre }} {{ $usuario->apellidos }}</td>
                                </tr>

                                <tr>
                                    <th class="pl-0">Email</th>
                                    <td>{{ $usuario->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="lista-deseos contenido-oculto">
                <div class="w-full mx-20">

                    <h2 class="text-4xl font-Special border-b-2 border-black">Lista de deseos</h2>
                    <div class="mt-2">

                    </div>

                </div>
            </div>
            <div class="intercambios-realizados contenido-oculto">
                <div class="w-full mx-20">

                    <h2 class="text-4xl font-Special border-b-2 border-black">Intercambios realizados</h2>
                    <div class="mt-2">

                    </div>

                </div>
            </div>

            <div class="mis-libros contenido-oculto">
                <div class="w-full">

                    <div class="mx-20">
                        <h2 class="text-4xl font-Special border-b-2 border-black">Mis libros</h2>
                    </div>

                    <div class="mt-2 ml-20">
                        <div class="grid grid-cols-4 gap-4">
                            @php
                                $count = 0;
                            @endphp

                            @foreach ($libros as $libro)
                                @break($count == 8)
                                <a href="/ejemplar/{{ $libro->idEjemplar }}">
                                    <img class="h-60 mt-3 object-cover" src="{{ asset('storage') . '/' . $libro->foto }}"
                                        alt="El nombre del titulo de la portada es {{ $libro['titulo'] }}">
                                </a>
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mis-mensajes contenido-oculto">
                <div class="w-full mx-20">

                    <h2 class="text-4xl font-Special border-b-2 border-black">Mis mensajes</h2>
                    <div class="mt-2">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
