addEventListener('load', inicio, false);

//declarar el array
var arrayGuardar = [];

function inicio (){

    botonCargar = document.getElementById("cargar");
    botonCargar.addEventListener('click', guardar, false);

    //recoger valores del textarea
    recogerT = document.getElementById("caja");

    //mostrar 
    botonCargar = document.getElementById("cargarSoloNumeros");
    botonCargar.addEventListener('click', function () {
        soloNumeros(arrayGuardar);
    }, false);
}


function guardar (){
    arrayGuardar.push(recogerT.value);
    //alert(arrayGuardar);
    document.getElementById("caja").value= "";
    return arrayGuardar;
}

function soloNumeros(arrayGuardar) {
    arrayGuardar.sort();
    var arrayfinal = arrayGuardar.filter(function (num) {
        return num < 10;
    })
    alert(arrayfinal);
}

