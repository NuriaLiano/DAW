addEventListener('load', inicio, false);

//variables y arrays
var arrayCrear = [2,4,6,8,10,12,13,14,18,20,30];

function inicio() {
    botonCargar = document.getElementById("mostrar");
    botonCargar.addEventListener('click', function () {
        raizCuadrada();
    }, false);

    
    document.getElementById("resultado").innerHTML = arrayCrear;
    
}

function raizCuadrada() {
    arrayCrear.sort();
    let arrayMenores = arrayCrear.filter(function (num) {
        return num < 10;
    });

    document.getElementById("menores").innerHTML =arrayMenores
    //imprime la raiz cuadrada de cada elemento del array
    document.getElementById("raiz").innerHTML = arrayMenores.map(Math.sqrt);
}