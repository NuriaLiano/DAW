class Articulo {
    constructor (categoria, codigo, descripcion, pvp){
        this.categoria = categoria;
        this.codigo = codigo;
        this.descripcion = descripcion;
        this.pvp = pvp;
    }

    calcIva (precio){
        var ivaTot = (precio * 21)/100;
        return ivaTot;
    }

    totalPrecio (impIva, pvp){
        var tot = impIva + pvp
        return tot;
    }
}