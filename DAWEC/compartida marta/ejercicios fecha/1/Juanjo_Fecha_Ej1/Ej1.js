addEventListener('load',inicio,false);

var arrayDias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"]

var arrayMeses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
"Agosto","Septiembre","Octubre","Noviembre","Diciembre"]

var cogerInputs;
var fecha;

function inicio(){

    cogerInputs = document.getElementsByTagName("input")

    fecha =  new Date()

    cogerInputs[0].value = fecha;
    cogerInputs[1].value = fecha.getDate();
    cogerInputs[2].value = fecha.getDay();
    cogerInputs[3].value = fecha.getMonth() + 1;
    cogerInputs[4].value = fecha.getFullYear();
    cogerInputs[5].value =  fecha.toLocaleDateString()
    cogerInputs[6].value = arrayDias[fecha.getDay()-1] +" "+ fecha.toLocaleDateString()
    cogerInputs[7].value = arrayDias[fecha.getDay()-1] +", "+ fecha.getDate() +" de " + (arrayMeses[fecha.getMonth()])+" de "+ fecha.getFullYear();

    
}