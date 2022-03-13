addEventListener('load', inicio, false);


function inicio (){
    //objeto padre
    function prototipoTaxiRenault () {
        this.fabricante = 'Renault, S.A.';
        this.direccionFabricante = 'c/R, Paris';
        this.getCapacidad = function () {
             if (this.tipoMotor == 'Diesel') {
                return 40;
            } else {return 35;} 
        }
        this.variarCarga = function (variacion){
             this.carga = this.carga + variacion; 
        }
        this.variarVelocidad = function (variacion) {
            this.velocidad = this.velocidad + variacion; 
        }
    }

    //hijos
    function TaxiRenault (tipoMotor,
        numeroPasajeros, carga, velocidad) {
        this.tipoMotor = tipoMotor;
        this.numeroPasajeros = numeroPasajeros;
        this.carga = carga;
        this.velocidad = velocidad;
    }
    //aplicar herencia
   var taxi = TaxiRenault.prototype = new prototipoTaxiRenault();

   //crear objeto
    var obj = new TaxiRenault("Diesel", 4, 1000, 100);
    var obj2 = new TaxiRenault("Gasolina", 2, 2000, 200);
    var obj3 = new TaxiRenault("Pruebas", 4, 3000, 150); //solo pilla si es de diesel, si pones otra cosa lo pilla como 35
    var arrayObjetos = [];
    arrayObjetos.push(obj);
    arrayObjetos.push(obj2);
    arrayObjetos.push(obj3);

    for (let i = 0; i < arrayObjetos.length; i++) {
        //propiedades del padre
        document.write(arrayObjetos[i].fabricante);
        document.write("<br>");
        document.write(arrayObjetos[i].direccionFabricante);
        document.write("<br>");
        document.write(arrayObjetos[i].getCapacidad());
        document.write("<br>");
        document.write(arrayObjetos[i].variarVelocidad());
        document.write("<br>");
        document.write(arrayObjetos[i].carga);
        document.write("<br>");
        //propiedades del hijo
        document.write(arrayObjetos[i].tipoMotor);
        document.write("<br>");
        document.write(arrayObjetos[i].numeroPasajeros);
        document.write("<br>");
        document.write(arrayObjetos[i].numeroPasajeros);
        document.write("<br>");
        document.write(arrayObjetos[i].velocidad);
        document.write("<br>");

    }
}



