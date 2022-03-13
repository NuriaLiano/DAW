// Que esto se haga cuando cargue la página
addEventListener('load', function () {
    // Seleccionamos el formulario
    var formulario = document.getElementById("formulario");

    // Hacemos el evento de click sobre el propio formulario
    formulario.addEventListener("click", function() {
        var i;

        for (i = 0; i < formulario.colorin.length; i++) {
            if (formulario.colorin[i].checked) {
                document.bgColor = formulario.colorin[i].value;
                break;
            }
        }
    }, false);
}, false);