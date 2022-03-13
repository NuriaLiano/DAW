addEventListener('load', inicio, false);

function inicio (){


    //crear objeto
    var arrayPalabra = ["sal", "gato", "perro", "cocina", "caballo", "ordenador", "armario", "altavoz", "wok", "zapato"];
    var objeto = new apalabra("hola");
    alert(objeto.calculo());
    

    //alert(arrayPalabra);
    var imprimirOriginal = document.querySelector("#imprimirOriginal");
    imprimirOriginal.innerHTML = "El contenido del array original es: " + arrayPalabra;
    
    //escoger uno al azar
    var aleatorio = Math.floor(Math.random() * (arrayPalabra.length - 0) + 0);
    var extraido = arrayPalabra.splice(aleatorio, 1);
    var palabra = extraido.toString();
    
    //imprimir cada caracter en un input
    for (let i = 0; i < palabra.length; i++) {
        //alert(palabra[i].charAt())
        var nuevoRead = document.createElement("input");
        nuevoRead.setAttribute("id", "nuevoRead");
        nuevoRead.setAttribute("readonly", "true");
        //nuevoRead.setAttribute("value", palabra[i].charAt());
        document.body.appendChild(nuevoRead);
        
    }






    //visualizar en un input text 
    var imprimirExtraido = document.querySelector("#imprimirExtraido");
    alert(extraido.charAt());
    /*for (let i = 0; i < extraido.length; i++) {
        var letra = extraido;
        alert(letra);
        var arrayNuevaPalabra = [];
        arrayNuevaPalabra.push(letra);

        
        
        
    }
    imprimirExtraido.setAttribute("value", extraido);
    alert(extraido);*/

    
}