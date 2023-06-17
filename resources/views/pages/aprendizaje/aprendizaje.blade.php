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

    <h1 class="h1-intro font-Dreamscape text-5xl">Sobre mi</h1>

</body>



</html>
@include('partials.animation.stars')
