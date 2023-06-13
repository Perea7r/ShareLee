    @guest
        <dialog id="my_modal" class="modal">
            <div class="modal-box w-11/12 max-w-5xl rounded-none">
                <form>
                    <button for="my-modal" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <div class="flex justify-center mt-5">
                    <button type="button" class="btn button__entrar"
                        onclick="mostrarContenidoModal('contenido__entrar')">Entrar</button>
                    <button type="button" class="btn button__nuevo-usuario"
                        onclick="mostrarContenidoModal('contenido__nuevo-usuario')">Nuevo Usuario</button>
                </div>

                <!-- Contenido del formulario de login -->
                <form id="form-login" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div id="contenido__entrar" class="contenido">
                        <h2 class="focus font-Montserrat text-2xl font-bold my-10">Iniciar sesión</h2>

                        <div class="form-control gap-4">
                            <input placeholder="Email*" class="text__input w-2/3" type="email" name="email"
                                id="email">
                            <input placeholder="Contraseña*" class="text__input w-2/3" type="password" name="password"
                                id="password">
                        </div>

                        <div class="flex justify-between my-10">
                            <button type="submit"
                                class="btn text-base rounded-none w-56 bg-gradient-to-r from-sky-600 to-sky-400 border border-black capitalize font-Montserrat">Iniciar
                                sesión</button>
                            <a class="text-accent" href="#">¿Has olvidado tu contraseña?</a>
                        </div>
                    </div>
                </form>

                <!-- Contenido del formulario de registro -->
                <form id="form-register" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div id="contenido__nuevo-usuario" class="contenido hidden">
                        <h2 class="font-Montserrat text-2xl font-bold my-8">Nuevo usuario</h2>

                        <div class="form-control gap-4">
                            <input placeholder="Nombre*" class="text__input w-2/3" type="text" name="name"
                                id="name">
                            <input placeholder="Apellidos*" class="text__input w-2/3" type="text" name="apellidos"
                                id="apellidos">
                            <input placeholder="Email*" class="text__input w-2/3" type="email" name="email"
                                id="email">
                            <input placeholder="Contraseña*" class="text__input w-2/3" type="password" name="password"
                                id="password">

                            <div class="flex justify-between mt-6">
                                <button type="submit"
                                    class="btn rounded-none w-56 bg-gradient-to-r from-secondary to-green-400 border border-black capitalize text-base font-Montserrat">Registrarme</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </dialog>
    @endguest

    <script>
        function mostrarContenidoModal(target) {
            const elementosContenido = document.querySelectorAll('.contenido');
            for (let i = 0; i < elementosContenido.length; i++) {
                if (elementosContenido[i].id === target) {
                    elementosContenido[i].classList.remove('hidden');
                } else {
                    elementosContenido[i].classList.add('hidden');
                }
            }
        }
    </script>
