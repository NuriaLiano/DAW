addEventListener('load', function(){

    var primerdiv = document.querySelector("#primer");
    var segundodiv = document.querySelector("#segun");


    primerdiv.addEventListener("mouseover", function(e){
        console.log(e.relatedTarget);
    }, false);

    primerdiv.addEventListener("mouseout", function(a){
        console.log(a.relatedTarget);
    }, false);
}, false);