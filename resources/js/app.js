document.querySelectorAll('.contenido-oculto:not(:first-of-type)').forEach(contenido => {
    contenido.style.height = '0';
});

function mostrarContenido(target) {
    document.querySelectorAll('.contenido-oculto').forEach(contenido => {
        contenido.style.height = '0';
    });

    const contenido = document.querySelector(`.${target}`);
    contenido.style.height = `${contenido.scrollHeight}px`;
}

document.querySelectorAll('.drawer li').forEach((li, index) => {
    if (index === 0) {
        li.classList.add('activo');
    }
    li.addEventListener('click', () => {
        document.querySelectorAll('.drawer li').forEach(li => {
            li.classList.remove('activo');
        });
        li.classList.add('activo');
        mostrarContenido(li.getAttribute('data-target'));
    });
});

mostrarContenido(document.querySelector('.activo').getAttribute('data-target'));
