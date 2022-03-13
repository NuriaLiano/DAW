var valores = [];
var cadena = "";

// Función visualiza
function visualiza(valores) {
    return "[" + valores.join(", ") + "]";
}

// Función genera_alfabeto
function genera_alfabeto() {
    let letrasUnicode = Array.from(Array(26)).map((elemento, indice) => indice + 65);
    let letras = letrasUnicode.map((letra) => String.fromCharCode(letra));

    return letras;
}

// Función inserta
function inserta(posicion) {
    if (posicion >= 0 && posicion <= 25) {
        cadena += valores[posicion];
    } else {
        alert("Error, inserte otro número");
    }
}

// Evento de carga
addEventListener("load", function () {
    // Generamos el alfabeto
    valores = genera_alfabeto();

    let btn_guardar = document.getElementById("guardar");

    // Evento botón guardar
    btn_guardar.addEventListener("click", function () {
        let caja_texto = document.getElementById("caja_texto");
        let valor = caja_texto.value;

        if (valor == "-1") {
            alert(`Fin, cadena resultante: ${cadena}`);
            cadena = "";
        }
        else {
            inserta(parseInt(valor));
        }

        caja_texto.value = "";
    }, false);
}, false);