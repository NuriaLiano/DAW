class cdMusica {
    constructor(titulo, grupo, fecha){
        this.titulo = titulo;
        this.grupo = grupo;
        this.fecha = fecha;
    }
    mostrar (){
        return this.titulo +" "+ this.grupo+ " " + this.fecha;
    }

}



var date = new Date();
var date1 = new Date(1,1,2022);
var date2 = new Date(10,1,2022);
var cd = new cdMusica ("disco", "dwes", date.toDateString());
var cd1= new cdMusica ("disco1", "dwes1", date1);
var cd2 = new cdMusica ("disco2", "dwes2", date2);

var arrayMusica = [];
arrayMusica.push(cd, cd1, cd2);
for (let i = 0; i < arrayMusica.length; i++) {
    document.write(arrayMusica[i].mostrar() + "<br/>");
    
}

cdMusica.prototype.precio = "";
var cd4= new cdMusica ("disco4", "dwes4", date1);
cd4.precio = 200;
arrayMusica.push(cd4);
for (let i = 0; i < arrayMusica.length; i++) {
    var total =+ arrayMusica[i].precio; 
    alert(total);
    document.write(arrayMusica[i].mostrar() + arrayMusica[i].precio + "<br/>");
    
}
