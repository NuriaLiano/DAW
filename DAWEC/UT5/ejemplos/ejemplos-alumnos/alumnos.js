
function Alumno(nombrep, cursop, numMateria) {
    this.nombre=nombrep;
    this.curso=cursop;
    this.materias=numMateria;
    this.precioCurso=precioC;
    this.beca=becaCurso;
    this.visualizar=Visualizando;
}

function precioC(){
   let precio=this.materias*100;
   return precio;
}

function becaCurso(num){
    let precio = 100*this.materias;
    descuento = precio*num/100;
    precioFinal = precio - descuento;
    return precioFinal;
}
function Visualizando(){
    let informacion="\n alumno:"+this.nombre +
    "\n curso:"+this.curso+
    "\n Numero materias:"+this.materias+
    "\n Precio:"+this.precioCurso()+
    "\n beca:"+this.beca(5)
    return informacion;
}