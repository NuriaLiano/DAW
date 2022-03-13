var valores = [];

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Evento de carga
addEventListener("load", function () {
    let btn_guardar = document.getElementById("guardar");
    let btn_extraer = document.getElementById("extraer");

    // Evento botón guardar
    btn_guardar.addEventListener("click", function () {
        let caja_texto = document.getElementById("caja_texto");
        valores.push(caja_texto.value);
        caja_texto.value = "";
    }, false);

    // Evento botón extraer
    btn_extraer.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");
        resultado.innerHTML = "<p>Array: " + visualiza(valores.filter(Number)) + "</p>";
    }, false);
}, false);