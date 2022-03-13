addEventListener('load', inicio, false);

//crear array asociativo
var numeros = [];
numeros["romanos"] = new Array("IVXLCDM");
numeros["decimales"] = new Array(1,5,10,50,100,500,1000);

var botonRomanos, introRomanos;

function inicio (){
    //recoger valores del input
        introRomanos = document.getElementById("introNum");
        //document.write(numeros["romanos"]);

    botonRomanos = document.getElementById("botonRomanos");
    botonRomanos.addEventListener("click", function(){
        var iguales = false;
        for (let i = 0; i < (numeros["romanos"]).length; i++) {
            if (numeros["romanos"] == introRomanos.value) {
                iguales = true;
                
            }
        }
        if (iguales == true) {
            alert("Los numeros son iguales");
        }else{
                
            alert("Los caracteres no son números romanos");
            introRomanos.value="";
            introRomanos.focus();
            //IVXLCDM
        }
        var num = [];
        for (let j = 0; j < (introRomanos.value).length; j++) {
            num.push((introRomanos.value).slice(0,j));
            
        }
        for (let b = 0; b < num.length; b++) {
            document.getElementById("num1").innerHTML = "El array es: " +num[b];

        }
        /*document.getElementById("num1").innerHTML = "El array es: " +introRomanos.join("-");
        document.getElementById("num2").innerHTML = "El array es: " + 
        document.getElementById("num3").innerHTML = "El array es: " + 
        document.getElementById("num4").innerHTML = "El array es: " + 
        document.getElementById("num5").innerHTML = "El array es: " + 
        document.getElementById("num6").innerHTML = "El array es: " + 
        document.getElementById("num7").innerHTML = "El array es: " + */



    }, false);


}

