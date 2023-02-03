@extends('layouts.app')

@section('title', 'Categorias')
@section('meta-description', 'Categorias meta description')

@section('content')
    <h1>Categorias</h1>
    @foreach ($libros as $libro )

    <h2>
        <a href="/categorias/{{$libro->idEjemplar}}">
            {{ $libro['titulo']}}
        </a>
    </h2>
        
    @endforeach
@endsection
