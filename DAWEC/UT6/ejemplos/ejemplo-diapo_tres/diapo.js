addEventListener('load', inicio, false);

function inicio (){

    var cambiarP = document.querySelector("p.normal");
    

    cambiarP.addEventListener('mouseout',function(){
        cambiarP.className = 'normal';
    },false);

    cambiarP.addEventListener('mouseover',function(){
        cambiarP.className = 'recuadro';
    },false);
}
