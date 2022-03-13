
addEventListener('load', inicio, false);
var result, num, signo;

function inicio() {
    result = document.getElementById("lbl-result");
    n = document.getElementById("numero");

    button_signo = document.getElementById("signo");
    button_signo.addEventListener('click', action, false);
}

function signo(n) {
    num = n.value
    if (num > 0) {
        return "positivo";
    } else if (num < 0) {
        return "negativo";
    } else {
        return "nulo";
    }
}

function action() {
    result.innerHTML = `El numero ${n.value} es ${signo(n)}`;
}
