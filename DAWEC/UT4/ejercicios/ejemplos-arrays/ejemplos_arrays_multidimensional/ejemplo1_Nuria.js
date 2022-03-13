addEventListener('load', inicio, false);

//declaracion del array 2x2
arrayBi = new Array(2);
arrayBi[0] = new Array("Galicia", 34,2,6);
arrayBi[1] = new Array("Asturias", 6,7,7);
arrayBi[2] = new Array("Cantabria", 7,9,5);

function inicio() {
    document.write(arrayBi[0]);
    document.write(("<br/>"));
    document.write(arrayBi[1]);
    document.write("<br/>");
    document.write(arrayBi[2]);
    document.write("<br/>");
    document.write("<br/>");

    document.write("fila 1 col 0 es: " + arrayBi[1][0]);

}
