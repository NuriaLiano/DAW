var valores = [];

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Función promedio
function promedio(valores) {
    let media = 0;

    if (valores.length != 0) {
        // Convierto a float cada elemento para que no me lo trate como cadena
        let suma = valores.reduce(function(a, b) {
            return parseFloat(a) + parseFloat(b);
        });

        // Calculo la media
        media = suma / valores.length;
    }

    return media;
}

// Evento de carga
addEventListener("load", function () {
    let btn_guardar = document.getElementById("guardar");
    let btn_media = document.getElementById("media");

    // Evento botón guardar
    btn_guardar.addEventListener("click", function () {
        let caja_texto = document.getElementById("caja_texto");
        valores.push(caja_texto.value);
        caja_texto.value = "";
    }, false);

    // Evento botón extraer
    btn_media.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");

        // Obtengo los números solo
        let valores_numericos = valores.filter(Number);

        resultado.innerHTML = `<p>Media: ${promedio(valores_numericos)}</p>`;
        resultado.innerHTML += "<p>Valores numéricos: " + visualiza(valores_numericos) + "</p>";
    }, false);
}, false);