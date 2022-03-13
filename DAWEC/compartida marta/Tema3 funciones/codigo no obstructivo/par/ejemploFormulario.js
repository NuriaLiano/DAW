
addEventListener('load',inicio,false);
var numero;
var boton;
var resultado;


function inicio(){

numero = document.getElementById("inpNum");
boton = document.getElementById("inpBtn");
resultado = document.getElementById("inpResult");
boton.addEventListener('click',escribir,false);
}


function saberSiEsPar(num) {

    let par;

    if (num % 2 == 0) {
        par = true;
    } else {
        par = false;
    }

    return par;
}

function escribir() {

    if (saberSiEsPar(numero.value)) {
        resultado.value="Es par";
 
     } else {
         resultado.value="Es impar";
     }
}




