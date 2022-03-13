addEventListener('load', inicio, false);


var arrayInventario = [];

function inicio() {
    
    //recoger valores de los input
    nombre_producto = document.getElementById("nombre_producto");
    stock = document.getElementById("stock");

    producto_vendido = document.getElementById("producto_vendido");
    unidades = document.getElementById("unidades");

    //boton
    botonCargar = document.getElementById("cargar");
    botonVender = document.getElementById("vender");
    botonMostrar = document.getElementById("Mostrarinventario");

    //dar evento al boton
    botonCargar.addEventListener("click", function () {
        cargarInventario();
    }, false);

    botonVender.addEventListener("click", function(){
        venderProducto();
    }, false);

    botonMostrar.addEventListener("click", function(){
        mostrarInformacion();
    }, false);


}

function cargarInventario (){
    //              nombreproducto es clave     stock es valor
    arrayInventario[nombre_producto.value] = stock.value;

    //document.write(arrayInventario[nombre_producto.value]);

    return arrayInventario;
}

function venderProducto() {
    
    //aceder al array por clave y controlar si se puede vender
    
    //buscar por clave
    let posicion = arrayInventario.findIndex(buscar(nombre_producto.value));
    function buscar(clave) {
        return clave == producto_vendido.value;
    }

    if (arrayInventario[producto_vendido.value] >= unidades.value) {
        //eliminar del array por posicion
        arrayInventario.splice(posicion, unidades.value);
        alert("Se han vendido correctamente");

    }else{
        alert("No hay tantas unidades disponibles");
    }
    //document.write("El producto es: " + arrayInventario[stock.value] + "El stock es: "+ arrayInventario[producto_vendido.value]  );
}

function mostrarInformacion() {
    for (var n in arrayInventario) {
        //document.write("Producto: " + n + " ,Cantidad: " + arrayProductos[n] + "<br/>");
        document.getElementById("mostrarTodo").innerHTML = "Producto: " + n + " ,Cantidad: " + arrayInventario[n] + "<br/>";
    }
}
