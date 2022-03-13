var valores = [];

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Función dos_decimales
function dos_decimales(valores) {
    return valores.map(function (elemento) {
        return elemento.toFixed(2);
    });
}

// Función genera_array
function genera_array() {
    let numeros = [];

    for (let contador = 1; contador <= 20; contador++) {
        numeros.push(contador);
    }

    return numeros;
}

// Función divisores_de_7
function divisores_de_7(numeros) {
    return numeros.filter(numero => numero % 7 == 0);
}

// Función raices
function raices_cuadradas(numeros) {
    return numeros.map(function (numero) {
        return Math.sqrt(numero);
    });
}

// Evento de carga
addEventListener("load", function () {
    let btn_operaciones = document.getElementById("operaciones");

    // Evento botón extraer
    btn_operaciones.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");

        // Inicializamos el array valores()
        valores = genera_array();

        // Llamamos a las funciones
        let divisores = divisores_de_7(valores);
        let raices = raices_cuadradas(valores);

        // Mostramos el resultado con template string
        resultado.innerHTML = `<p>Valores numéricos: ${visualiza(valores)}</p>`;
        resultado.innerHTML += `<p>Divisores de 7: ${visualiza(divisores)}</p>`;
        resultado.innerHTML += `<p>Raíces cuadradas: ${visualiza(dos_decimales(raices))}</p>`;
    }, false);
}, false);