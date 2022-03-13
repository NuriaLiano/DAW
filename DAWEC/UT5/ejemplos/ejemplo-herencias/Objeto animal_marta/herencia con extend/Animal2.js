addEventListener('load', inicio, false);

function inicio() {

    var vacas = new Array();
    var tigres = new Array();


    let crearVaca = document.getElementById('crearvaca');
    crearVaca.addEventListener('click', function () {
        let litrosleche = parseFloat(document.getElementById('leche').value);
        let resultadovacas = document.getElementById('resultadovaca').innerHTML = "";

        let vaca = new Vaca("Vaca", "Bos taurus", 4, true, litrosleche);
        vacas.push(vaca);
        
        alert("La vaca se ha creado correctamente.");
        
    }, false);


    let visualizarVacas = document.getElementById('visualizarvacas');
    visualizarVacas.addEventListener('click', function () {
        let resultadovacas = document.getElementById('resultadovaca');
        for (let i = 0; i < vacas.length; i++) {
            resultadovacas.innerHTML += vacas[i].mostrar() + " Tiene " + vacas[i].litrosleche + " litros de leche." + "\n";
        }
    }, false)



    let crearTigre = document.getElementById('creartigre');
    crearTigre.addEventListener('click', function () {
        let victimas = parseInt(document.getElementById('victimas').value);
        let resultadotigres = document.getElementById('resultadotigre').innerHTML = "";

        let tigre = new Tigre("Tigre", "Panthera tigris", 4, true, victimas);
        tigres.push(tigre);

        alert("El tigre se ha creado correctamente");

    }, false);

    let visualizarTigres = document.getElementById('visualizartigres');
    visualizarTigres.addEventListener('click', function () {
        let resultadotigres = document.getElementById('resultadotigre');
        for (let i = 0; i < tigres.length; i++) {
            resultadotigres.innerHTML += tigres[i].mostrar() + " Tiene " +tigres[i].nvictimas + " victimas." + "\n";
        }
    }, false)
}