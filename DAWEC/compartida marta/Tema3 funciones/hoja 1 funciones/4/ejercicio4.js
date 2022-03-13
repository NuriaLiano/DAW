// Variables globales
var resultado = 0.0;

// Cuando carga la página
addEventListener("load", function () {
    // Obtenemos los elementos del DOM
    var input_numero1 = document.getElementById("numero1");
    var input_numero2 = document.getElementById("numero2");
    var select_operacion = document.getElementById("operacion");
    var input_resultado = document.getElementById("resultado");
    var btn_calcular = document.getElementById("calcular");

    // Evento de calcular la operación
    btn_calcular.addEventListener("click", function () {
        // Obtenemos los valores numéricos
        var numero1 = parseFloat(input_numero1.value);
        var numero2 = parseFloat(input_numero2.value);

        // Tratamos la operación con un switch
        var operacion = select_operacion.value;
        switch (operacion) {
            case "+":
                resultado = numero1 + numero2;
                break;
            case "-":
                resultado = numero1 - numero2;
                break;
            case "*":
                resultado = numero1 * numero2;
                break;
            case "/":
            	if (numero2 != 0) {
            		resultado = numero1 / numero2;	
            	} else {
            		resultado = "División entre 0";
            	}
                
                break;
            default:
                alert("Opción inexistente");
        }

        // Asignamos al input el valor del resultado
        input_resultado.value = resultado;
    }, false);
}, false);