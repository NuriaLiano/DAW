function animal (nombre, especie, numPatas, tieneCola){
    this.nombre = nombre;
    this.especie = especie;
    this.numPatas = numPatas;
    this.tieneCola = tieneCola;
    this.verInfo = function(){
        var cadena = "";
        return cadena = this.nombre + ", " + this.especie + ", " + this.numPatas + ", " + this.tieneCola;
    }
}