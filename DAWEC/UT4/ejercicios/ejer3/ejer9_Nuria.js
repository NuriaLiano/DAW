addEventListener('load', inicio, false);

//variables y arrays
var botonCargar, introducir;

function inicio() {
    botonCargar = document.getElementById("cargar");
    botonCargar.addEventListener('click', convertir, false);

    //recoger datos del input
    introducir = document.getElementById("introducir");

    

}

function convertir() {
    //mostrar los datos introducidos
    document.getElementById("resultado").innerHTML = introducir.value;

    //convertir en array
    var arrayN = Array.from(introducir.value);
    document.getElementById("convertido").innerHTML = arrayN;


}