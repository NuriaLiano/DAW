addEventListener("load", function () {
    // Obtenemos el botón del DOM a través del id y le añadimos un evento de click
    var inp_num1 = document.getElementById("num1");
    var inp_num2 = document.getElementById("num2");

    boton = document.getElementById("boton");
    boton.addEventListener("click", function () {
        // Obtendríamos el valor de los input en num1 y num2
        let num1 = parseInt(inp_num1.value);
        let num2 = parseInt(inp_num2.value);

        // Creamos un array llamando a la función permuta
        [num1, num2] = permuta(num1, num2);


        // Asignamos a los input el valor de los arrays
        inp_num1.value = num1;
        inp_num2.value = num2;
    }, false);
}, false);

// Función que recibe dos argumentos, que son dos enteros num1 y num2
// Devuelve un array con [num2, num1] es el destructuring
var permuta = function (num1, num2) {
    [num1, num2] = [num2, num1];
    return [num1, num2];
};