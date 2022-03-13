
addEventListener('load', inicio, false);


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
}

   