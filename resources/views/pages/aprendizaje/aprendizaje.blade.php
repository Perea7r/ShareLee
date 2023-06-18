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
        <h1 data-aos="fade-up" class="font-Scifi text-4xl">Sobre mi</h1>

        <div class="flex relative flex-direction-row justify-center items-center gap-7 mt-10 top-1">
            <img class="w-60" src="/images/ruben.png" alt="Ruben Perea">
            <a class="a w-36 text-center" href="/pdf/ruben.pdf" target="_blank">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p class="font-Scifi">CV</p>
            </a>
        </div>

        <div class="max-w-sm w-full lg:max-w-full lg:flex">
            <div
                class="flex-1 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal" style="background-image: linear-gradient(to bottom, #4b006e, #0b0051);">
                <div class="">
                    <p class="text-sm flex items-center"></p>
                    <div class="font-Scifi text-accent font-bold text-xl mb-2">¿Quién soy?</div>
                    <p class="font-Montserrat text-lg">Tengo 28 años y soy de Sevilla, España. Fui cocinero y
                        trabajé durante 5 años. Sin embargo, mi pasión se encuentra en el mundo del desarrollo, con un
                        gran interés por el diseño. En 2021 comencé mi camino como desarrollador, enfocándome en expandir
                        mis habilidades tecnológicas y mejorar mis conocimientos en busca de una carrera profesional.
                    </p>
                </div>
            </div>

            <div
                class="flex-1 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"  style="background-image: linear-gradient(to bottom, #FFB900, #FF773D);">
                <div class="" >
                    <p class="text-sm flex items-center"></p>
                    <div class="font-Scifi text-black font-bold text-xl mb-2">¿Cúales son mis metas?</div>
                    <p class="font-Montserrat text-black text-lg">Mi objetivo es ser un todoterreno en el mundo del desarrollo,
                        busco proyectos desafiantes u oportunidades laborales donde pueda aplicar de manera efectiva mis
                        habilidades en programación y diseño, contribuyendo a la creación de experiencias
                        digitales,innovadoras y amigables para los usuarios</p>
                </div>
            </div>
            <div
                class= "flex-1 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal" style="background-image: linear-gradient(to bottom, #00FFFF, #0080FF);">
                <div class="">
                    <p class="text-sm flex items-center"></p>
                    <div class="font-Scifi text-black font-bold text-xl mb-2">¡Conóceme un poco más!
                    </div>
                    <p class="font-Montserrat text-black text-lg">En mi tiempo libre me encanta jugar a videojuegos, hacer deporte
                        y conocer nuevos lugares y personas. Tengo dos gatos Daiki y Nicole, que les encanta apoyarse en
                        mi teclado y borrar mi código</p>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    AOS.init();
</script>

</html>

@include('partials.animation.stars')
