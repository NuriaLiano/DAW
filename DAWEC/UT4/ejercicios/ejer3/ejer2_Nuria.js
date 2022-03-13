addEventListener('load', inicio, false);

var botonRellenar;
var arrayRelleno = [];

function inicio() {

    botonRellenar = document.getElementById("rellenar");
    botonRellenar.addEventListener('click', rellenar, false);

    botonDuplicar = document.getElementById("duplicado");
    botonDuplicar.addEventListener('click', function(){
        multi(arrayRelleno);
    }, false);

}

function rellenar() {
    for (let i = 2; i <= 10; i+=2) {
        //console.log(i);
        arrayRelleno.push(i);
    }
    document.getElementById("resultado").innerHTML = arrayRelleno;

    return arrayRelleno;
    
}

function multi(arrayRelleno) {
    //multiplicar valores de los arrays
    var arrayDuplicar = arrayRelleno.map(function(numero){
         return numero * 2; 
    })
    
    document.getElementById("resultadoDuplicado").innerHTML = arrayDuplicar;

}
