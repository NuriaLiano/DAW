addEventListener('click', inicio, false);


function inicio (){

    var btn = document.querySelector("input");

    btn.addEventListener('click', function(){
        var nuevoP = document.createElement("p");
        var texto = document.createTextNode("Comentario cuatro");
        nuevoP.appendChild(texto);
        document.body.appendChild(nuevoP);
    }, false);
}