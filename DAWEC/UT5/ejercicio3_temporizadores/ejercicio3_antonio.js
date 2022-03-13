addEventListener("load", function () {
    let inputs = document.getElementsByClassName("caja");
    let btn_visualizar = document.getElementById("visualizar");
    btn_visualizar.addEventListener("click", function() {
        let txt_letras = document.getElementById("letras").value;

        let i = 0;
        let tiempo = setInterval(function() {
            inputs[i].value = txt_letras.charAt(i);

            if (i < txt_letras.length - 1) {
                i++;
            } else {
                clearInterval(tiempo);
            }
        }, 200);
    }, false);

}, false);