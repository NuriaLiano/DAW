function fallo(accion) {
    alert(`${accion} fallido`);
}

function cesta_vacia() {
    alert(`La cesta esta vacia`);
}

function darLike() {
    var corazon = document.getElementById("boton_like");


    corazon.addEventListener('click', function() {
        corazon.style.backgroundImage = "url('../img/like_red.png')";
    }, false);
}