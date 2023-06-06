@extends('layouts.app')

@section('title', 'Categorias')
@section('meta-description', 'Categorias meta description')

@section('content')

    @include('partials.breadcrumbLibro')
    <div class="flex justify-around">
        <div class="flex mt-9">
            <img class="h-72 w-48" src="{{ asset('storage') . '/' . $libro->foto }}">
            <div class="relative bottom-24 right-0">
                <input id="heart" type="checkbox" />
                <label for="heart">
                    <ion-icon name="heart" class="w-12 h-12"></ion-icon>
                </label>
            </div>
        </div>

        <div>
            <h2 class="font-Special text-4xl"> Ficha técnica</h2>
            <table class="table">
                <tbody>
                    @include('partials.tablaFichaTecnica')
                </tbody>
            </table>
        </div>

        <div class="flex flex-col"">
            @include('partials.fotoPerfil')
            <p>Nombre de perfil</p>
            <div class="rating space-x-1">
                <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
            </div>
            <div class="flex gap-2">
                <img class="h-10 w-9.5" src="/images/sharelines.png" alt="">
                <p class="text-3xl font-bold font-sans">{{ $libro->sharelines }}</p>
            </div>

            <h3 class="font-Special text-2xl">Tags :</h3>

            <div>
                <div class="badge badge-primary uppercase"><a href="#">{{ $libro->tags }}</a></div>
            </div>
        </div>
    </div>

    <div class="flex justify-between my-10">
        <div class=" flex flex-col w-1/2 ml-14">
            <h2 class="font-Special text-4xl"> Descripción:</h2>
            <p class="font-Montserrat text-lg">{{ $libro->descripcion }}</p>
        </div>

        <div class="flex flex-col justify-center w-40 mr-28">
            <a href="#">
                <figure class="flex justify-center">
                    <img class="h-38 w-40" src="/images/libros_intercambio.svg" alt="Icono del intercambio de libros">
                </figure>
                <h3 class="font-Special text-xl font-semibold text-center">Proponer intercambio</h3>
            </a>
        </div>
    </div>

@endsection
