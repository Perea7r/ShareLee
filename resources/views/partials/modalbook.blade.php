<input type="checkbox" id="subir-libro" class="modal-toggle" />
<div class="modal">
    <div class="modal-box max-w-7xl modal-bottom sm:modal-middle">
        <label for="subir-libro" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-xl font-Montserrat">Subir mi libro</h3>
        <div class="divider"></div>
        <p>Los campos marcados con (*) son obligatorios</p>
        <div class="grid grid-cols-3 grid-rows-5 gap-4 grid-flow-col">
            <div>
                <p>*Título</p>
                <input type="text" class="border border-black">
            </div>
            <div>
                <p>*ISBN</p>
                <input type="text" class="border border-black">
            </div>
            <div>
                <p>*Idioma</p>
                <input type="text" class="border border-black">
            </div>
            <div>
                <p>*Autor</p>
                <input type="text" class="border border-black">
            </div>
            <div>
                <p>*Editorial</p>
                <input type="text" class="border border-black">
            </div>
            <div>
                <p>*Formato</p>
                <input type="text" class="border border-black">
            </div>
            <div>
                <p>*Estado del libro</p>
                <input type="text" class="border border-black">
            </div>
           <div>
             <p>*Sharelines</p>
             <input type="text" class="border border-black">
           </div>
            <div>
                <p>Tags</p>
                <input type="text" class="border border-black">
            </div>
            <div class="row-span-3">
                <p>*Foto</p>
                <input type="file" class="file-input file-input-bordered w-full max-w-xs file-input-">
            </div>
        </div>
        <div class="modal-action">
            <label for="subir-libro" class="btn bg-secondary">Subir</label>
        </div>
    </div>
</div>
