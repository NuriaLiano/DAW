addEventListener('load', inicio, false);

var num1;
var num2;
var num3;
var num4;
var resultado;
var boton;
function inicio() {
    num1 = document.getElementById("num1");
    num2 = document.getElementById("num2");
    num3 = document.getElementById("num3");
    num4 = document.getElementById("num4");
    resultado = document.getElementById("resultado");
    boton = document.getElementById("boton");
    boton.addEventListener('click',escribir,false);

}
function escribir() {
    resultado.value = parseInt(num1.value) + parseInt(num2.value) + parseInt(num3.value) + parseInt(num4.value);
    
}
alert(escribir());