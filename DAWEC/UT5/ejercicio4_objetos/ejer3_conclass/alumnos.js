class Alumno{
    constructor(nombrep, cursop, numMateria){
        this.nombre=nombrep;
        this.curso=cursop;
        this.materias=numMateria;
    }

    get nombre(){
        return this._nombre.toUpperCase();
    }
    set nombre(n){
        this._nombre = n;
    }
    get curso(){
        return this._curso;
    }
    set curso(c){
        this._curso = c;
    }
    get materias(){
        return this._materias;
    }
    set materias(m){
        this._materias = m;
    }

    precioC(){
        let precio=this.materias*100;
        return precio;
     }
     
    becaCurso(num){
        let precio = 100*this.materias;
        let descuento, precioFinal = 0;
        descuento = precio*num/100;
        precioFinal = precio - descuento;
        return precioFinal;
     }

    visualizando(){
        let informacion="\n alumno:"+this.nombre +
        "\n curso:"+this.curso+
        "\n Numero materias:"+this.materias+
        "\n Precio:"+this.precioC()+
        "\n beca:"+this.becaCurso(5)
        return informacion;
    }


}
