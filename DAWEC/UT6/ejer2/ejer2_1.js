addEventListener('load', inicio, false);

function inicio (){
    var contador = 0;
    var nodo = document.documentElement;
    var btn = document.querySelector("input");

    btn.addEventListener('click', function(){
        var nuevoP = document.createElement("p");
        nuevoP.setAttribute("id", "fila");
        var nuevoTexto = document.createTextNode("contenido" + contador++);
        
        nuevoP.appendChild(nuevoTexto);
        document.body.appendChild(nuevoP);

    }, false);
}
