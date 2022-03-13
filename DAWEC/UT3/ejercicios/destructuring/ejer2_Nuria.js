addEventListener('load', inicio, false);

function inicio() {
    var num1 = document.getElementById("num1");
    var num2 = document.getElementById("num2");
    boton = document.getElementById("boton");
    boton.addEventListener('click', permuta, false);
}

function permuta() {
    var numnum1 = parseInt(num1);
    var numnum2 = parseInt(num2);
    return [numnum1, numnum2];
}
alert(permuta());