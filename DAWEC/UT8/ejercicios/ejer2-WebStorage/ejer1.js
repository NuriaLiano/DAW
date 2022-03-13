addEventListener('load',inicio, false);

function inicio (){
    var nombre = document.getElementById("nombre");
    var email = document.getElementById("email");
    var guardarS = document.querySelector("#guardar");
    var obtenerS = document.querySelector("#obtener");
    var eliminarS = document.querySelector("#eliminar");
    var guardarL = document.querySelector("#guardarLocal");
    var obtenerL = document.querySelector("#obtenerLocal");
    var eliminarL = document.querySelector("#eliminarLocal");    


    guardarS.addEventListener('click', function(){
        sessionStorage.setItem("nombre",nombre.value);
        sessionStorage.setItem("email",email.value);
    }, false);

    obtenerS.addEventListener('click', function(){
        var recuNombre = sessionStorage.getItem("nombre");
        var recuEmail = sessionStorage.getItem("email");

        document.getElementById("imprimir").innerHTML = recuNombre + " " + recuEmail;
    }, false);

    eliminarS.addEventListener('click', function(){
        sessionStorage.removeItem("nombre");
        sessionStorage.removeItem("email");
    }, false);

    guardarL.addEventListener("click", function(){
        localStorage.setItem("nombreLocal", nombre.value);
        localStorage.setItem("emailLocal",email.value);
    }, false);

    obtenerL.addEventListener("click", function(){
        var recuNombreLocal = localStorage.getItem("nombreLocal");
        var recuEmailLocal =localStorage.getItem("emailLocal");

        document.getElementById("imprimir").innerHTML = recuNombreLocal + " " + recuEmailLocal;
    }, false);

    eliminarL.addEventListener("click", function(){
        localStorage.removeItem("nombreLocal");
        localStorage.removeItem("emailLocal");
    }, false);
}