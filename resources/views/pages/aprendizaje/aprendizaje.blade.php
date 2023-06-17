<!DOCTYPE html>
<html data-theme="synthwave" lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Portfolio</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-white">
        <nav class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold">
                Portfolio
            </div>
            <ul class="flex space-x-4">
                <li class="text-lg font-medium">
                    <a href="/" class="hover:text-gray-400">Inicio</a>
                </li>
                <li class="text-lg font-medium">
                    <a href="/projects" class="hover:text-gray-400">Proyectos</a>
                </li>
                <li class="text-lg font-medium">
                    <a href="/about" class="hover:text-gray-400">Acerca de</a>
                </li>
            </ul>
        </nav>
        <div class="container mx-auto py-8">
            <h1 class="text-4xl font-bold mb-8">Bienvenido a mi portfolio</h1>
            <p class="text-lg mb-8">Aquí encontrarás algunos de mis proyectos más recientes.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-lg px-8 py-6">
                    <h2 class="text-2xl font-bold mb-4">Sharelee</h2>
                    <p class="mb-4">Página web de intercambio de libros, utilizando técnologías como Laravel, Tailwind, JavaScript.</p>
                    <a href="/" class="text-lg font-medium hover:text-gray-400">Ver proyecto</a>
                </div>
                <div class="bg-gray-800 rounded-lg px-8 py-6">
                    <h2 class="text-2xl font-bold mb-4">Proyecto 2</h2>
                    <p class="mb-4">Descripción del proyecto 2.</p>
                    <a href="#" class="text-lg font-medium hover:text-gray-400">Ver proyecto</a>
                </div>
                <div class="bg-gray-800 rounded-lg px-8 py-6">
                    <h2 class="text-2xl font-bold mb-4">Proyecto 3</h2>
                    <p class="mb-4">Descripción del proyecto 3.</p>
                    <a href="#" class="text-lg font-medium hover:text-gray-400">Ver proyecto</a>
                </div>
            </div>
        </div>
        <footer class="bg-gray-800 py-4">
            <div class="container mx-auto text-center">
                <p class="text-lg">Portafolio Rubén Perea - {{ date('Y') }}</p>
            </div>
        </footer>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>