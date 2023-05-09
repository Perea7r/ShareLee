@extends('layouts.app')
@section('content')
    @include('partials.breadcrumbs')
    <div class="text text-4xl p-5">
        <h1 class="font-Nefelibata">Últimos libros de {{$categoria->categoria}}</h1>
    </div>
@endsection
