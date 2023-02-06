@extends('layouts.app')

@section('title', 'Categorias')
@section('meta-description', 'Categorias meta description')

@section('content')
    <h1 class="text-3xls">Categorias</h1>
    @foreach ($libros as $libro)
        <h2 <div class="divider">
            </div>
            <h2 class="text-2xl">
                <a href="/categorias/{{ $libro->idEjemplar }}">
                    {{ $libro['titulo'] }}
                </a>
            </h2>
    @endforeach
@endsection
