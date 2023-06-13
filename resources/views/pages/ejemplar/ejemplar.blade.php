@extends('layouts.app')

@section('title', 'Libro')
@section('meta-description', 'Categorias meta description')

@section('content')

    @include('partials.breadcrumbs.breadcrumbLibro')
    <div class="py-8 px-16">
        <div class="flex justify-around gap-14">
            <div class="flex mt-9">
                <img class="h-72 w-48" src="{{ asset('storage') . '/' . $libro->foto }}">
                <div class="relative bottom-24 right-0">
                    <input id="heart" type="checkbox" />
                    <label for="heart">
                        <ion-icon name="heart" class="w-12 h-12"></ion-icon>
                    </label>
                </div>
            </div>

            <div class="mt-2 flex-grow">
                <h2 class="font-Special text-4xl"> Ficha técnica</h2>
                <table class="table">
                    <tbody>
                        @include('partials.ficha_tecnica.tablaFichaTecnica')
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col mt-2 gap-6">

                <div class="grid grid-cols-[1fr_2fr] grid-rows-2">

                    <div class="row-span-2">
                        @include('partials.perfil.fotoPerfil')
                    </div>

                    <p class="text-lg font-Montserrat text-center">{{ $usuario->nombre . ' ' . $usuario->apellidos }}</p>
                    <div class="col-start-2">

                        <div class="rating space-x-1">
                            <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                            <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                            <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                            <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                            <input type="radio" name="rating" class="mask mask-star-2 bg-accent" />
                        </div>

                    </div>

                </div>

                <div class="flex gap-2 ml-2">
                    <img class="h-10 w-9.5" src="/images/sharelines.png"
                        alt="Sharelines, moneda virtual para el intercambio">
                    <p class="text-3xl font-bold font-sans">{{ $libro->sharelines }}</p>
                </div>

                <div class="flex gap-4 ml-2">
                    <h3 class="font-Special text-2xl">Tags :</h3>

                    <div>
                        <div class="badge badge-primary uppercase"><a href="#">{{ $libro->tags }}</a></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex justify-between my-14">
            <div class=" flex flex-col w-1/2">
                <h2 class="font-Special text-4xl"> Descripción:</h2>
                <p class="font-Montserrat text-lg">{{ $libro->descripcion }}</p>
            </div>

            <div class="flex flex-col justify-center w-40">
                <a href="#">
                    <figure class="flex justify-center">
                        <img class="h-38 w-40" src="/images/libros_intercambio.svg" alt="Icono del intercambio de libros">
                    </figure>
                    <h3 class="font-Special text-xl font-semibold text-center">Proponer intercambio</h3>
                </a>
            </div>
        </div>
    </div>

@endsection
