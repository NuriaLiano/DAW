addEventListener('load', inicio, false);


function inicio() {
    
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

