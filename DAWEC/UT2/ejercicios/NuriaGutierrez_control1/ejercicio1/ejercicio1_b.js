var pregunta = prompt("Introduce un valor entre 1 y 5");

if ((pregunta >= 1 )&&(pregunta <= 5) ){

    document.write("El numero es " + String(pregunta));
    booleano = true;
}else {
    alert("Introduce un numero dentro del rango")
    booleano = false;
    do{
        if (confirm("¿Quieres volver a intentarlo?")) {
            var pregunta = prompt("Introduce un valor entre 1 y 5");
            if ((pregunta >= 1 )&&(pregunta <= 5) ){
                document.write("El numero es " + pregunta);
                booleano = true;
            }else {
                alert("Introduce un numero dentro del rango")
                booleano = false;
            }
        }
        else{
            document.write("Error");
        }
    }while(booleano == true);
}
