addEventListener('load', inicio, false);

//variables y arrays
var arrayAleatorio = [];
var aleatorio, contador = 0, uno, dos = 0, tres = 0, cuatro = 0, cinco = 0, seis = 0;
var mayor, menor;


function inicio() {

    //inputs para imprimir
    resultado_aleatorio = document.getElementById("aleatorio");
    resultado_numeros = document.getElementById("numeros");
    resultado_tiradas = document.getElementById("tiradas");
    resultado_mayor = document.getElementById("mayor");
    resultado_menor = document.getElementById("menor");

    contador_uno = document.getElementById("uno");
    contador_dos = document.getElementById("dos");
    contador_tres = document.getElementById("tres");
    contador_cuatro = document.getElementById("cuatro");
    contador_cinco = document.getElementById("cinco");
    contador_seis = document.getElementById("seis");

    //recoger botones
    botonTirar = document.getElementById("tirar");
    botonVer = document.getElementById("ver");
    botonEstadisticas = document.getElementById("estadisticas")

    //eventos a los botones
    botonTirar.addEventListener('click', function () {
        visual(arrayAleatorio);
    }, false);
    botonVer.addEventListener('click', function () {
        
        //imprimir resultado del array en el input y separado por guiones
        resultado_numeros.value = arrayAleatorio.join(" - ");   

    }, false);
    botonEstadisticas.addEventListener('click', function () {
        resultado_tiradas.value = contador;
        visual_estadistica();
    }, false);
    
    
    
}

function tirada() {
    //devuelve el numero que sale al azar
    //numero aleatorio entre 1 y 6 sin decimales
    aleatorio = Math.round(Math.random()* (6 - 1) + 1);

    //generar un array con los numeros que van saliendo
    arrayAleatorio.push(aleatorio);

    //impirmir en el input
    resultado_aleatorio.value = aleatorio;

    //contador para calcular las veces que se tira
    contador++;

    //lo que devuelve la funcion
    return aleatorio;
    //alert(aleatorio);
}

function visual(arrayAleatorio) {
    //visualiza el array en caja y en el formato correcto
    //llamar a la funcion anterior
    tirada();

    //imprimir resultado del array en el input y separado por guiones
    //resultado_numeros.value = arrayAleatorio.join(" - ");

    //alert(contador);

}

function informe(arrayAleatorio) {
    //calcula las veces que sale cada numero y lo devuelve junto al que mas y menos sale
    
    /*arrayAleatorio.forEach(num => {
        arrayAleatorio.indexOf(1);
        uno++;
    });
    arrayAleatorio.forEach(num => {
        arrayAleatorio.indexOf(3);
        tres++;
    });
    arrayAleatorio.forEach(num => {
        arrayAleatorio.indexOf(4);
        cuatro++;
    });
    arrayAleatorio.forEach(num => {
        arrayAleatorio.indexOf(6);
        seis++;
        
    });

    alert(uno);
    alert(tres);
    alert(cuatro);
    alert(seis);*/


    //cuenta los numeros
    for (let i = 0; i < arrayAleatorio.length; i++) {
        if (arrayAleatorio.includes(1) == true) {
            uno++;
        }
        if (arrayAleatorio.includes(2) == true) {
            dos++;
        }
        if (arrayAleatorio.includes(3) == true){
            tres++;
        }
        if (arrayAleatorio.includes(4) == true){
            cuatro++;
        }
        if (arrayAleatorio.includes(5) == true){
            cinco++;
        }
        if (arrayAleatorio.includes(6) == true){
            seis++;
        }
    }

    //calcula el que mas veces sale
    if ((uno>dos)&&(uno>tres)&&(uno>cuatro)&&(uno>cinco)&&(uno>seis)) {
        resultado_mayor.value = uno;
    }
    if ((dos<uno)&&(dos>tres)&&(dos>cuatro)&&(dos>cinco)&&(dos>seis)) {
        resultado_mayor.value = uno;
    }
    if ((tres<uno)&&(tres<dos)&&(tres>cuatro)&&(tres>cinco)&&(tres>seis)) {
        resultado_mayor.value = uno;
    }
    if ((cuatro<uno)&&(cuatro<dos)&&(cuatro<tres)&&(cuatro>cinco)&&(cuatro>seis)) {
        resultado_mayor.value = uno;
    }
    if ((cuatro<uno)&&(cuatro<dos)&&(cuatro<tres)&&(cuatro>cinco)&&(cuatro>seis)) {
        resultado_mayor.value = uno;
    }
    
    //calcula el que menos veces sale

    

}

function visual_estadistica() {
    //recibe la informacion y lo visualiza como en el ejemplo
    informe(arrayAleatorio);

    contador_uno.value = informe(arrayAleatorio.uno);
    contador_tres.value = informe(arrayAleatorio.tres);
    contador_seis.value = informe(arrayAleatorio.seis);

}




function raizCuadrada() {
    arrayCrear.sort();
    let arrayMenores = arrayCrear.filter(function (num) {
        return num < 10;
    });

    document.getElementById("menores").innerHTML =arrayMenores
    //imprime la raiz cuadrada de cada elemento del array
    document.getElementById("raiz").innerHTML = arrayMenores.map(Math.sqrt);
}