function Cuentacorriente(datosp, nocuenta, saldo){
    this.datosp = datosp;
    this.nocuenta = nocuenta;
    this.saldo = saldo;
    this.visualizarDatosCliente = visualizarDatosCliente;
    
}

function datosP (nombre, dni, direccion, telefono){
    this.nombre = nombre;
    this.dni = dni;
    this.direccion = direccion;
    this.telefono = telefono;
}

function visualizarDatosCliente(){
    let datos = "\n Nombre: " + this.datosp.nombre +
    "\n DNI: " + this.datosp.dni + 
    "\n Direccion: " + this.datosp.direccion + 
    "\n Telefono: " + this.datosp.telefono + 
    "\n Saldo: " + this.saldo;
    return datos;
}
function abono1000(){
    this.saldo = this.saldo + 1000;
    return this.saldo;
}
function cargo10(saldo){
    this.saldo = this.saldo - saldo;
    return this.saldo;
}

