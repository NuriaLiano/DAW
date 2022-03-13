//preguntar al usuario
var pregunta = prompt("Escribe el primer presidente de la democracia española");

var respuesta = (nombre == "Adolfo") ? "Correcto" : "Error";

do{
    if (confirm("¿Quieres volver a intentarlo?")) {
        var pregunta = prompt("¿Cuál fue el primer presidente de la democracia española?");
        var respuesta = (pregunta == "Adolfo")?"Te falta el apellido" : "Error";
        var respuesta = (pregunta == "Suarez")?"Falta el nombre" : "Error";    
    }
    else{
        document.write("Error");
    }
}while(respuesta == "El resultado es incorrecto");
