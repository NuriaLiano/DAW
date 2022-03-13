addEventListener('load', inicio, false);

function inicio() {
    var btn = this.document.querySelector("#btn");
    btn.addEventListener("click", formulario, false);

}

function enviar() {
    //Recoger datos del formulario:
    reemail = document.datos.miemail.value; //Email escrito por el usuario
    recontra1 = document.datos.micontra1.value; //Contraseña primera
    recontra2 = document.datos.micontra2.value; //Contraseña segunda
    //Escribir la url para enviar los datos anteriores:
    ruta = "ejemplo9.php" //ruta del archivo
    envio1 = "envioEmail=" + reemail; //datos email
    envio2 = "envioContra1=" + recontra1; //datos contraseña 1�
    envio3 = "envioContra2=" + recontra2; //datos contraseña 2�
    url = ruta + "?" + envio1 + "&" + envio2 + "&" + envio3; //url para enviar
    ajax1 = new ObjetoAjax; //instanciar objeto ObjetoAjax;
    ajax1.pedirTexto(url, "comp"); //método que devuelve texto en un id.
}