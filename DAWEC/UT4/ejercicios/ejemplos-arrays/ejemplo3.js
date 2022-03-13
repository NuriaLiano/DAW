
addEventListener('load', inicio, false);

function inicio() {

    document.getElementsByTagName('input')[10].addEventListener('click',function () {
        

        for(let i=0; i<10;i++){

            document.getElementsByTagName('input')[i].value=i+1;
        }

    },false);

    }