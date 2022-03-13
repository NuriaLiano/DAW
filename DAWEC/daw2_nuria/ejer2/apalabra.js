class apalabra {

    

    constructor(palabra){
        this.palabra = palabra;
    }

    calculo(){

        var arrayVocales = ["a", "e", "i", "o", "u"];
        var arrayConsonantes = ["b", "c", "d", "f", "g", "h", "i", "j", "l", "m", "n", "ñ", "p", "q", "r", "s", "t", "u", "v", "y"];
        var arrayEspeciales = [ "k", "w", "z"];
        var letra;
        var puntos = 0, fallidos = 0;

       

        for (let i = 0; i < this.palabra.length; i++) {
            0 = this.palabra[i].charAt();
            
            for (let a = 0; a < arrayVocales.length; a++) {
                if (letra == arrayVocales[a]) {
                    puntos +=1;
                    
                }else{
                    fallidos ++;
                }
                
            }
            for (let b = 0; b < arrayConsonantes.length; b++) {
                if (letra == arrayConsonantes[b]) {
                    puntos+=2;
                }else{
                    fallidos ++;
                }
                
            }
            for (let c = 0; c < arrayEspeciales.length; c++) {
                if (letra == arrayEspeciales[c]) {
                    puntos+=3;
                }else{
                    fallidos ++;
                }
                
            }
             
            
        }
        return puntos;
        //alert(puntos);

    }

    puntostotales (puntos){
        alert (puntos);
    }

}

//var a = new apalabra("hola", 2);
//a.calculo("hola");
//a.puntostotales(a.calculo("hola"));