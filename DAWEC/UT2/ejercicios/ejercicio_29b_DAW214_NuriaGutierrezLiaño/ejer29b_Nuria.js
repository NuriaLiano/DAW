//PIntroducir el numero de veces
var numrep = 30;
//SI LO INTRODUCIDO ES UN NÚMERO
if (Number(numrep) == numrep) {
    //SI ES UN NÚMERO ENTRE 1 Y 50
    if (numrep > 0 && numrep <= 50) {
        var rep,i;
        //BUCLE QUE VA DESDE numrep HASTA 1
        for (i = numrep; i >= 1; i--) {
            //BUCLE DESDE i HASTA 1
            for (rep = i; rep >= 1; rep--) {
                document.write(i);
            }
            document.write("<br>");
        }
    } 
    else {
        alert("El número introducido no es válido");
    }
} 
else {
    alert("No has introducido un número");
}