// Función visualiza
function visualiza(valores) {
    return valores.join("");
}

// Función extrae_numeros
function extrae_numeros(valores) {
    return valores.filter(Number);
}

// Función extrae_letras
function extrae_cadenas(valores) {
    return valores.filter(function (elemento) {
        return typeof(elemento) == 'string';
    });
}

// Evento de carga
addEventListener("load", function () {
    var misterio = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 6, "r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 3, "r", 2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5
        , 7, "i", 4, "a", 5, 2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3, 1, 5, 3, 2, "l", 3, "a", 4, "v", 5, "e", 6];
    let btn_operaciones = document.getElementById("operaciones");

    // Evento botón extraer
    btn_operaciones.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");

        // Llamamos a las funciones
        let clave_numerica = extrae_numeros(misterio);
        let clave_cadena = extrae_cadenas(misterio);

        // Mostramos el resultado con template string
        resultado.innerHTML = `<p>Misterio: ${visualiza(misterio)}</p>`;
        resultado.innerHTML += `<p>Cadena clave: ${visualiza(clave_cadena)}</p>`;
        resultado.innerHTML += `<p>Cifra clave: ${visualiza(clave_numerica)}</p>`;
    }, false);
}, false);