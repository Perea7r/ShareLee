<form action="">
    <div class="join">
        <div>
            <div class="dropdown dropdown-bottom">
                <input tabindex="0" type="search" name="search" value="{{ $search }}" autocomplete="off"
                    class="input join-item !outline-none border-b-2" placeholder="Busca tu libro..." />
                    <ul tabindex="0" class="dropdown-content menu bg-slate-100">
                        @foreach ($libros as $libro)
                            <li> <a href="">{{ $libro->titulo }}</a></li>
                        @endforeach
                    </ul>
            </div>
        </div>
        <button class="join-item btn-primary w-20">Search</button>
    </div>

</form>
