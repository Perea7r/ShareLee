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
        @include('partials.logo')
        @include('partials.busqueda')
        @include('partials.dropdownmenu')
    </div>

    @include('partials.nav')

    @yield('content')
    
    @include('partials.footer')

</body>
    @include('partials.modalbook')
</html>