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

// Función extrae
function extrae(valores, inicio, fin) {
    // Si metemos mal los valores, los invertimos con destructuring
    if (inicio > fin) {
        [inicio, fin] = [fin, inicio];

    }

    // Devolvemos solo los de un rango determinado
    return valores.filter(function(elemento, indice) {
        if (indice >= inicio && indice <= fin) {
            return elemento;
        }
    });
}

// Función crea_opcion
function crea_opcion() {
    var opcion = document.createElement('option');
    opcion.value = valores.length;
    opcion.innerHTML = valores.length;

    return opcion;
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

        let select_inicio = document.getElementById("inicio");
        select_inicio.appendChild(crea_opcion());

        let select_fin = document.getElementById("fin");
        select_fin.appendChild(crea_opcion());        
    }, false);

    // Evento botón extraer
    btn_media.addEventListener("click", function () {
        let resultado = document.getElementById("resolucion");

        // Obtengo los números solo
        let valores_numericos = valores.filter(Number);

        // Obtengo el valor de inicio y de fin
        let valor_inicio = parseInt(document.getElementById("inicio").value);
        let valor_fin = parseInt(document.getElementById("fin").value);

        resultado.innerHTML = `<p>Media: ${promedio(extrae(valores_numericos, valor_inicio - 1, valor_fin - 1))}</p>`;
        resultado.innerHTML += "<p>Valores numéricos: " + visualiza(extrae(valores_numericos, valor_inicio - 1, valor_fin - 1)) + "</p>";
    }, false);
}, false);