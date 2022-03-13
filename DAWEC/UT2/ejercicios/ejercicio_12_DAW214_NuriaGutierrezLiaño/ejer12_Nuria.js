var pregunta = prompt("¿Cúanto vale 15 + 15?");

var respuesta = (pregunta == 30)?"El resultado es correcto":"El resultado es incorrecto";

if (respuesta == "El resultado es incorrecto") {
    do{
        if (confirm("¿Quieres volver a intentarlo?")) {
            var pregunta = prompt("¿Cúanto vale 15 + 15?");
            var respuesta = (pregunta == 30)?"El resultado es correcto":"El resultado es incorrecto";
            
        }
        else{
            document.write("Error");
        }
    }while(respuesta == "El resultado es incorrecto");
}
document.write(respuesta);