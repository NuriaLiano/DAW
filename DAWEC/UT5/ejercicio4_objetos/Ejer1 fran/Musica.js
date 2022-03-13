
function Disco(tituloDisco, grupoDisco, fechaDisco,imagen) {
    this.titulo = tituloDisco;
    this.grupo = grupoDisco;
    this.fecha = fechaDisco;
    this.imagen = imagen;
    this.precio = 0;
    this.ver = visualizar;
}

function visualizar(){

    return "Título: "+this.titulo+ " Grupo: "+this.grupo+" Precio del disco: "+this.precio+" Fecha de lanzamiento: "+this.fecha+" Imagen:"+this.imagen +"\n";
}

