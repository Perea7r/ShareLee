<div>
    <label>*Título</label>
    <input type="text" required class="border border-black !outline-none">
</div>

<div>
    <label>*ISBN</label>
    <input type="text" required class="border border-black !outline-none">
</div>

<div>
    <label>*Idioma</label>
    <input type="text" required class="border border-black !outline-none">
</div>

<div>
    <label>*Autor</label>
    <input type="text" class="border border-black !outline-none">
</div>

<div>
    <label>*Editorial</label>
    <input type="text" class="border border-black !outline-none">
</div>

<div>
    <label>*Formato</label>
    <select class="select !outline-none">
        <option value="tapa-dura">Tapa dura</option>
        <option value="tapa-blanda">Tapa blanda</option>
    </select>
</div>

<div>
    <label>*Estado del libro</label>
    <select class=" select !outline-none">
        <option value="nuevo">Nuevo</option>
        <option value="como-nuevo">Como nuevo</option>
        <option value="usado">Usado</option>
        <option value="muy-usado">Muy usado</option>
    </select>
</div>

<div>
    <div class="flex gap-1">
        <p class="text-left">*Sharelines</label>
        <div class="tooltip tooltip-primary cursor-help"
            data-tip="Valor simbólico que se le da a un ejemplar para ser intercambiado.">
            <img src="/images/icono-ayuda.svg" alt="icono ayuda">
        </div>
    </div>
    <div class="form-control">
        <div class="flex">
            <img class="absolute h-6" src="images/sharelines.png" alt="icono sharelines">
            <input type="text" class="border border-black !outline-none ">
        </div>
    </div>
</div>

<div>
    <label>Tags</label>
    <input type="text" class="border border-black !outline-none">
</div>

<div class="row-span-3">
    <label>*Foto</label>
    <input type="file" class="file-input file-input-bordered w-full max-w-xs file-input-accent !outline-none hover:file-input-info">
</div>