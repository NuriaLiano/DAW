addEventListener('load', inicio, false);

//crear array
var arrayPromedio = [1,2,3,4,5];

function inicio() {
    boton = document.getElementById("cargar");
    boton.addEventListener('click', promedio, false);

    document.getElementById("resultado").innerHTML = arrayPromedio;
}

function promedio() {
    if(arrayPromedio.length == 0){
        alert("EL ARRAY ESTÁ VACIO");
    }else{
        let suma = arrayPromedio.reduce((a, b) => b+= a);
        let media = suma /arrayPromedio.length;
        
        document.getElementById("media").innerHTML = media;
    }
}