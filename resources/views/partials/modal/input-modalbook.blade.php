<div class="form-control w-64">
    <label class="input-group-vertical" for="titulo">
        <span class="font-Montserrat text-sm">Título</span>
        <input type="text" value="{{old('titulo')}}" name="titulo" id="titulo"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
            @error('titulo')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="descripcion">
        <span class="font-Montserrat text-sm">*Descripción</span>
        <textarea type="text" name="descripcion" id="descripcion"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent max-h-11">{{old('descripcion')}}</textarea>
            @error('descripcion')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64">
    <div class="input-group-vertical">
        <label class="text-sm" for="categoria">Categoria</label>
        <select class="modalbook__select" name="categoria" id="categoria">
            <option disabled selected>-Elige la categoria-</option>
            @if (isset($categorias)
            )
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->idCategoria }}">{{ $categoria->categoria }}</option>
                @endforeach
            @endif

        </select>
        @error('categoria')
                <small class="text-red-600">{{$message}}</small>
        @enderror
    </div>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="ISBN">
        <span class="font-Montserrat text-sm">ISBN</span>
        <input type="text" value="{{old('ISBN')}}" name="ISBN" id="ISBN"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
            @error('ISBN')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="idioma">
        <span class="font-Montserrat text-sm">Idioma</span>
        <input type="text" value="{{old('idioma')}}" name="idioma" id="idioma"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
            @error('idioma')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="autor">
        <span class="font-Montserrat text-sm">Autor</span>
        <input type="text" value="{{old('autor')}}" name="autor" id="autor"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
            @error('autor')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="editorial">
        <span class="font-Montserrat text-sm">Editorial</span>
        <input type="text" value="{{old('editorial')}}" name="editorial" id="editorial"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
            @error('editorial')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64">
    <div class="input-group-vertical">
        <label class="text-sm" for="formato">Formato</label>
        <select class="modalbook__select" name="formato" id="formato">
            <option disabled selected>-Elige el formato-</option>
            <option value="Dura">Tapa dura</option>
            <option value="Blanda">Tapa blanda</option>
        </select>
        @error('formato')
                <small class="text-red-600">{{$message}}</small>
        @enderror
    </div>
</div>

<div class="form-control w-64">
    <div class="input-group-vertical">
        <label class="text-sm" for="estado">Estado</label>
        <select class="modalbook__select" name="estado" id="estado">
            <option disabled selected>-Elige el estado-</option>
            <option value="Nuevo">Nuevo</option>
            <option value="Como nuevo">Como nuevo</option>
            <option value="Usado">Usado</option>
            <option value="Muy usado">Muy usado</option>
        </select>
        @error('estado')
                <small class="text-red-600">{{$message}}</small>
        @enderror
    </div>
</div>


<div class="form-control w-64">
    <label class="input-group-vertical" for="sharelines">
        <span class="font-Montserrat text-sm">Sharelines</span>
        <div class="tooltip tooltip-primary" data-tip="Los sharelines son una moneda símbolica del valor ya sea por contenido, numero de páginas o sentimental que tiene ese libro para ti.">
            <img src="/images/icono-ayuda.svg" alt="icono ayuda">
        </div>
        <input type="text" value="{{old('sharelines')}}" name="sharelines" id="sharelines"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
            @error('sharelines')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="tags">
        <span class="font-Montserrat text-sm">Tags</span>
        <input type="text" value="{{old('tags')}}" name="tags" id="tags"
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
            @error('tags')
                <small class="text-red-600">{{$message}}</small>
            @enderror
    </label>
</div>

<div class="form-control w-64 row-span-3">
    <label class="input-group-vertical" for="foto">
        <span class="font-Montserrat text-sm">Foto</span>
        <input type="file" name="foto" id="foto"
            class="file-input file-inp ut-bordered file-input-accent hover:file-input-info w-72">
            @error('foto')
                <small class="text-red-600">{{$message}}</small>
            @enderror
</div>


