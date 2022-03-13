addEventListener('load', inicio, false);

function inicio (){

    let imprimir = document.querySelector('p');
    document.addEventListener('mousemove', function(e){
        imprimir.innerText = `
        Screen X/Y: ${e.screenX}, ${e.screenY}
        Client X/Y: ${e.clientX}, ${e.clientY}`;
        
        //comprobar si se ha pulsado el boton y que boton
        let imprimirdos = document.querySelector("#imprimirdos");
        let btn = document.querySelector("#boton");

        btn.addEventListener("mouseup", function(a){
            switch(a.button){
                case 0:
                    imprimirdos.innerText = `izquierdo`;
                    break;
                case 1:
                    imprimirdos.innerText = `rueda`;
                    break;
                case 2: 
                    imprimirdos.innerText = `derecho`;
                    break;
                default:
                    imprimirdos.innerText = `no se cual has pulsado. codigo: ` + e.button;
            }
        }, false);
    }, false);

}
