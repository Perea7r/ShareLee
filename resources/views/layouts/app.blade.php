<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareLee - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'default meta description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex justify-between navbar bg-base-100 px-6 flex-wrap">
        <div class="">
            <a href="/">
                <img class="w-60" src="./images/Logo.png" alt="Logo">
            </a>
        </div>

        <div class="form-control">
            <div class="input-group">
                <button
                    class="btn btn-circle text-revers bg-slate-600 text-white text- border-4 border-slate-600 hover:bg-slate-700 hover:border-slate-700 !outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <input type="text" placeholder="Busca tu libro.."
                    class="input border-4 border-slate-600 rounded-full !outline-none" />
            </div>
        </div>

        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-circle btn-ghost w-16 h-16 !outline-none focus:btn-ghost">
                <img src="./images/user.png" alt="Usuario" />
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-neutral rounded-box w-52 ">
                <li>
                    <a class="justify-between">
                        Mis datos
                    </a>
                </li>
                <li><a>Lista de deseos</a></li>
                <li><a>Intercambios realizados</a></li>
                <li><a>Mis libros</a></li>
            </ul>
        </div>
    </div>

    <nav class="flex gap-4 font-Montserrat ml-9">
        <div class="badge badge-secondary badge-lg">
            <a href="" class="text-lg font-medium">Categorias</a>
        </div>
        <div class="badge badge-secondary badge-lg">
            <a href="" class="text-lg font-medium">Fantasía</a>
        </div>
        <div class="badge badge-secondary badge-lg">
            <a href="" class="text-lg font-medium">Suspense</a>
        </div>
        <div class="badge badge-secondary badge-lg">
            <a href="" class="text-lg font-medium">Ciencia Ficción</a>
        </div>
        <div class="badge badge-secondary badge-lg">
            <a href="" class="text-lg font-medium">Novela histórica</a>
        </div>
        <div class="badge badge-secondary badge-lg">
            <a href="" class="text-lg font-medium">Deportes</a>
        </div>
        <div class="badge badge-secondary badge-lg">
            <a href="" class="text-lg font-medium">Teror</a>
        </div>
        <div class="badge badge-primary badge-lg">
            <a href="" class="text-lg font-medium">Subir un libro</a>
        </div>
    </nav>

    @yield('content')

</body>

</html>
