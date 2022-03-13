function validarNombre(){
    var nombre = $("#nombre");
    var errorNombre = $("#errorNombre");

    if(nombre.val().length < 4){
        errorNombre.removeClass("oculto");
        return false;
    }else{
        errorNombre.addClass("oculto");
        return true;
    }
    
}

function validarDNI(){

    var dni = $("#dni");
    var errorDni = $("#errorDNI");

    var numero = dni.val().substr(0, dni.val().length - 1);
    var lete = dni.val().substr(dni.val().length - 1, 1);
    numero = numero % 23;
    var letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
    letra = letra.substring(numero, numero + 1);

        if (letra == lete) {

            errorDni.addClass("oculto");
            return true;
        } else {

            errorDni.removeClass("oculto");
            return false;
        }
}

function validarPasswords(){
    var pass1 = $("#pass1");
    var pass2 = $("#pass2");
    var errorPassword = $("#errorPassword");

    if(pass1.val() == pass2.val() && pass1.val().length > 5){
        errorPassword.addClass("oculto");
        return true;
    }else{
        errorPassword.removeClass("oculto");
        return false;
    }
    
    
}
function validar(){
    var v1 = validarNombre();

    var v2 = validarPasswords();
    
    var v3 = validarDNI();

    if (v1 == true && v2 == true && v3 == true) {
        return true;
    } else {
        return false;
    }

}