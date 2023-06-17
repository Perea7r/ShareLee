<!DOCTYPE html5>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareLee - @yield('title')</title>
    <link rel="icon" href="images/bookscategory/libroAmarillo.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
        @include('partials.logo.logo')
        <div class="flex justify-between gap-7 w-fit lg:gap-0 lg:w-3/5">
            @include('partials.busqueda.busqueda')
            @include('partials.perfil.dropdownmenu')
        </div>
    </div>

    @include('partials.nav.nav')

    @yield('content')

    @include('partials.footer.footer')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@include('partials.modal.modalbook')
@include('partials.modal.modalLogin')

</html>
