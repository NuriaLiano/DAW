var pregunta = prompt("Introduce el sueldo entre 100 y 500");
var contadortotal = 0;
var contadorsegundo = 0;
var sueldos;


for (let i = 1; i <= 5; i++) {
    if ((pregunta >= 100) && (pregunta <= 500) ){
        contadortotal++;
        sueldos += pregunta;
        if (pregunta > 300) {
            contadorsegundo++;
        }
    }else{
        alert("Introduce un numero dentro del rango")
        booleano = false;
    do{
        if (confirm("¿Quieres volver a intentarlo?")) {
            var pregunta = prompt("Introduce un valor entre 100 y 500");
            if ((pregunta >= 100)&&(pregunta <= 500) ){
                contadortotal++;
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
    
}

alert("Los trabajadores que cobran entre 100 y 500 son " + contadortotal +
    "Los trabajadores que cobran más de 300 son " + contadorsegundo +
    "El gasto total de la empresa en sueldos es " + sueldos);
