addEventListener('load', inicio, false);

//variables y arrays
var arrayExtremo = [1,2,3,4,5];

function inicio() {
    botonCargar = document.getElementById("cargar");
    botonCargar.addEventListener('click', extremo, false);

}


function extremo() {
    //mostrar los datos introducidos
    document.getElementById("resultado").innerHTML = arrayExtremo;

    //ordenar de menor a mayor
    
    arrayExtremo.sort();
    //sacar el mayor ultimo del array 
    document.getElementById("mayor").innerHTML = arrayExtremo.pop();
    //sacar el menor primero del array
    document.getElementById("menor").innerHTML = arrayExtremo.shift();

}