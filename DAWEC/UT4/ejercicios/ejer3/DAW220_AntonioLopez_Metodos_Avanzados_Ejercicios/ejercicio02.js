// Función genera()
function genera() {
    let resultado = [];

    for (let contador = 2; contador <= 20; contador += 2) {
        resultado.push(contador);
    }

    return resultado;
}

// Función multi
function multi(valores) {
    return valores.map(function (a) {
        return a * 2;
    });
}

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Evento de carga
addEventListener("load", function () {
    let lista = genera();
    let copia = multi(lista);

    let resultado = document.getElementById("resolucion");
    resultado.innerHTML = "<p>Array: " + visualiza(lista) + "</p>";
    resultado.innerHTML += "<p>Array multiplicado por 2: " + visualiza(copia) + "</p>";
}, false);