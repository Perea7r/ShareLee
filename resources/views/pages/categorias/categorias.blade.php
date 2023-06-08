@extends('layouts.app')
@section('content')
    @include('partials.breadcrumbs.breadcrumbs')

    <div class="flex flex-col w-3/4 mx-auto my-8">
        <h1 class="font-Nefelibata text-center text-5xl">{{ $categoria->categoria }}</h1>
        <p class="text-center mt-3 font-Montserrat text-xl">{{ $categoria->introduccion }}</p>
    </div>

    <div class="text text-4xl p-5">
        <h1 class="font-Nefelibata">Últimos libros de {{ $categoria->categoria }}</h1>
    </div>
    <div class="flex gap-16 ml-6">
        @include('partials.categorias.filterCategories')
    </div>
@endsection
