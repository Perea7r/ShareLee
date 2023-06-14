<div class="dropdown dropdown-end">

    @include('partials.perfil.fotoPerfil')

    @auth
        <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
            <li><a href="{{ route('usuarios') }}">Mis datos</a></li>
            <li><a href="{{ route('usuarios') }}">Lista de deseos</a></li>
            <li><a href="{{ route('usuarios') }}">Intercambios realizados</a></li>
            <li><a href="{{ route('usuarios') }}">Mis libros</a></li>
        </ul>
    @endauth

    @guest
        <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
            <li><a href="{{ route('register-user') }}">Crear Cuenta</a></li>
        </ul>

    @endguest


</div>
