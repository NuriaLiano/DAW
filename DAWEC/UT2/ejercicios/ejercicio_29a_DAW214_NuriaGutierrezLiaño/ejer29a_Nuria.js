//DECLARAMOS LAS VARIABLES    
var i, rep;
//BUCLE FOR PARA RECORRER DE 1 A 30
for (i = 1; i <= 6; i++) {
    //BUCLE INTERIOR PARA HACER LAS REPETICIONES
    for (rep = 0; rep < i; rep++) {
        //IMPRIMIMOS EL NÚMERO i, i VECES
        document.write(i);
    }
    //IMPRIMIMOS UN SALTO DE LÍNEA
    document.write("<br>");
}