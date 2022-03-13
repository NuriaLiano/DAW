function Cd_musica(titulo, grupo, fecha){

    this.titulo=titulo;
    this.grupo=grupo;
    this.fecha=fecha;
    this.precio = 0;
    this.mostrar = mostrar;
}

/*Cd_musica.prototype.mostrar = function() {
    let datos = "Titulo: "+this.nombre+
    "\n Grupo: "+this.grupo+
    "\n Fecha: "+this.fecha;
    return datos;
}*/

function mostrar(){
    let datos = "\n Titulo: "+this.titulo+
    "\n Grupo: "+this.grupo+
    "\n Fecha: "+this.fecha+
    "\n Precio: "+this.precio;
    return datos;

}
