@extends('layouts.app')
@section('content')
    @include('partials.breadcrumbs.breadcrumbs')
    <div class="text text-4xl p-5">
        <h1 class="font-Nefelibata">Últimos libros de {{ $categoria->categoria }}</h1>
    </div>
    <div class="flex gap-16 ml-6">
        @include('partials.categorias.filterCategories')
    </div>
@endsection
