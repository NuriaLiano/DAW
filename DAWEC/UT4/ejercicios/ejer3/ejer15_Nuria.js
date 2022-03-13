addEventListener('load', inicio, false);

//variables y arrays
var numeros = [];

function inicio() {
    botonCargar = document.getElementById("mostrar");
    botonCargar.addEventListener('click', function () {
        paresImpares();
    }, false);

    //rellenar array numeros
    for (let i = 1; i <= 20; i++) {
        numeros.push(i);
    }
}

function paresImpares() {
    document.getElementById("original").innerHTML = numeros;
    document.getElementById("pares").innerHTML = numeros.filter((elemento) => elemento % 2 == 0);
    document.getElementById("impares").innerHTML = numeros.filter((elemento) => elemento % 2 == 1);
}