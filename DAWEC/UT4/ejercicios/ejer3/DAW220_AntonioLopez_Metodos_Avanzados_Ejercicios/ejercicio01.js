// Función copia
function copia(valores) {
    return valores.slice();
}

// Función cambiar
function cambiar(valores, posicion, numero_elementos) {
    let resultado = copia(valores);

    return resultado.fill(0, posicion, numero_elementos + posicion);
}

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Evento de carga
addEventListener("load", function () {
    let lista = [1, 2, 4, 8, 16];
    let copia1 = copia(lista);
    let copia2 = cambiar(copia1, 1, 3);

    let resultado = document.getElementById("resolucion");
    resultado.innerHTML = "<p>Array: " + visualiza(lista) + "</p>";
    resultado.innerHTML += "<p>Array con tres '0' en la posición '1': " + visualiza(copia2) + "</p>";
}, false);