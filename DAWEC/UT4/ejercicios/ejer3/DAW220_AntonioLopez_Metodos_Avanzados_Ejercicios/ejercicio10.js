const ciudades = ["Zaragoza", "Ávila", "Madrid", "Barcelona"];

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Función ordenar
function ordenar(valores) {
    return valores.sort((a, b) => a.localeCompare(b));
}

// Evento de carga
addEventListener("load", function () {
    let btn_ordenar = document.getElementById("ordenar");

    // Evento botón ordenar
    btn_ordenar.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");
        resultado.innerHTML = `<p>Array original: ${visualiza(ciudades)}</p>`;

        let ciudades_ordenadas = ordenar(ciudades);
        resultado.innerHTML += `<p>Array ordenado: ${visualiza(ciudades_ordenadas)}</p>`;
    }, false);
}, false);