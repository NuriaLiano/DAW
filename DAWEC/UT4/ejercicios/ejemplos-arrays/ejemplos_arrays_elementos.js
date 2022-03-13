addEventListener('load', inicio, false);

var arrayN = new Array (1,2,3,4,5,6,7,8,9,10);
var boton;

function inicio() {

    document.getElementsByTagName('input')[0].addEventListener('change',function () {
        

        if(document.getElementsByTagName('input')[0].checked == true){

            for(let i=0;i<document.getElementsByTagName('input').length;i++){
                document.getElementsByTagName('input')[i].checked = true;
            }
    
        }else if(document.getElementsByTagName('input')[0].checked == false){
            
            for(let i=0;i<document.getElementsByTagName('input').length;i++){
                document.getElementsByTagName('input')[i].checked = false;
            }
        }

    },false);
    

    var boton = document.getElementById("boton");
    boton.addEventListener('click', imprimir, false);
     
    
}

function imprimir() {
    for (let i = 0; i < arrayN.length; i++) {
            document.getElementsByTagName('input')[i].innerHTML = arrayN[i];
            
        }
}