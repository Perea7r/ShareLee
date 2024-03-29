<form action="">
    <div class="join">
        <div>
            <div class="dropdown dropdown-bottom">
                <input tabindex="0" type="search" name="search" value="{{ $search }}" autocomplete="off"
                    class="input join-item !outline-none border-b-2" placeholder="Busca tu libro..." />
                <ul tabindex="0" class="dropdown-content menu bg-base-100 z-50">
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($libros as $libro)
                        @if ($loop->index < 5 && stripos($libro->titulo, request('search')) !== false)
                            <li><a href="/ejemplar/{{ $libro->idEjemplar }}">{{ $libro->titulo }}</a></li>
                            @php
                                $count++;
                            @endphp
                        @elseif ($count >= 5)
                            @break
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <button class="join-item btn-primary w-20">Buscar</button>
    </div>

</form>


<script>
    const libros = {!! json_encode($libros) !!}; // Obtener los libros desde Laravel

    const searchInput = document.querySelector('input[name="search"]');
    const list = document.querySelector('.dropdown-content');

    searchInput.addEventListener('input', () => {
        const searchTerm = searchInput.value.toLowerCase();
        const filteredLibros = libros.filter(libro =>
            libro.titulo.toLowerCase().includes(searchTerm)
        );

        list.innerHTML = ''; // Limpiar la lista

        filteredLibros.slice(0, 5).forEach(libro => {
            const listItem = document.createElement('li');
            const link = document.createElement('a');
            link.href = `/ejemplar/${libro.idEjemplar}`;
            link.textContent = libro.titulo;
            listItem.appendChild(link);
            list.appendChild(listItem);
        });
    });
</script>