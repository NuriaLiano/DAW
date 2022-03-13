
//pedir all usuario
var edad = prompt("Introduce una edad");

if (edad >0) {
    switch (edad) {
        case edad >0 && edad <= 12:
            alert("Niño")
            break;
        case edad =>13 && edad <= 26:
            alert("Joven")
            break;
                
        case edad =>27 && edad <= 60:
            alert("Adulto")
            break;
                
        case edad > 61:
            alert("Jubilado")
            break;
        default:
            break;
    }
} else {
    alert("Error introduce otra edad")
}

