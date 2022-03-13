addEventListener('load', inicio, false);

//variables globales
arrayUsar = new Array ();

function inicio (){

    //botones
    botonOriginal = document.getElementById("verOriginal");
    botonLimpieza = document.getElementById("limNumerica");
    botonNueva = document.getElementById("verNueva");

    //accion para los botones
    botonOriginal.addEventListener('click', function () {
        visual();
    });

    botonLimpieza.addEventListener('click', function () {
        limpieza(arrayUsar);
    });

    botonNueva.addEventListener('click', function () {
        visual(arrayUsar);
    });

    
}

function visual() {
    //rellenar array con numeros aleatorios
    for (var i=0; i<15; i++) {
        var aleatorio = Math.floor(Math.random() * 20);
        arrayUsar.push(aleatorio);
        resultadoOriginal.innerHTML = arrayUsar;
        document.write(aleatorio + '-');
    }

    //alert(arrayUsar);
    //resultadoOriginal.innerHTML = arrayUsar;

    return arrayUsar;
}

function limpieza(arrayUsar) {
    //falta que no repita numeros el array
    arrayUsar.sort
    resultadoOriginal.innerHTML = arrayUsar;

}