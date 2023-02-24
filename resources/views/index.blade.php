@extends('layouts.app')

@section('title', 'Inicio')
@section('meta-description', 'index meta description')
@section('content')
    <div class="text-center text-3xl p-5">
        <h1 class="font-Montserrat">¿Ya disfrutaste de un buen libro? ¡Compártelo!</h1>
    </div>

    @include('partials.carrusel')

    <div class="text-4xl p-5">
        <h1 class="font-Nefelibata">Ultimos libros subidos</h1>
    </div>

    <div class="flex gap-16 ml-7">
        @php
            $count = 0;
        @endphp

        @foreach ($libros as $libro)
            @break($count == 5)
            <figure class="text-center flex flex-col">
                <img class="h-72 w-48"  src="{{ asset('storage') . '/' . $libro->foto }}"
                    alt="El nombre del titulo de la portada es {{ $libro['titulo'] }}">
                <figcaption class="font-Montserrat w-48">{{ $libro['titulo'] }}</figcaption>
            </figure>
            @php
                $count++;
            @endphp
        @endforeach
    </div>
@endsection
