addEventListener("load", inicio, false);

var contador = 0;
var contadorCirculos = 0;
var cir;

function inicio() {

    document.addEventListener('click', function(){
        if(contador == 1){
            clearInterval(cir);
            alert("Número de circulos: "+contadorCirculos);
        }else{
            cir = setInterval(crear, 100);
        }
        contador = 1;
    }, false);

}

function crear() {

    let newDiv = document.createElement("div");

    newDiv.style.background = "rgb("+Math.floor((Math.random() * 255 - 0))  +","+ Math.floor((Math.random() * 255 - 0)) +","+Math.floor((Math.random() * 255 - 0)) +")";

    let w = Math.random() * 120 + 10;

    newDiv.style.borderRadius = "50%";
    newDiv.style.position = "absolute"

    //newDiv.style.border = "2px solid black"

    newDiv.style.width = w + "px";
    newDiv.style.height = w + "px";
    newDiv.style.top = (Math.random() * window.innerHeight - w) + "px";
    newDiv.style.left = (Math.random() * window.innerWidth - w) + "px";

    document.body.appendChild(newDiv);

    contadorCirculos++;

}