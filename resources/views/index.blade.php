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

    <div class="grid grid-cols-2">
        @foreach ($libros as $libro)
            <div>
                <h3>{{ $libro['titulo'] }}</h3>
                <img src="{{ $libro['foto'] }}" alt="{{ $libro['titulo'] }}">
            </div>
        @endforeach
    </div>
@endsection
