addEventListener('load', inicio, false);

//crear arrays
var minus = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];
var text = "por cien cañones por banda poema de Espronceda";

var botonEjer1;

function inicio(){

  mayusculas();
  //document.write("<br/>");
  palabras();
  //document.write("<br/>");
    
    //recoger boton
    botonEjer1 = document.getElementById("botonEjer1");
    botonEjer1.addEventListener("click", ejer1, false);
    



}

function mayusculas(){

    //sacar la primera letra en mayuscula
    for (let i = 0; i < minus.length; i++) {
        var inicial = minus[i].charAt(0).toUpperCase();
        var final = minus[i].charAt(minus[i].length-1).toUpperCase();
        //document.write("<br/>");
        var resto = minus[i].slice(1, -1);

        var mayus = (inicial.concat(resto).concat(final));

        document.getElementById("i1").innerHTML = mayus;

        

    }

}

function palabras (){
    
    textoDividido = text.split(" ");
    longi = textoDividido.length;

    puntoFinal = ".";

    document.getElementById("i2").innerHTML = "El total de palabras sin espacios es "+longi;
    

    
    var indice = text.indexOf("Espronceda");
    var textoSinAutor = text.slice(0, indice);
    var textoConAutor = text.slice(indice, text.length);

    var final = textoSinAutor.concat(". ").concat(textoConAutor);
    //document.write(final);
    document.getElementById("i3").innerHTML = final;
}

function ejer1(){

    //recoger valores de input
    var texto = document.getElementById("ejer1").value;
    if (texto.length < 10){
        document.getElementById("i4").innerHTML = "METE MAS DE 10";
    }else{
        var numero =  texto.charAt(8);
        document.getElementById("i4").innerHTML = "La letra del octavo es: " + numero;
        
        var posicion = texto.indexOf(numero);
        document.getElementById("i5").innerHTML = "La posicion es: " + posicion;
        
        var posicionFinal = texto.lastIndexOf(numero);
        document.getElementById("i6").innerHTML = "La ultima posicion es: " + posicionFinal;
        
        var cadenaNueva = texto.slice(posicion, posicionFinal);
        document.getElementById("i7").innerHTML = "La cadena extraida es: " + cadenaNueva;


        for (let i = 0; i < cadenaNueva.length; i++) {
            var indice = cadenaNueva.indexOf(cadenaNueva[i]);
            var contM = 0;
            if(indice % 2 == 0){
                alert(indice);
                

                
                //pares
                //document.getElementById("i8").innerHTML = "Los pares: " + texto[i];
            }
            contM += indice;
        }

    }

}
