addEventListener('load', inicio, false);

//variables y arrays
var ciudades = ["Zaragoza", "Ávila", "Madrid", "Barcelona"];

function inicio() {
    botonCargar = document.getElementById("cargar");
    botonCargar.addEventListener('click', ordenar, false);

}

function ordenar() {
    //mostrar los datos introducidos
    document.getElementById("resultado").innerHTML = ciudades;

    //convertir en array
    
    document.getElementById("convertido").innerHTML = ciudades.sort(function (a, b) {
        return a.localeCompare(b);
    });


}