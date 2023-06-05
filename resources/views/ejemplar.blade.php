@extends('layouts.app')

@section('title', 'Categorias')
@section('meta-description', 'Categorias meta description')

@section('content')

@include('partials.breadcrumbLibro')
<div class="flex">
    <img class="h-72 w-48" src="{{ asset('storage') . '/' . $libro->foto }}">
    <input id="heart" type="checkbox" />
    <label for="heart"><ion-icon name="heart" class="w-12 h-12"></ion-icon></label>
</div>

@endsection
