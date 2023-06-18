<!DOCTYPE html>
<html data-theme="synthwave" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/app.js"></script>
</head>

<body class="body bg-black w-full h-full fondo__pantalla">
    <div>
        <canvas class="pointer-events-none w-full fixed top-0 left-0 z-50"></canvas>
    </div>
    @include('partials.nav.navAprendizaje')

    <div class="flex flex-col justify-center items-center mt-56">

        <p class="text-center h1-intro font-Dreamscape text-3xl">Hola, me llamo</p>
        <p class="mt-5 neonMorado text-center h1-intro font-Dreamscape text-7xl">Rub<span class="flicker-fast">e</span>n
            Perea</p>
        <p class=" mt-5 text-center h1-intro font-Dreamscape text-3xl">y soy</p>
        <p class="mt-5 neonMorado text-center h1-intro font-Dreamscape text-7xl">FRONTEND devel<span
                class="flicker-slow">o</span>per</p>
        <div class="welcome text-center mt-10">
            <span class="text-xl font-Scifi">Bienvenidos a mi portfolio</span>
        </div>
    </div>

    <div>
        <img class="yoda h-20 w-20" src="/images/yoda.png" alt="yoda">
    </div>

    <div class="flex flex-col justify-center items-center mt-72">
        <h1 data-aos="fade-up" class="font-Scifi text-4xl">Sobre mi</h1>

        <div class="flex flex-direction-row justify-center items-center gap-7 mt-10">
            <img src="/images/ruben.png" alt="Ruben Perea">
            <a class="a w-36 text-center" href="/pdf/ruben.pdf" target="_blank">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                CV
            </a>
        </div>

    </div>

</body>

<script>
    AOS.init();
</script>

</html>

@include('partials.animation.stars')
