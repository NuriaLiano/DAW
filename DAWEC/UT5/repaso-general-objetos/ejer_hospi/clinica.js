
addEventListener('load', inicio, false);


function inicio() {
    //crear habitaciones
    var arrayImg = document.getElementsByTagName("img");
    var arrayCeros = [];

    //recoger datos del paciente
    var dni = document.getElementById("dni").value;
    var codigo = dni.substring(2, 9);

    var tratamiento = document.getElementsByName("trata");
    var habitacion;

    var nHab = Math.floor(Math.random()*(10-1)+1);
    var foto = document.getElementById("foto");
    var btnIngresar = document.getElementById("btnIngresar");
    btnIngresar.addEventListener("click", function () {
        habitacion = new Habitahos(nHab, codigo, foto.files[0].name);
        
        //array de 0
        for (let i = 0; i < 10; i++) {
            arrayCeros.push(0);
        }
        

    }, false);

    var btnAsignar = document.getElementById("btnAsignar");
    btnAsignar.addEventListener("click", function () {
        for (let i = 0; i < tratamiento.length; i++) {
            if (tratamiento[i].checked){
                var t = tratamiento[i].value;
                habitacion.asignarTratamiento(t);
            }
            
        }
    }, false);

    btnVer = document.getElementById("btnVer");
    btnVer.addEventListener("click", function () {
        document.write(habitacion.info());
    }, false);

}

