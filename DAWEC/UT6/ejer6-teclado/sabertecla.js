addEventListener('load', inicio, false);

function inicio (){
    let input = document.querySelector('input');
let log = document.querySelector('#log');

input.addEventListener('keypress', function(e) {
  log.innerText = `Key pressed: ${String.fromCharCode(e.charCode)}\ncharCode: ${e.charCode}`;
});
}