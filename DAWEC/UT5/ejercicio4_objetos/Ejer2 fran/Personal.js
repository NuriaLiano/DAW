
function Personal(nombre, dni, direccion, telefono){
    this.nombre = nombre;
    this.dni = dni;
    this.direccion = direccion;
    this.telefono = telefono;
    this.ver = visualizar;
}

function visualizar(){

    return "Nombre: "+this.nombre+ " Dni: "+this.dni+" Dirección: "+this.direccion+" Telefono: "+this.telefono+"\n";
}