addEventListener('load', inicio, false);

var nuevaVentana;

function inicio(){

    btn_abrir = document.getElementById("abrir");
    btn_cerrar = document.getElementById("cerrar");

    btn_abrir.addEventListener("click", function(){

        nuevaVentana = window.open("","_blank","width=200, height=30");
    }, false);

    btn_cerrar.addEventListener("click", function(){
        nuevaVentana.close();
    }, false);

}