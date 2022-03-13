var valores = [];

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Función suma_uno
function suma_uno(valores) {
    let resultado = valores.slice();

    return resultado.map(function(elemento) {
        return parseFloat(elemento) + 1;
    });
}

// Evento de carga
addEventListener("load", function () {
    let btn_guardar = document.getElementById("guardar");
    let btn_sumar_uno = document.getElementById("sumar_uno");

    // Evento botón guardar
    btn_guardar.addEventListener("click", function () {
        let caja_texto = document.getElementById("caja_texto");
        valores.push(caja_texto.value);
        caja_texto.value = "";
    }, false);

    // Evento botón sumar_uno
    btn_sumar_uno.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");

        // Obtengo los números solo
        let valores_numericos = valores.filter(Number);
        let valores_mas_uno = suma_uno(valores);

        resultado.innerHTML = `<p>Original: ${visualiza(valores_numericos)}</p>`;
        resultado.innerHTML += `<p>Original + 1: ${visualiza(valores_mas_uno)} </p>`;
    }, false);
}, false);