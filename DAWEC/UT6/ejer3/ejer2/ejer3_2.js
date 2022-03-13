addEventListener('load', inicio, false);

function inicio (){

    var btnpulsar = document.getElementById("pulsar");
    var btncambiar = document.getElementById("cambiar");

    btnpulsar.addEventListener('click', atributo, false);
    btncambiar.addEventListener('click', cambiar, false);
    

}

function atributo (){
    var pe = document.querySelector("#pe");
    let arrayPe = pe.getAttributeNames();
    for (let i = 0; i < arrayPe.length; i++) {
        if (arrayPe[i] == "title") {
           alert(pe.getAttribute(arrayPe[i])); 
        }
        
        //alert(arrayPe[i])
    }
}

function cambiar (){

    var nuevotitulo = prompt("inserta el nuevo titulo");
    pe.setAttribute("title", nuevotitulo);
    
    //mostrar
    let arrayPe = pe.getAttributeNames();
    for (let i = 0; i < arrayPe.length; i++) {
        if (arrayPe[i] == "title") {
           alert("El nuevo valor de titulo es: " + pe.getAttribute(arrayPe[i])); 
        }
        
        //alert(arrayPe[i])
    }
}