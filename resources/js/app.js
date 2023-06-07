// Oculta todos los bloques de contenido excepto el primero
document.querySelectorAll('.contenido-oculto:not(:first-of-type)').forEach(contenido => {
    contenido.style.height = '0';
});

// Función para mostrar el contenido correspondiente
function mostrarContenido(target) {
    // Oculta todos los bloques de contenido
    document.querySelectorAll('.contenido-oculto').forEach(contenido => {
        contenido.style.height = '0';
    });

    // Muestra el contenido correspondiente al elemento "li" activo o enfocado
    const contenido = document.querySelector(`.${target}`);
    contenido.style.height = `${contenido.scrollHeight}px`;
}

// Agrega eventos a los elementos li para mostrar el contenido correspondiente al hacer clic
document.querySelectorAll('.drawer li').forEach((li, index) => {
    // Agrega la clase "activo" al primer elemento "li" al cargar la página
    if (index === 0) {
        li.classList.add('activo');
    }

    // Agrega un evento "click" a cada elemento "li"
    li.addEventListener('click', () => {
        // Quita la clase "activo" de todos los elementos "li"
        document.querySelectorAll('.drawer li').forEach(li => {
            li.classList.remove('activo');
        });

        // Agrega la clase "activo" al elemento "li" clicado
        li.classList.add('activo');

        // Muestra el contenido correspondiente
        mostrarContenido(li.getAttribute('data-target'));
    });
});

// Muestra el contenido correspondiente al cargar la página
mostrarContenido(document.querySelector('.activo').getAttribute('data-target'));
