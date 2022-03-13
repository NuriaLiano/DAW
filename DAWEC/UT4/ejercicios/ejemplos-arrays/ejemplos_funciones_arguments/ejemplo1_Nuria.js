addEventListener('load', inicio, false);


function inicio() {
    document.write(sumar(2,4));
    document.write('<br>');
    document.write(sumar(1,2,3,4,"M",5));
    document.write('<br>');
    document.write(sumar(100,200,300));
}

function sumar() {
    var suma = 0;
    for (let i = 0; i < arguments.length; i++) {
        if (!isNaN(arguments[i])) {
            suma += arguments[i];
        }
        
    }
    return suma;
    
}

