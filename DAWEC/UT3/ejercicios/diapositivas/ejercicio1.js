

function es_par(num) {
    let par = false;
    if (num % 2) {
        par = true;
        return true;
    }
}

var par = es_par(4)
document.write(par);