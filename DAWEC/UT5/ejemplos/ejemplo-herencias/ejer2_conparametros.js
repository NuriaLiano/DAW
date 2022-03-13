addEventListener('load', inicio, false);


var nombre, especie, numPatas, tieneCola, verInfo;

function inicio(){
    
    var vacas = new Array();
    var tigres = new Array();
    vacas.prototype = new animal ();
    tigres.prototype = new animal ();


    var tig = new tigre("nombre", "felino", 4, 1, 3);
    alert(tig.especie);
    alert(tig.nvictimas);
    tig.otravictima();
    alert(tig.nvictimas);


    
}