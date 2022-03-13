addEventListener('load', inicio, false);

//variables y arrays
var numeros = [];
var caracteres = [];
var cadena = "";

function inicio() {
    botonCargar = document.getElementById("mostrar");
    botonCargar.addEventListener('click', function () {
        paresImpares();
        letras();
    }, false);

    //rellenar array numeros
    for (let i = 1; i <= 20; i++) {
        numeros.push(i);
    }
    return numeros;

}

function paresImpares() {
    
    document.getElementById("pares").innerHTML = numeros.filter((elemento) => elemento % 2 == 0);
    document.getElementById("impares").innerHTML = numeros.filter((elemento) => elemento % 2 == 1);
}

function letras() {
        var numero = document.getElementById("recoger").value;
        if (numero == 0) {
            cadena += "A";
        }else if(numero == 5){
            cadena += "F";
        }else if(numero == 25){
            cadena += "Z";
        }else if(numero == -1){
            document.getElementById("caracteres").innerHTML = cadena;
        }
         
    

}
