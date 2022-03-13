addEventListener('load', inicio, false);

var fecha;


function inicio(){


    fecha = new Date();
    //document.write(fecha.getDate());
    //document.getElementById("fecha1").innerHTML = fecha.toUTCString();
    document.getElementById("fecha1").innerHTML = fecha.getTimezoneOffset();

    //sfecha2 = fecha1.toUTCString();
    //sacar dia mes
    //document.getElementById("fecha2").innerHTML = fecha.getHours() + ':' + fecha.getMinutes() + ':' + fecha.getSeconds();
    document.getElementById("fecha2").innerHTML = fecha.toLocaleTimeString();

    //fecha3 = fecha1.getDay();
    //sacar el dia de la semana
    document.getElementById("fecha3").innerHTML= fecha.toLocaleString('en-US', { hour: 'numeric', hour12: true });

    //sacar solo el mes | se suma uno por que enero es 0
    //document.getElementById("fecha4").innerHTML= fecha.getMonth()+1;

    //sacar solo el año
    //document.getElementById("fecha5").innerHTML= fecha.getFullYear();

    //sacar fecha con /
    //document.getElementById("fecha6").innerHTML= fecha.toLocaleDateString();

    //sacar nombre del dia de la semana
    //document.getElementById("fecha7").innerHTML= getNombreDias(fecha.getDay()) + " " +fecha.toLocaleDateString();

    //nombre del dia de la semana y nombre del mes
    //document.getElementById("fecha8").innerHTML= getNombreMes(fecha.getMonth()) + " " +fecha.toLocaleDateString();
    //document.getElementById("fecha8").innerHTML= fecha3;

    

}
