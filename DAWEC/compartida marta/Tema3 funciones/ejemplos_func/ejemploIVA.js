function aplicar_IVA(valorProducto, IVA){
    var productoConIVA = valorProducto * IVA;
    return productoConIVA;
}

var valor = parseFloat(prompt("Introduce valor del producto"));
var iva = parseFloat(prompt("Introduce el IVA"));

var result = aplicar_IVA(valor, iva);

document.write("El precio del producto, aplicando el IVA es: " + result);