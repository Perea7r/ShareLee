<div class="form-control w-64">
    <label class="input-group-vertical" for="titulo">
        <span class="font-Montserrat text-sm">Título</span>
        <input type="text" name="titulo" id="titulo" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-72">
    <label class="input-group-vertical" for="descripcion">
        <span class="font-Montserrat text-sm">*Descripción</span>
        <textarea type="text" name="descripcion" id="descripcion" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent max-h-11"></textarea>
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="categoria">
        <span class="font-Montserrat text-sm">Categoria</span>
        <input type="text" name="categoria" id="categoria" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="ISBN">
        <span class="font-Montserrat text-sm">ISBN</span>
        <input type="text" name="ISBN" id="ISBN" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="idioma">
        <span class="font-Montserrat text-sm">Idioma</span>
        <input type="text" name="idioma" id="idioma" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="autor">
        <span class="font-Montserrat text-sm">Autor</span>
        <input type="text" name="autor" id="autor" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="editorial">
        <span class="font-Montserrat text-sm">Editorial</span>
        <input type="text" name="editorial" id="editorial" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-64">
    <div class="input-group-vertical">
        <label class="text-sm" for="formato">Formato</label>
        <select class="modalbook__select" name="formato" id="formato" required>
            <option disabled selected>-Elige el formato-</option>
            <option value="Dura">Tapa dura</option>
            <option value="Blanda">Tapa Blanda</option>
        </select>
    </div>
</div>

<div class="form-control w-64">
    <div class="input-group-vertical">
        <label class="text-sm" for="estado">Estado</label>
        <select class="modalbook__select" name="estado" id="estado" required>
            <option disabled selected>-Elige el estado-</option>
            <option value="N">Nuevo</option>
            <option value="CN">Como nuevo</option>
            <option value="U">Usado</option>
            <option value="MU">Muy usado</option>
        </select>
    </div>
</div>


<div class="form-control w-64">
    <label class="input-group-vertical" for="sharelines">
        <span class="font-Montserrat text-sm">Sharelines</span>
        <input type="text" name="sharelines" id="sharelines" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-64">
    <label class="input-group-vertical" for="tags">
        <span class="font-Montserrat text-sm">Tags</span>
        <input type="text" name="tags" id="tags" required
            class="input h-8 input-bordered focus:outline-offset-0 focus:outline-1 focus:outline-accent" />
    </label>
</div>

<div class="form-control w-64 row-span-3">
    <label class="input-group-vertical" for="foto">
        <span class="font-Montserrat text-sm">Foto</span>
        <input type="file" name="foto" id="foto" required
            class="file-input file-inp ut-bordered file-input-accent hover:file-input-info w-72">
</div>
