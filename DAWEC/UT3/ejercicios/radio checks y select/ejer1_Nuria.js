addEventListener('load', inicio, false);

var nombre;
var apellidos;
var resultado;
var boton;
function inicio() {
    nombre = document.getElementById("nombre");
    apellidos = document.getElementById("apellidos");
    resultado = document.getElementById("resultado");
    boton = document.getElementById("boton");
    boton.addEventListener('click',escribir,false);

}
function escribir() {
    resultado.value = nombre.value + apellidos.value;
}