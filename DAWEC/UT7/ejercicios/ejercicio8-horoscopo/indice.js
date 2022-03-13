addEventListener("load", inicio, false);

var lista;
var cod;
var respuesta;
var resultado;


function inicio() {

    lista = document.querySelectorAll("img");
    resultado = document.querySelector("#resultado");

    

    for (let i = 0; i < lista.length; i++) {
        
        lista[i].addEventListener('dblclick',function(){

            cod = parseInt(i+1)

            leerTxt();

        },false);

        lista[i].addEventListener('mouseleave',function(){

            resultado.innerHTML = "";

        },false);
        
    }


}

function leerTxt() {

    var xhr2;
    if (window.XMLHttpRequest) {
        xhr2 = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr2 = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var datos = new FormData();
    datos.append("cod", cod);

    xhr2.open('POST', "horoscopos.php", true);
    xhr2.send(datos);
    xhr2.onreadystatechange = muestracontenido;

    function muestracontenido() {

        if (xhr2.readyState == 4) {
            if (xhr2.status == 200) {

                respuesta = xhr2.responseText;
                resultado.innerHTML = respuesta;
            }
            else {
               alert("Codigo de error " + xhr2.status);
            }
        }
    };
}