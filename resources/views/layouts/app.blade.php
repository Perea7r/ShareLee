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

<body class="bg-neutral">
    <div class="navbar bg-neutral">
        <div class="flex-auto">
            <a href="/">
                <img class="w-60" src="./images/Logo.png" alt="Logo">
            </a>
        </div>
        <div class="flex-none gap-2">
            <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered" />
            </div>
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-12 rounded-full">
                        <img src="./images/user.png" alt="Usuario" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-neutral rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Mis datos
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Lista de deseos</a></li>
                    <li><a>Intercambios realizados</a></li>
                    <li><a>Mis libros</a></li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

</body>

</html>
