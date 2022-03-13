addEventListener('load', inicio, false);

//crear array
var arrayIncremento = [1,2,3,4,5];

function inicio() {
    boton = document.getElementById("cargar");
    boton.addEventListener('click', incremento, false);

    document.getElementById("resultado").innerHTML = arrayIncremento;
}

function incremento() {
    var arrayDuplicar = arrayIncremento.map(function(numero){
        return numero + 1; 
   })
    document.getElementById("incremento").innerHTML = arrayDuplicar;

    
}