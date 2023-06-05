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

    @if (session('status'))
        <div class="alert bg-primary shadow-lg w-64">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p>¡Libro Subido! Gracias.</p>
        </div>
    @endif

    <div class="flex justify-center lg:justify-between navbar bg-base-100 px-6 flex-wrap">
        @include('partials.logo')
        <div class="flex justify-between gap-7 w-fit lg:gap-0 lg:w-3/5">
            @include('partials.busqueda')
            @include('partials.dropdownmenu')
        </div>
    </div>

    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
@include('partials.modalbook')

</html>
