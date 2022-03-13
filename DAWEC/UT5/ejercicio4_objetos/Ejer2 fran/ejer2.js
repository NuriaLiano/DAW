
addEventListener("load", inicio, false);

var ventana;


function inicio() {

    ventana = window.open("", "", "width=250, height=250");
    ventana.document.write("Me caigo");

    setInterval(mover, 1000);
}

function mover() {

    let posi = ventana.screenTop;

    ventana.moveBy(0, 100);
    let posi2 = ventana.screenTop;
    ventana.focus();

    if (posi == posi2) {

        ventana.close();
        document.write("Llegó");

    }

}

