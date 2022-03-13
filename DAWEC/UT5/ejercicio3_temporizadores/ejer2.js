addEventListener('load', inicio, false);


function inicio (){

    //SOLO FUNCIONA EN CHROME EN FIREFOX SE SALE 

        //abrir pantalla
        var ventanuca = window.open("","","width=200, height=30");
        ventanuca.document.write("me caigo");
        setInterval(function(){
            let arriba = ventanuca.screenTop;

            ventanuca.moveBy(0,50);
            if (arriba == ventanuca.screenTop) {
                
                ventanuca.close();
                document.write("Llegó");
            }
        }, 1000);


    
}