addEventListener('load', inicio, false);
function inicio(){

    var btn = document.querySelector("#btn");

    btn.addEventListener('click', function(){
        var nodoA = document.createElement("a");
        document.body.appendChild(nodoA);
        nodoA.setAttribute("href", "www.nuria.es");

        //insertar texto al enlace para verle en pantalla
        nodoA.innerHTML="el mejor enlace";

    }, false);



}