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

    @yield('content')

    <section class="h-screen w-screen flex items-center justify-center bg-slate-100">

        <!-- Left column container with background-->
        <div class="w-3/4 shadow-xl rounded-md  gap-20 flex flex-row items-center justify-center bg-slate-50">
            <div>
                @include('partials.logo.logo')
            </div>

            <!-- Right column container -->

            <form action="{{ route('register.custom') }}" method="POST"
                class="my-8 w-60 flex flex-col text-center justify-center">
                @csrf

                <h2 class="font-Montserrat text-2xl font-bold my-8">Nuevo usuario</h2>

                <div class="form-control gap-4">
                    <div>
                        <input placeholder="Nombre*" class="text__input" type="text" id="nombre">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div>
                        <input placeholder="Apellidos*" class="text__input" type="text" name="apellidos"
                            id="apellidos">
                        @if ($errors->has('apellidos'))
                            <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                        @endif
                    </div>
                    <div>
                        <input placeholder="Email*" class="text__input" type="email" id="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div>
                        <input placeholder="Contraseña*" class="text__input" type="password" id="password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>



                <button type="submit"
                    class="btn rounded-none btn-block bg-gradient-to-r border-black from-secondary to-green-400 capitalize text-base font-Montserrat my-8">Registrarme</button>

            </form>
        </div>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
