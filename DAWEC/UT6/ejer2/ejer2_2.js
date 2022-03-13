addEventListener('load', inicio, false);

function inicio (){

    var btn = document.querySelector("input");

    btn.addEventListener('click', function(){

        var section = document.querySelector("section");
        var clon = section.cloneNode(true);
        document.body.appendChild(clon)
    }, false);
}