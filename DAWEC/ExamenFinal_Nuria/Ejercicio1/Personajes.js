class Personajes extends SuperH{
    constructor (grupo, ciudad, anio, base, activo, nombre, edad, identidad, poderes){
        super(grupo, ciudad, anio, base, activo);
        this.nombre = nombre;
        this.edad = edad;
        this.identidad = identidad;
        this.poderes = poderes;
        
            
    }
    visualizar(){
        var cadena = "";
        return cadena = this.grupo + ", " + this.ciudad + ", " + this.anio + ", " + ", " + this.base + ", " + this.activo + ", "+this.nombre + ", " + this.edad + ", " + this.identidad + ", " + this.poderes;
    }
}