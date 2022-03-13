class Habitahos{
    constructor (nhabitacion, codpaciente, foto, tratamientos){
        this.nhabitacion = nhabitacion;
        this.codpaciente = codpaciente;
        this.foto = foto;
        this.tratamientos = tratamientos;
    }

    info(){
        return "N habitacion :" + this.nhabitacion; +
        " cod paciente: " +  this.codpaciente; + 
        " foto: " + this.foto;

    }

    infoTratamientos(){
        for (let i = 0; i < this.tratamientos.length; i++) {
            document.write(this.tratamientos[i] + "<br>");
            
        }
    }
    
}