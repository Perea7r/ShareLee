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
        <p class="mt-5 neonMorado text-center h1-intro font-Dreamscape text-7xl">web devel<span
                class="flicker-slow">o</span>per</p>
        <div class="welcome text-center mt-10">
            <span class="text-xl font-Scifi">Bienvenidos a mi portfolio</span>
        </div>
    </div>

    <div>
        <img class="yoda h-20 w-20" src="/images/yoda.png" alt="yoda">
    </div>

    <div class="flex flex-col justify-center items-center mt-72">
        <h1 id="sobremi" data-aos="fade-up" class="font-Scifi text-4xl">Sobre mi</h1>
        @include('partials.sobre_mi.sobre_mi')

        <h1 id="tecnologias" data-aos="fade-up" class="mt-20 font-Scifi text-4xl">Tecnologías</h1>
        @include('partials.skills.skills')

        <h1 id="misproyectos" data-aos="fade-up" class="mt-20 mb-10 font-Scifi text-4xl">Mis proyectos</h1>

          <article class="mx-auto w-1/2 shadow-xl bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group" style="background-image: url(/images/sharelee.png);">
                <a href="/">
                    <div class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300">
                        <h1 class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                           <p class="font-Special">ShareLee</p> 
                        </h1>
                        <div class="w-16 h-2 bg-yellow-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        </div>
                        <p class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 font-Montserrat">
                            Proyecto realizado con Laravel, tailwind y MySQL, es una web de intercambio de libros, con sistema de registro de usuarios y subidas de libros.
                        </p>
                    </div>
                </a>
            </article>

            
           
    </div>

</body>

<script>
    AOS.init();
</script>

</html>

@include('partials.animation.stars')
