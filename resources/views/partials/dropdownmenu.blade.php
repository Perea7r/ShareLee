<div class="dropdown dropdown-end">

    @include('partials.fotoPerfil')

    <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
        <li><a href="{{ route('usuarios.index') }}">Mis datos</a></li>
        <li><a href="{{ route('usuarios.index') }}">Lista de deseos</a></li>
        <li><a href="{{ route('usuarios.index') }}">Intercambios realizados</a></li>
        <li><a href="{{ route('usuarios.index') }}">Mis libros</a></li>
    </ul>
</div>
