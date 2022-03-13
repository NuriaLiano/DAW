var valores = [];

// Función visualiza
function visualiza(valores) {
    return "[" + valores.join(", ") + "]";
}

// Función par_impar
function par_impar(valores) {
    [pares, impares] = [
        valores.filter((elemento) => elemento % 2 == 0),
        valores.filter((elemento) => elemento % 2 == 1)
    ];

    return [pares, impares];
}

// Evento de carga
addEventListener("load", function () {
    let btn_guardar = document.getElementById("guardar");
    let btn_paridad = document.getElementById("paridad");

    // Evento botón guardar
    btn_guardar.addEventListener("click", function () {
        let caja_texto = document.getElementById("caja_texto");
        valores.push(caja_texto.value);
        caja_texto.value = "";
    }, false);

    // Evento botón paridad
    btn_paridad.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");

        // Obtengo los números solo y llamo a la función
        let valores_numericos = valores.filter(Number);
        let paridad = par_impar(valores_numericos);

        resultado.innerHTML = `<p>Original: ${visualiza(valores_numericos)}</p>`;
        resultado.innerHTML += `<p>Pares: ${visualiza(paridad[0])} </p>`;
        resultado.innerHTML += `<p>Impares: ${visualiza(paridad[1])} </p>`;
    }, false);
}, false);