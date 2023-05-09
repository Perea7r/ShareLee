@extends('layouts.app')

@section('title', 'Inicio')
@section('meta-description', 'index meta description')
@section('content')
    <div class="text-center text-3xl p-5">
        <h2 class="font-Montserrat">¿Ya disfrutaste de un buen libro? ¡Compártelo!</h2>
    </div>

    @include('partials.carrusel')

    <div class="text-4xl p-5">
        <h2 class="font-Nefelibata">Ultimos libros subidos</h2>
    </div>

    <div class="flex gap-16 ml-6">
        @include('partials.lastbook')
    </div>

    <div class="text-4xl p-5">
        <h2 id="categorias" class="font-Nefelibata">Categorías</h2>
    </div>

    <div class="pl-16 grid grid-cols-5 gap">
        @include('partials.categoriasIndex')
    </div>

@endsection
