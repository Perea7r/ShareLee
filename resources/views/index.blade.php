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
        @include('partials.lastbook')
    </div>
@endsection
