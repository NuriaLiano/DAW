addEventListener('load', inicio, false);

var hoy, fecha1, fecha2, fechaUno, fechaDos, botonEdad, botonDiferencias, botonDia, botonMes, botonGMT, botonInicioSemana;

function inicio() {

    //obtener la fecha de hoy
    hoy = new Date();

    //mostrar la fecha de hoy
    document.getElementById("fechaHoy").innerHTML = hoy;

    //eventos botones
    //boton calcular edad
    botonEdad = document.getElementById("boton1");
    botonEdad.addEventListener('click',function () {
       
        //recoger valor de la fecha
        fechaUno = document.getElementById("fecha1").value;

        //pasar el valor del input 1 a fecha
        fecha1 = new Date (fechaUno);

        //calcular la edad
        document.getElementById("edad").innerHTML =(hoy.getFullYear() -  fecha1.getFullYear()) ;

    }, false);

    botonDif = document.getElementById("boton2");
    botonDif.addEventListener('click', function(){

        //recoger la fecha
        fechaDos = document.getElementById("fecha2").value;

        //pasar a objeto fecha
        fecha2 = new Date(fechaDos);

       //calcular la diferencia en minutos 1 año = 525600 minutos
                                        //23  = x
        /*var anio = hoy.getFullYear() -  fecha2.getFullYear();
        var minutos = anio * 525600;*/

       //document.getElementById("difmin").innerHTML = hoy.getTime();
        
       //calcular la diferencia en dias
      // document.getElementById("difdias").innerHTML = (hoy.getDay()- fecha2.getDay());

      //calcular diferencia GMT

      document.getElementById("difgmt").innerHTML = fecha2.getUTCHours;






    }, false);





}
