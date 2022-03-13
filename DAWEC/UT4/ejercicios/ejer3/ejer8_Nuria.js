addEventListener('load', inicio, false);

//Array
var arrayColores = ["azul", "amarillo", "rojo", "verde", "cafe", "rosa"];
var opcion;

function inicio() {
    
    //extraer datos del prompt
    opcion = prompt("Introduce el color");

    //buscar si está dentro del array
    if (arrayColores.find(color => color == opcion)) {
        
        alert("Está en el array");
    }else{
        alert("No está en el array")
    }
}



