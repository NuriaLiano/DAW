addEventListener('load', inicio, false)
var imagen;
var imagenes;
var contador = 0;
var idFoto, padre;

function inicio() {
    //extraigo todas las imagenes con query
    imagenes = document.querySelectorAll("img");
    //extraigo el boton borrado total
    var bTotal = document.getElementById("borradoTotal");
    bTotal.addEventListener('click', borrarTodo, false);
    //borrado lento
    var bLento = document.getElementById("borradoLento");
    bLento.addEventListener('click', function() {
        imagen = document.querySelector("img");
        imagen.parentNode.removeChild(imagen);
        contador++;
        if (contador == 5) {
            var seccion = document.querySelector("section");
            var p = document.createElement("p");
            var texto = document.createTextNode("Ya están eliminadas todas las imagenes");
            p.appendChild(texto);
            seccion.appendChild(p);
            document.body.appendChild(seccion);
        }
    }, false);
    //borrado por nombre

    var borradoNombre = document.getElementById("borradoNombre");
    borradoNombre.addEventListener("click", () => {
        eliminarElemento(document.getElementById('elemento').value);
    }, false)
}

function borrarTodo() {
    for (let i = 0; i < imagenes.length; i++) {
        imagenes[i].src = '';
    }
    var p = document.createElement("p");
    var texto = document.createTextNode("Borrado total realizado con exito");
    p.appendChild(texto);
    document.body.appendChild(p);
}

function eliminarElemento(id) {
    idFoto = document.getElementById(id);
    if (!idFoto) {
        var seccion = document.querySelector("section");
        var p = document.createElement("article");
        var texto = document.createTextNode("Esa imagen no está en el catálogo");
        p.appendChild(texto);
        seccion.appendChild(p);
        document.body.appendChild(seccion);
    } else {
        idFoto.parentNode.removeChild(idFoto);
    }
}