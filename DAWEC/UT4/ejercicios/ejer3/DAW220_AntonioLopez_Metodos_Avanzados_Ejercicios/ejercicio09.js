var valores = [];

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Función convertir
function convertir(cadena, separador) {
    return cadena.split(separador);
}

// Evento de carga
addEventListener("load", function () {
    let btn_convertir = document.getElementById("convertir");

    // Evento botón convertir
    btn_convertir.addEventListener("click", function () {
        let caja_texto = document.getElementById("caja_texto");
        
        valores = convertir(caja_texto.value, ",");
        caja_texto.value = "";
        
        let resultado = document.getElementById("resolucion");
        resultado.innerHTML = `Array: ${visualiza(valores)}`;
    }, false);
}, false);