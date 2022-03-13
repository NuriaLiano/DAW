var opcion = confirm("Acepta o cancela para entrar");
if (opcion == false) {
    alert("El programa ha terminado");
}else if (opcion == true) {
    while (pass != "hola") {
        var pass = prompt("introduce tu contraseña");
    } 
}