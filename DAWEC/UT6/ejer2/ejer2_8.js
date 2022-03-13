addEventListener('load', inicio, false)
var arrayDatos = new Array();
var entradaDatos;


function inicio() {
    //entrada de datos
    entradaDatos = document.querySelector("#entradaTexto");
    //boton
    var btnCargar = document.querySelector("#boton");
    btnCargar.addEventListener('click', function() {
        arrayDatos.push(entradaDatos.value);
        entradaDatos.value = "";
        alert(arrayDatos);
    }, false);

    var btnVer = document.querySelector("#ver");
    btnVer.addEventListener('click', function() {
        //crea section con select
        var seccion = document.createElement("section");
        var p = document.createElement("select");
        for (let j = 0; j < arrayDatos.length; j++) {
            var o = document.createElement("option");
            var texto = document.createTextNode(arrayDatos[j]);
            seccion.appendChild(p);
            p.appendChild(o);
            o.appendChild(texto);
        }
        document.body.appendChild(seccion);
        //crea section con lista
        var seccion1 = document.createElement("section");
        var ul1 = document.createElement("ul");
        for (let i = 0; i < arrayDatos.length; i++) {
            var li1 = document.createElement("li");
            var texto1 = document.createTextNode(arrayDatos[i]);
            seccion1.appendChild(ul1);
            ul1.appendChild(li1);
            li1.appendChild(texto1);
        }
        document.body.appendChild(seccion1);
        //borrar todos los elementos de la lista
        var btnBorrar = document.querySelector("#borrarLista");
        btnBorrar.addEventListener('click', function() {
            var lista = document.querySelectorAll("li");
            for (let k = 0; k < lista.length; k++) {
                lista[k].parentNode.removeChild(lista[k]);
            }
        }, false);

    }, false);

}