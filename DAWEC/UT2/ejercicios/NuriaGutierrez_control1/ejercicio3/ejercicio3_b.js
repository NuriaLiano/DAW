var pregunta = prompt("Introduce el sueldo entre 100 y 500");
var contadortotal = 0;
var contadorsegundo = 0;
var sueldos;


    switch(pregunta){
        case 100:
            contadortotal++;
            sueldos += 100;
            break;
        case 200:
            contadortotal++;
            sueldos += 100;
            break;
        case 300:
            contadortotal++;
            sueldos += 100;
            break;
        case 400:
            contadortotal++;
            sueldos += 100;
            break;
        case 500:
            contadortotal++;
            sueldos += 100;
            break;
        default:
            alert("Introduce el valor correcto");
    }
    alert("Los trabajadores que cobran entre 100 y 500 son " + contadortotal +
    "Los trabajadores que cobran más de 300 son " + contadorsegundo +
    "El gasto total de la empresa en sueldos es " + sueldos);


