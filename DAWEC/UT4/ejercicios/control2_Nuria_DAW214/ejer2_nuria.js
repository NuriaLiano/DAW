addEventListener('load', inicio, false);

//variables y arrays
var misterio = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];
var arraySinNumeros, input_resultado, input_resultado_Numeros, input_resultado_Letras;
function inicio() {
    input_resultado = document.getElementById("resultado");
    input_resultado_Numeros = document.getElementById("numeros");
    input_resultado_Letras = document.getElementById("letras");

    botonCargar = document.getElementById("mostrar");
    botonCargar.addEventListener('click', function () {
        numeroClave();
        palabraClave();
        input_resultado.value = misterio;
        

    }, false);
    
}

function numeroClave() {

    input_resultado_Numeros.value = misterio.filter(Number);

}

function palabraClave(){

    input_resultado_Letras.value = misterio.filter(function (elemento) {
        return typeof(elemento) == 'string';
    });
}