@extends('layouts.app')

@section('title', 'Inicio')
@section('meta-description', 'index meta description')
@section('content')
    <div class="text-center text-3xl p-5">
        <h1 class="font-Montserrat">¿Ya disfrutaste de un buen libro? ¡Compártelo!</h1>
    </div>

    <section class="flex w-screen h-96">
        <img class="w-0 flex-grow object-cover opacity-80 transition duration-500 ease-in hover:cursor-crosshair hover:w-20 hover:opacity-100 hover:contrast-125"src="/images/harry-potter.jpg" alt="Portada Harry Potter">
        <img class="w-0 flex-grow object-cover opacity-80 transition duration-500 ease-in hover:cursor-crosshair hover:w-20 hover:opacity-100 hover:contrast-125"src="/images/camino-reyes.jpg" alt="Portada El Camino de los Reyes">
        <img class="w-0 flex-grow object-cover opacity-80 transition duration-500 ease-in hover:cursor-crosshair hover:w-20 hover:opacity-100 hover:contrast-125"src="/images/hijo-traidor.jpg" alt="Portada El Hijo del Traidor">
        <img class="w-0 flex-grow object-cover opacity-80 transition duration-500 ease-in hover:cursor-crosshair hover:w-20 hover:opacity-100 hover:contrast-125"src="/images/imperio-final.jpg" alt="Portada El Imperio Final">
        <img class="w-0 flex-grow object-cover opacity-80 transition duration-500 ease-in hover:cursor-crosshair hover:w-20 hover:opacity-100 hover:contrast-125"src="/images/guardianes-ciudadela.jpg" alt="Portada Guardianes de la Ciudadela">
        <img class="w-0 flex-grow object-cover opacity-80 transition duration-500 ease-in hover:cursor-crosshair hover:w-20 hover:opacity-100 hover:contrast-125"src="/images/señor-anillos.jpg" alt="Portada El Señor de los Anillos">
        <img class="w-0 flex-grow object-cover opacity-80 transition duration-500 ease-in hover:cursor-crosshair hover:w-20 hover:opacity-100 hover:contrast-125"src="/images/trenza-esmeralda.jpg" alt="Portada Trenza del Mar Esmeralda">
    </section>

    <div class="text-4xl p-5">
        <h1 class="font-Nefelibata">Ultimos libros subidos</h1>
    </div>

@endsection