<nav class="flex gap-4 font-Montserrat ml-9 md:flex-wrap flex-wrap">
    <div class="badge badge-secondary badge-lg h-8 w-36">
        <a href="/#categorias" class="text-lg font-medium">CATEGORIAS</a>
    </div>
    <div class="badge badge-secondary badge-lg h-8 w-36">
        <a href="/categorias/3" class="text-lg font-medium">FANTASIA</a>
    </div>
    <div class="badge badge-secondary badge-lg h-8 w-36">
        <a href="/categorias/5" class="text-lg font-medium">SUSPENSE</a>
    </div>
    <div class="badge badge-secondary badge-lg h-8 w-48">
        <a href="/categorias/10" class="text-lg font-medium">CIENCIA FICCION</a>
    </div>
    <div class="badge badge-secondary badge-lg h-8 w-36">
        <a href="/categorias/7" class="text-lg font-medium">DEPORTES</a>
    </div>
    <div class="badge badge-secondary badge-lg h-8 w-36">
        <a href="/categorias/8" class="text-lg font-medium">TERROR</a>
    </div>

    @auth
        <div class="badge badge-primary badge-lg h-8 w-48">
            <label for="subir-libro" class="text-lg font-medium cursor-pointer">SUBIR UN LIBRO</label>
        </div>
    @endauth

</nav>
