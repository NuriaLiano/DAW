addEventListener('load', inicio, false)
var cont = 0;
var suma = 0;

function inicio() {
    //numero de parrafos
    var VerParrafos = document.getElementById("boton1");
    VerParrafos.addEventListener('click', function() {
        var parrafos = document.querySelectorAll("p");
        alert("Número de párrafos: " + parrafos.length);
        /*for (let i = 0; i < parrafos.length; i++) {
            parrafos[i];
            cont++;
        }
        alert("numero de parrafos: " + cont);*/
    }, false);
    //numero de enlaces de cada parrafo
    var VerEnlacesParrafos = document.getElementById("boton2");
    VerEnlacesParrafos.addEventListener('click', function() {

        var parrafos = document.getElementsByTagName("p");
        for (let i = 0; i < parrafos.length; i++) {
            if (parrafos[i].hasChildNodes()) {
                enlacePrimerParrafo = parrafos[i].getElementsByTagName("a");
                alert("Párrafo " + (i + 1) + " tiene " + enlacePrimerParrafo.length + " enlaces");
            } else {
                alert("no tienes parrafos");
            }
        }
    }, false);
    //texto contenido en los enlaces
    var verTexto = document.getElementById("boton3");
    verTexto.addEventListener('click', function() {
        var textoEnlaces = document.querySelectorAll("p a");
        if (textoEnlaces != null) {
            for (let i = 0; i < textoEnlaces.length; i++) {
                alert("Informacion: " + textoEnlaces[i]);
            }
        }
    })

}