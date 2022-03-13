addEventListener('load',inicio,false);
var numero1;
var numero2;
var numero3;
var numero4;
var boton;
var informacion;
var suma;

function inicio(){
    numero1=document.getElementById('num1');
    numero2=document.getElementById('num2');
    numero3=document.getElementById('num3');
    numero4=document.getElementById('num4');
    informacion=document.getElementById('informacion');
    boton=document.getElementById('boton');
    boton.addEventListener('click',pulsar,false);
}

function pulsar(){
    suma=(parseInt(numero1.value)+parseInt(numero2.value)+parseInt(numero3.value)+parseInt(numero4.value));
    informacion.value="La suma de los numeros es " + suma;   
}