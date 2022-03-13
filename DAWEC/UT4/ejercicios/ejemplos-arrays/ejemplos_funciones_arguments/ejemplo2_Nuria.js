addEventListener('load', inicio, false);



var arrayFechas1 = [15, 08, 15 ];
var arrayFechas2 = [15, 08, 15 ];
var arrayFechas3 = [15, 08, 15 ];

function inicio() {
    separador("=","perro","gato","lechuza");
    document.write('<br>');
    separador("/","15","08","15");
    document.write('<br>');
    separador("-----", "Maria", "LUIS", "JUAN" ) ;

}
    


function separador() {
    var arrayPruebas = [];
    for (let i = 0; i < arguments.length; i++) {
        arrayPruebas.push(arguments[i+1]);

        
    }
    document.write(arrayPruebas.join(arguments[0])); 
       
    
   
}