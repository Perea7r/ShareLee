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
        <p class="mt-5 neonMorado text-center h1-intro font-Dreamscape text-7xl">Desarrollador <span
                class="flicker-slow">w</span>eb</p>
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

        <article
            class="mx-auto w-1/2 shadow-xl bg-cover bg-center min-h-150 transform duration-500 hover:-translate-y-2 cursor-pointer group"
            style="background-image: url(/images/sharelee.png);">
            <a href="/">
                <div
                    class="bg-black bg-opacity-20 min-h-150 px-10 flex flex-wrap flex-col pt-96 hover:bg-opacity-75 transform duration-300">
                    <h1
                        class="text-white text-3xl mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                        <p class="font-Special">ShareLee</p>
                    </h1>
                    <div
                        class="w-16 h-2 bg-yellow-500 rounded-full mb-5 transform translate-y-20 group-hover:translate-y-0 duration-300">
                    </div>
                    <p
                        class="opacity-0 text-white text-xl group-hover:opacity-80 transform duration-500 font-Montserrat">
                        Proyecto realizado con Laravel, tailwind y MySQL, es una web de intercambio de libros, con
                        sistema de registro de usuarios y subidas de libros.
                    </p>
                </div>
            </a>
        </article>
    </div>


    <div class="h-[100vh] mt-20" id="vanta-canvas">
        <div class="relative z-10">
            <div class="flex flex-col justify-center items-center">
                <h1 id="contactame" data-aos="fade-up" class="font-Scifi text-4xl mt-20">Contáctame</h1>
            </div>
            <div class="px-4 py-8 md:py-16 md:flex md:justify-center">
                <form class="md:w-1/2 lg:w-1/3">
                    <div class="mb-4">
                        <label class="block text-accent font-Scifi font-bold mb-2" for="name">Nombre</label>
                        <input
                            class="appearance-none border border-accent w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Nombre">
                    </div>
                    <div class="mb-4">
                        <label class="block text-accent font-bold mb-2 font-Scifi" for="email">Email</label>
                        <input
                            class="appearance-none border border-accent w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="email" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-accent font-bold mb-2 font-Scifi" for="subject">Asunto</label>
                        <input
                            class="appearance-none border border-accent w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline"
                            id="subject" type="text" placeholder="Asunto">
                    </div>
                    <div class="mb-8">
                        <label class="block text-accent font-bold mb-2 font-Scifi" for="message">Mensaje</label>
                        <textarea
                            class="appearance-none border border-accent w-full py-2 px-3 text-gray-300 leading-tight focus:outline-none focus:shadow-outline"
                            id="message" rows="6" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="bg-accent hover:bg-primary text-gray-900 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline font-Scifi"
                            type="submit">Enviar</button>
                    </div>

                    <div class="flex justify-center">
                        <a href="https://www.linkedin.com/in/rubenpereaserrano" target="_blank" data-aos="zoom-in"
                            data-aos-duration="1000" class="a  text-center" style="--buttoncolor: #0a66c2;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <img class="invert" src="/images/skills/linkedin.svg" alt="linkedin">
                        </a>

                        <a href="https://github.com/Perea7r" target="_blank" data-aos="zoom-in" data-aos-duration="1000"
                            class="a  text-center" style="--buttoncolor: #b900ff;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <img class="invert" src="/images/skills/github.svg" alt="github">
                        </a>

                        <a href="mailto:rpereaserrano@outlook.es" data-aos="zoom-in" data-aos-duration="1000"
                            class="a  text-center" style="--buttoncolor: #ead41c;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <img class="invert" src="/images/skills/email.svg" alt="email">
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r120/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.24/vanta.net.min.js"></script>

    <script>
        VANTA.NET({
            el: "#vanta-canvas",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xd12ceb,
            backgroundColor: 0x1b0d34
        })
    </script>

    <a href="#" class="scroll-to-top invert">
        <img src="/images/plane.svg" alt="Subir" width="30">
    </a>

</body>

<script>
 const scrollToTop = document.getElementById('scroll-to-top');

scrollToTop.addEventListener('click', () => {
  scrollToTop.classList.add('animate');
});
</script>

<script>
    AOS.init();
</script>

</html>

@include('partials.animation.stars')
