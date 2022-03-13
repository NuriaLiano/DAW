var valor;
var sum = 0;
do {
    valor = parseInt(prompt('Introduce un valor (9999 para finalizar)'));
    if (valor != 9999) {
        sum = sum + valor;
    }
} while (valor != 9999);
document.write('Valor acumulado total:' + sum);
document.write('<br>');
if (sum > 0) {
    document.write('El valor acumulado es mayor a cero');
} else {
    if (sum == 0) {
        document.write('El valor acumulado es cero');
    } else {
        document.write('El valor acumulado es menor a cero');
    }
}