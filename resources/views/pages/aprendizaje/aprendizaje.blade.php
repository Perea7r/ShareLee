<!DOCTYPE html>
<html data-theme="synthwave" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="js/app.js"></script>
</head>

<body class="body bg-black w-full h-screen fondo__pantalla">
    <div>
        <canvas class="pointer-events-none w-full h-full fixed top-0 left-0 z-50"></canvas>
    </div>
    @include('partials.nav.navAprendizaje')

    <div class="flex flex-col justify-center items-center mt-56">

        <p class="text-center h1-intro font-Dreamscape text-3xl">Soy</p>
        <p class="mt-3 neonMorado text-center h1-intro font-Dreamscape text-7xl">Rub<span class="flicker-fast">e</span>n
            Perea</p>
        <p class="mt-5 neonMorado text-center h1-intro font-Dreamscape text-7xl">Desarrollador Fr<span
                class="flicker-slow">o</span>ntend</p>
        <div class="welcome text-center mt-10">
            <span class="text-xl font-Scifi">Bienvenidos a mi portfolio</span>
        </div>
    </div>

    <div class="w-screen">
        <img class="yoda h-36 w-36" src="/images/yoda.png" alt="yoda fly">
    </div>

</body>



</html>
@include('partials.animation.stars')
