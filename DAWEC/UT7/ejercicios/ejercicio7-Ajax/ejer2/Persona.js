class Persona {
    constructor(nombre, edad, dni, sexo, peso, altura){
        this.nombre=nombre;
        this.edad=edad;
        this.dni=dni;
        this.sexo=sexo;
        this.peso=peso;
        this.altura=altura;
    }

    calcularIMC(){
        //kg/(altura^2)
        //si el resultado es menor que 20 devuelve -1
        //si devuelve entre 20 y 25 incluidos, devuelve 0
        //si devuelve valor mayor que 25 devuelve 1
        //usar constantes

        if((this.peso/(this.altura^2)) < 20){
            return -1;
        }else if(((this.peso/(this.altura^2)) >= 20) && ((this.peso/(this.altura^2)) <= 25)){
            return 0;
        }else if(((this.peso/(this.altura^2)) >= 25)){
            return 1;
        }

    }

    esMayorEdad(){
        if(this.edad >= 18){
            return true;
        }else{
            return false;
        }
    }

    #comprobarSexo(sexo){
        if(sexo == "M"){
            return true
        }else if(sexo == "H"){
            return false
        }
    }

    informacion(){
        let informacion="\n nombre:"+this.nombre +
        "\n edad:"+this.edad+
        "\n dni:"+this.dni+
        "\n sexo:"+this.sexo+
        "\n peso:"+this.peso+
        "\n altura:"+this.altura
        return informacion;
    }

    generaDNI(){
        //numero aleatorio 
        let numero =+ Math.floor(Math.random() *(90000000 - 10000000)+10000000)

    }

}