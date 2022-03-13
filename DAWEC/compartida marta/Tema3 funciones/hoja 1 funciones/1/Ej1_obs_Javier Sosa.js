addEventListener('load', inicio, false);

function inicio(){

    let boton = document.getElementById('boton');

        boton.addEventListener('click', () => {

            let nombre = document.getElementById('nom').value;
            let apellido = document.getElementById('ape').value;
            let info = document.getElementById('info');

            info.innerHTML="El nombre es: "+ nombre + " y el apellido: " + apellido;            
            
           
        }, false)

};
