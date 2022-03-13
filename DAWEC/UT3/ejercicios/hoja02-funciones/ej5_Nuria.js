addEventListener('load',inicio,false);
var numero1, result;

function inicio(){
  // Extraemos los datos
  resultado = document.getElementById("impresion");
  n = document.getElementById("numero");

  boton = document.getElementById("enviar");
  boton.addEventListener('click', imprimir, false);
}

function factorial(n){
    //variable factorial
    let facto = 1;
    //calcular el factorial del numero con el bucle for
    for (i = 1; i <= n.value ; i++) {
        facto *= i; //facto = facto * i;
    } 
    return facto;
}
function imprimir() {
    resultado.innerHTML = `El factorial de ${n.value} es ${factorial(n)}`;
}
