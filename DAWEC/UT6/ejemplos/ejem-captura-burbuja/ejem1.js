addEventListener('load', inicio, false);

function inicio (){

    var uno = document.querySelector("div");
    var dos = document.querySelector("span");

    //si se pone false esta en modo bubbling
    //si se pone true esta en modo capture

    //con stoppropagation se para la burbuja


    uno.addEventListener('click', function(e){
        e.stopPropagation();
        alert("se ha ejecutado el div");
    }, false);
    dos.addEventListener('click', function(edos){
        edos.stopPropagation();
        alert("se ha ejecutado el span");
    }, false);
    

}