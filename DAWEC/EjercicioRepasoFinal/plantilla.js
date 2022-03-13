
//crear objeto
class PedidosObj{

    constructor(nPedido, descripcion, pago){
        this.nPedido = nPedido;
        this.descripcion = descripcion;
        this.pago = pago;
    }

    set nPedido (num){
        this.nPedido = num;
    }
    set descripcion (array){
        this.descripcion = array;
    }
    set total (num) {
        this.total = num;
    }
    set pago (formaPago){
        this.pago = formaPago;
    }
    get nPedido (){
        return this.nPedido;
    }
    get descripcion (){
        return this.descripcion;
    }
    get total (){
        return this.total;
    }
    get pago (){
        return this.pago;
    }

    ver (){
        //solo es valido si la descripcion es un array
        if(Array.isArray(this.descripcion)){
            return "El pedido " + this.nPedido + " con descripcion " + this.descripcion + " suma un total de " + this.total + " y su forma de pago " + this.pago;
        }else{
            return "La descripcion no es un array";
        }
    }
    calcular(cantidad, precioUnidad){
        //se lo pasa a la propiedad total
        this.total = cantidad * precioUnidad;
        return this.total;
    }

}