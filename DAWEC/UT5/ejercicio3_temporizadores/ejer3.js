addEventListener('load', inicio, false);

function inicio (){
    let cajas = document.getElementsByClassName("caja");
    let btn_ver = document.getElementById("ver");

    btn_ver.addEventListener("click", function(){
        let texto = document.getElementById("introTexto").value;
        let contador = 0;
        let tempo = setInterval(function(){
            cajas[contador].value = texto.charAt(contador);
            if (contador < texto.length -1) {
                contador++;
            }else{
                clearInterval(tempo);
            }
        }, 500);
    }, false);
}