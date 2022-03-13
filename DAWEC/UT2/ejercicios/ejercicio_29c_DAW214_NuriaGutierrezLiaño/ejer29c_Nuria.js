//PEDIMOS EL NÚMERO POR TECLADO
var numrep = prompt("Introduce numero de repeticiones");
//SI LO INTRODUCIDO ES UN NÚMERO
if (Number(numrep) == numrep) {
    //SI ES UN NÚMERO ENTRE 1 Y 50
    if (numrep > 0 && numrep <= 50) {
        var rep,i;
        //BUCLE QUE VA DESDE 0 HASTA numrep
        for (i = 0; i <=numrep; i++) {
            //BUCLE DESDE 1 HASTA i
            for (rep = 1; rep <= i; rep++) {
                document.write(rep);
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