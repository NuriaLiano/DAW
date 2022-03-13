
addEventListener('load',inicio,false);
var num1;
var botonSiguiente;
var botonTotal;
var resultado;
var contador;
var iterador=0;


function inicio(){

num = document.getElementById("inpNum");
botonTotal = document.getElementById("inpBtnTotal");
botonSiguiente = document.getElementById("inpBtn");
resultado = document.getElementById("textNumeros");
resultadoTotal = document.getElementById("contador");
botonSiguiente.addEventListener('click',otroNum,false);
botonTotal.addEventListener('click',total,false);
}


function otroNum(){

var numero=parseInt(num);
resultado.value+=num.value+" ";
num.value="";
iterador++;
}

function total(){
    /**si no metes un numero en la suma total sale que si le has metido */
    resultadoTotal.innerHTML="El número de valores que has introducido es: "+iterador;

}