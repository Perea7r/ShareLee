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
        <dialog id="my_modal" class="modal">
            <form method="dialog" class="modal-box w-11/12 max-w-5xl rounded-none">
                <div class="flex justify-center">
                    <button class="btn w-1/2 rounded-none">Entrar</button>
                    <button class="btn w-1/2 rounded-none">Nuevo Usuario</button>
                </div>

                <h2 class="font-Montserrat text-2xl font-bold my-10">Iniciar sesión</h2>

                <div class="form-control gap-4">
                    <input placeholder="Email*" class="text__input" type="email" name="email" id="email" required>
                    <input placeholder="Contraseña*" class="text__input" type="password" name="password" id="password"
                        required>
                </div>


                <div class="flex justify-between my-10">
                    <button class="btn rounded-none w-48">Iniciar sesión</button>
                    <a class="text-accent" href="#">¿Has olvidado tu contraseña?</a>
                </div>
            </form>
        </dialog>
    @endguest

</div>
