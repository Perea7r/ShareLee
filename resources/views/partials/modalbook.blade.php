<input type="checkbox" id="subir-libro" class="modal-toggle" />
<div class="modal">
    <div class="modal-box max-w-7xl modal-bottom sm:modal-middle">
        <label for="subir-libro" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-xl font-Montserrat">Subir mi libro</h3>
        <div class="divider"></div>

        <div class="mb-3">
            <p class="font-Montserrat">Los campos marcados con (*) son opcionales</p>
        </div>

        <form action="#" class="grid grid-cols-3 grid-rows-5 gap-4 grid-flow-col font-Montserrat">
            @include('partials.input-modalbook')
        </form>

        <div class="modal-action">
            <label for="subir-libro"
                class="btn bg-secondary hover:bg-secondary hover:border-solid hover:border-2 hover:border-lime-700 font-Montserrat text-base normal-case">Subir</label>
        </div>
    </div>
</div>