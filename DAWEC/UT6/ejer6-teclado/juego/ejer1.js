addEventListener('load', inicio, false);

 
var messibalon;
var cont = 0;
function inicio (){
    messibalon = document.querySelector("img");
   // var porteria = document.querySelector("#porteria");

    
    document.addEventListener('keypress', mover, false);
}
function mover(e){
    
    messibalon.style.left = (cont+=10) + "px"
}

