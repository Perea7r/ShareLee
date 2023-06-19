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
        @include('partials.sobre_mi.sobre_mi')

        <h1 data-aos="fade-up" class="mt-10 font-Scifi text-4xl">Tecnologías</h1>

        <div class="grid grid-cols-4 gap-4">
            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #d84924;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/html.svg" alt="HTML">
              <p>HTML</p>
            </div>
          
            <div data-aos="zoom-in" data-aos-duration="1000"  class="a w-36 text-center" style="--buttoncolor: #254bdd;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/css.svg" alt="CSS">
              <p>CSS</p>
            </div>
          
            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #ead41c;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/js.svg" alt="JS">
              <p>JS</p>
            </div>
          
            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #c36291;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/sass.svg" alt="SASS">
              <p>SASS</p>
            </div>
          
            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #f22a1d;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/laravel.svg" alt="LARAVEL">
              <p>LARAVEL</p>
            </div>
          
            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #7175aa;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/php.svg" alt="PHP">
              <p>PHP</p>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #67aa3c;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/spring.svg" alt="SPRING">
              <p>SPRING</p>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #e01e23;">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <img class="invert" src="/images/skills/java.svg" alt="JAVA">
              <p>JAVA</p>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #3b7f3a;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <img class="invert" src="/images/skills/node.svg" alt="NODEJS">
              <p>NODEJS</p>
              </div>
            
              <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #07adca;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <img class="invert" src="/images/skills/tailwind.svg" alt="TAILWIND">
              <p>TAILWIND</p>
              </div>
  
              <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #d78620;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <img class="invert" src="/images/skills/mysql.svg" alt="MYSQL">
              <p>MYSQL</p>
              </div>
  
              <div data-aos="zoom-in" data-aos-duration="1000" class="a w-36 text-center" style="--buttoncolor: #bf4231;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <img class="invert" src="/images/skills/oracle.svg" alt="ORACLE">
              <p>ORACLE</p>
              </div>
            
          </div>
           
    </div>

</body>

<script>
    AOS.init();
</script>

</html>

@include('partials.animation.stars')
