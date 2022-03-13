addEventListener('load', inicio, false);

var fecha; 
function inicio (){

    fecha = new Date();
    
    var fechaEntrada = document.getElementById("entrada");
    var fecha1 = new Date(fechaEntrada.value);
    var fechaSalida = document.getElementById("salida");
    var fecha2 = new Date(fechaSalida.value);
    var boton = document.getElementById("boton");
    boton.addEventListener('click', function(){
        
        tempo = setInterval(dias(fecha1, fecha2), 5000);
        clearInterval(tempo); 
        barra();
    }, false);
    
    

}
function dias (fechaEntrada, fechaSalida){
    //sacar dias fecha dias
    var diasEntrada = fechaEntrada.getDate();
    var diasSalida = fechaSalida.getDate();
    //var diasHoy = fecha.getDate();
    var diasEstancia = fechaSalida.getDate() - fechaEntrada.getDate();
    var faltanDias = fechaEntrada.getDate() - fecha.getDate();

    let texto = "Dias de estancia: " + diasEstancia + " Dias que faltan " + faltanDias + " fecha actual: " + fecha.toLocaleString() + " fecha llegada: " + fechaEntrada.toLocaleString() + " fecha salida: " + fechaSalida.toLocaleString();
    nuevaVentana = window.open("","_blank","width=500, height=500, top=50px, left=50px");
    nuevaVentana.document.write(texto);
    

}

function barra (){
    //intervalo para mostrar la progress bar
    if (i = 0) {
        i = 1;
        var barra = document.getElementById("barra");
        var width = 1;
        var id = setInterval(function(){
            if (width >= 100) {
                clearInterval(id);
                i = 0;
            }else{
                tamano++;
                barra.style.width = width + "%";
            }
        }, 10);
    }
}
