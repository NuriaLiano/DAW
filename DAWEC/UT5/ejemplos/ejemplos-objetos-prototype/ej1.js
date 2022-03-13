addEventListener('load', inicio, false);


var color= null;
//objeto
function Cuadrado (color_in){
    this.color = color_in;
}

//crear objeto obj de cuadrado
var obj = new Cuadrado("azul");

//añadirle una propiedad
Cuadrado.prototype.lado = 8;
var obj2 = new Cuadrado("verde");
alert(obj.lado); //imprime 8
alert(obj2.lado); //tambien imprime 8