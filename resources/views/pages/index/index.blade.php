@extends('layouts.app')

@section('title', 'Inicio')
@section('meta-description', 'index meta description')
@section('content')
    <div class="text-center text-3xl p-5">
        <h2 class="font-Montserrat">¿Ya disfrutaste de un buen libro? ¡Compártelo!</h2>
    </div>

    @include('partials.carrusel.carrusel')

    <div class="text-4xl p-5">
        <h2 class="font-Nefelibata">Ultimos libros subidos</h2>
    </div>

    <div class="flex flex-wrap gap-16 ml-6">
        @include('partials.lastbook.lastbook')
    </div>

    <div class="text-4xl p-5">
        <h2 id="categorias" class="font-Nefelibata">Categorías</h2>
    </div>

    <div class="flex flex-wrap justify-center lg:grid lg:grid-cols-5 ">
        @include('partials.categorias.categoriasIndex')
    </div>

@endsection
