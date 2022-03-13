addEventListener('load', inicio, false);

var botonCargarArray, entradaTexto;
var cantidad, posicion;
var arrayCopia = new Array()
var arrayCopiado = [];

function inicio() {

    //botones e inputs 
    entradaTexto = document.getElementById("entradaTexto");
    cantidad = document.getElementById("entradaCambiarCan");
    posicion = document.getElementById("entradaCambiarPos");



    botonCargarArray = document.getElementById("copiar");
    botonCargarArray.addEventListener('click', copia, false);

    botonCambiarArray = document.getElementById("cambiar");
    botonCambiarArray.addEventListener('click', function () {
        cambiar(arrayCopiado,cantidad,posicion);
    }, false);

    botonVisualizaArray = document.getElementById("visualiza");
    botonVisualizaArray.addEventListener('click', function () {
        visualiza(arrayCopiado);
    }, false);

}


function copia(arrayCopia) {
    //cargamos el array
    let num = document.getElementById("entradaTexto").value;
    arrayCopia = num.split(",").map(Number);

    //copiamos el array original en una variable copia
    arrayCopiado = arrayCopia.slice();
    //alert(arrayCopiado);

    return arrayCopiado;
}

function cambiar(arrayCopiado, cantidad, posicion) {
    //recibe el array copiado de la funcion anterior
    
    //alert(arrayCopiado.fill("0",posicion, cantidad));
    document.getElementById("resultadoCambiar").innerHTML = arrayCopiado.fill(0,posicion.value,cantidad.value);
    
    
}
function visualiza(arrayCopiado) {
    //usar join
    //alert(arrayCopiado.join(" - "));
    document.getElementById("resultadoVisualizar").innerHTML = arrayCopiado.join(" - ");

}

