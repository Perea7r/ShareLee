<input type="checkbox" id="subir-libro" class="modal-toggle" />
<div class="modal">
    <div class="modal-box max-w-7xl modal-bottom sm:modal-middle">
        <label for="subir-libro" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-xl font-Montserrat">Subir mi libro</h3>
        <div class="divider mt-0"></div>

        <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 grid-rows-5 gap-4 grid-flow-col font-Montserrat">
                @include('partials.modal.input-modalbook')
            </div>
                

            <div class="modal-action mt-0">
                <button for="subir-libro" type="submit" class="form__button">Subir</button>
            </div>
        </form>
    </div>
</div>

<script>
const inputFile = document.getElementById('foto');
const previewImg = document.getElementById('preview-img');

inputFile.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const url = URL.createObjectURL(file);
    previewImg.setAttribute('src', url);
    previewImg.style.display = 'block';
  } else {
    previewImg.style.display = 'none';
  }
});
</script>
