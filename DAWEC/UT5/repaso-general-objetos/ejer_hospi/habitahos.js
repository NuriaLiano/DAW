/*Se crea un paciente */
class Habitahos {
    constructor(nHab, codPac, fot){
        this.nHabitacion = nHab;
        this.codPaciente = codPac;
            this.foto = fot;
        this.arrayTratamientos = [];
    }

    /*get nHabitacion (){
        return this.nHabitacion;
    }
    get codPaciente(){
        return this.codPaciente;
    }
    get foto(){
        return this.foto;
    }
     arrayTratamientos(){
        return this.arrayTratamientos;
    }*/

    info(){
        let datos = "\n Num Habitacion: " + this.nHabitacion +
        "\n Cod Paciente: " + this.codPaciente + 
        "\n Foto: " + this.foto + 
        "\n Tratamientos: " + this.infoTratamientos();
        return datos;
    }
    infoTratamientos(){
        var datos = "";
        for (let i = 0; i < this.arrayTratamientos.length; i++) {
            datos = datos + " "+ this.arrayTratamientos[i];
            alert(datos);
        }
        return datos;
    }
    asignarTratamiento(trata){
        this.arrayTratamientos.push(trata);
        return this.arrayTratamientos;
    }

}