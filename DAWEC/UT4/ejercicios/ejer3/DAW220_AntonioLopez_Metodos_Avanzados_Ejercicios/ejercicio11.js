var valores = [];

// Función visualiza
function visualiza(valores) {
    return '[' + valores.join(', ') + ']';
}

// Función extremo
function extremo(valores) {
    // Hacemos una copia del array
    let ordenados = valores.slice();

    // Ordenamos de menor a mayor
    ordenados.sort(function (a, b) {
        return a - b;
    });

    // Obtenemos los valores con destructuring
    [menor, mayor] = [ordenados.pop(), ordenados.shift()];
    
    return [mayor, menor];
}

// Evento de carga
addEventListener("load", function () {
    let btn_guardar = document.getElementById("guardar");
    let btn_extremo = document.getElementById("extremo");

    // Evento botón guardar
    btn_guardar.addEventListener("click", function () {
        let caja_texto = document.getElementById("caja_texto");
        valores.push(caja_texto.value);
        caja_texto.value = "";
    }, false);

    // Evento botón extraer
    btn_extremo.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");

        // Obtengo los números solo
        let valores_numericos = valores.filter(Number);

        // Mostramos el resultado con template string
        resultado.innerHTML = `<p>Valores numéricos: ${visualiza(valores_numericos)}</p>`;
        resultado.innerHTML += `<p>Menor: ${extremo(valores_numericos)[0]}</p>`;
        resultado.innerHTML += `<p>Mayor: ${extremo(valores_numericos)[1]}</p>`;
    }, false);
}, false);