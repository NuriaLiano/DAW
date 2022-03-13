var colores = ["azul", "amarillo", "rojo", "verde", "café", "rosa"];

// Función existe
function existe(colores, color) {
    return colores.includes(color);
}

// Evento de carga
addEventListener("load", function () {
    let btn_color = document.getElementById("color");

    // Evento botón guardar
    btn_color.addEventListener("click", function () {
        let color = prompt("Introduce un color, por favor", "rojo");
        if (existe(colores, color)) {
            alert(`${color} existe`);
        } else {
            alert(`${color} no existe`);
        }
    }, false);
}, false);