addEventListener('load', inicio, false);

function inicio(){

    let boton = document.getElementById('boton');

        boton.addEventListener('click', () => {

            let numero = document.getElementById('numero').value;
            let caja = document.getElementById('caja');

            if (par(numero)==true) {
                caja.innerHTML="Es un numero PAR"
            }else{
                caja.innerHTML="Es un numero IMPAR"
            }
           
        }, false)

};

const par = (numero) => {
    if (numero%2==0) {
        return true
    }else{
        return false
    }
}