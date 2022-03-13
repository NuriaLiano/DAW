
function Cuenta(datosPersonales, numCuenta, saldo) {
    this.datos = datosPersonales;
    this.numCuenta = numCuenta;
    this.saldo = saldo;
    this.datosClientes = visualizarDatosCliente;
    this.aumenta1000 = aumentaSaldo1000;
    this.red = retencion10;
}



function visualizarDatosCliente(){

    return "Nombre: "+this.datos.nombre+ " Dni: "+this.datos.dni+" Dirección: "+this.datos.direccion+" Teléfono: "+this.datos.telefono+" Saldo: "+this.saldo+"\n";
}


function aumentaSaldo1000(){

    this.saldo = this.saldo + 1000;
}


function retencion10(red){
    
    this.saldo = this.saldo - red;
}







