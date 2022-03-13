addEventListener('load', inicio, false)
var arrayDatos = new Array();
var entradaDatos;
var lista = document.querySelectorAll("li");
var p = document.createElement("select");

function inicio() {
    //entrada de datos
    entradaDatos = document.querySelector("#entradaTexto");
    //boton
    var botonCargar = document.querySelector("#boton");
    botonCargar.addEventListener('click', function() {
        arrayDatos.push(entradaDatos.value);
        entradaDatos.value = "";
        alert(arrayDatos);
    }, false);

    var botonVer = document.querySelector("#ver");
    botonVer.addEventListener('click', function() {
        //crea section con select
        var seccion = document.createElement("section");

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
        var botonBorrar = document.querySelector("#borrarLista");
        botonBorrar.addEventListener('click', function() {
            var lista = document.querySelectorAll("li");
            for (let k = 0; k < lista.length; k++) {
                lista[k].parentNode.removeChild(lista[k]);
            }
        }, false);

    }, false);

    //insertar al final de la lista
    var botonLista = document.querySelector("#insertarLista");
    botonLista.addEventListener('click', function() {
        var ultimoElemento = document.createElement("li");
        var listaFinal = document.querySelector("ul");
        ultimoElemento.textContent = entradaDatos.value;
        listaFinal.appendChild(ultimoElemento);
    }, false);

    //Insertar antes de uno que hayamos elegido.
    var botonInsertar = document.querySelector("#insertar");
    botonInsertar.addEventListener('click', function() {
        var elementosLista = document.querySelector("ul").childNodes;
        var opcion = p.selectedIndex;

        var nuevoLi = document.createElement("li");
        nuevoLi.textContent = entradaDatos.value;

        document.querySelector("ul").insertBefore(nuevoLi, elementosLista[opcion]);

    }, false);
}