addEventListener("load", function () {
    let btn_diferencia_fechas = document.getElementById("diferencia_fechas");
    btn_diferencia_fechas.addEventListener("click", function () {
        let fecha1 = new Date(document.getElementById("fecha1").value);
        let fecha2 = new Date(document.getElementById("fecha2").value);
        let dias = (Math.abs(fecha1.getTime() - fecha2.getTime()) / 86400000).toFixed();
        let minutos = (Math.abs(fecha1.getTime() - fecha2.getTime()) / 60000).toFixed();
        alert(`${dias} dias y ${minutos} minutos`)
    }, false);
}, false);