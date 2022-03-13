addEventListener('load', inicio, false);

//variables y arrays
var arrayCrear = [];

function inicio() {
    botonCargar = document.getElementById("mostrar");
    botonCargar.addEventListener('click', function () {
        divididos();
        raizCuadrada();
    }, false);

    //cargar el array con 20 numeros
    for (let i = 1; i <= 20 ; i++) {
        arrayCrear.push(i);
    }
    document.getElementById("resultado").innerHTML = arrayCrear;
    return arrayCrear;
}



function divididos() {
    var arrayTemporal= [];
    for (let i = 0; i < arrayCrear.length; i++) {
        if (arrayCrear[i] %7 == 0) {
            arrayTemporal.push(arrayCrear[i]);
        }
    }

    //mostrar los datos introducidos
    document.getElementById("divididos").innerHTML = arrayTemporal;
}

function raizCuadrada() {
    //imprime la raiz cuadrada de cada elemento del array
    document.getElementById("raiz").innerHTML = arrayCrear.map(Math.sqrt);
}