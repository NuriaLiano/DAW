/*1-Crear el modelo de objeto Cuentacorriente.
• Propiedades: Datos Personales-Nocuenta-Saldo
• Datos personales será una propiedad que recibirá el objetos datosP, que consta de
estas propiedades : nombre-dni-dirección y teléfono
• Métodos:
• Visualizar datos del cliente
• Visualizar saldo
• Abono y Cargo(estos dos métodos servirán para aumentar el saldo o disminuirle
según el caso)
• 2-Creamos un script que nos cree N objetos Cuentacorriente y nos visualice los
datos de todos los clientes, así como el saldo de ese momento.
• 3-Nos aumente el saldo en 1000 euros a todos los clientes.
• 4-Nos cargue una retención del 10% a todos los clientes.
• 5-Nos de la posibilidad de hacer cargos o abonos a un cliente en particular con la
cantidad que queramos y visualizar su saldo. */

addEventListener('load', inicio, false);

var arrayCuentas = [];

function inicio (){
    var inombre = document.getElementById("nombre");
    var idni = document.getElementById("dni");
    var idireccion = document.getElementById("direccion");
    var itelefono = document.getElementById("telefono");
    var imprimir = document.getElementById("ver");
    btnanadir = document.getElementById("btnanadir");
    var btnver = document.getElementById("btnver");
    var btnagregarsaldo = document.getElementById("btnagregarsaldo");
    var btnbajarsaldo = document.getElementById("btnbajarsaldo");

    btnanadir.addEventListener('click', function(){
        //crear objeto con los parametros
        let persona = new datosP (inombre.value, idni.value, idireccion.value, itelefono.value);

        //crear saldo
        let saldo = Math.floor(Math.random() * (1000 - 100 + 1) + 100);
        //crear numcuenta
        let numCuenta = Math.floor(Math.random() * (1000 - 100 + 1) + 100);

        let cuenta = new Cuentacorriente (persona, numCuenta, saldo);

        arrayCuentas.push(cuenta);

        inombre.value = "";
        idni.value = "";
        idireccion.value = "";
        itelefono.value = "";


    }, false);

    btnver.addEventListener("click", function(){
        let texto = "Datos \n";

        for (let i = 0; i < arrayCuentas.length; i++) {

            texto += (i+1)+".  "+arrayCuentas[i].visualizarDatosCliente();
            
        }

        imprimir.value = texto;
    }, false);

    btnagregarsaldo.addEventListener("click", function(){
        for (let i = 0; i < arrayCuentas.length; i++) {

            arrayCuentas[i].abono();
            
        }
    }, false);
    


}
