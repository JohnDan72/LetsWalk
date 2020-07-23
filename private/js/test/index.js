
var stepper
document.addEventListener('DOMContentLoaded', function() {
    stepper = new Stepper(document.querySelector('.bs-stepper'), {
        animation: true
    })
})

/*$(document).ready(function() {
    $('#next_1, #next_2').click(function() { //referimos el elemento ( clase o identificador de acción )
        $('html, body').animate({
            scrollTop: 500
        }, 'slow'); //seleccionamos etiquetas,clase o identificador destino, creamos animación hacia top de la página.
        return false;
    });
});*/

var next_1 = document.getElementById("next_1");
var next_2 = document.getElementById("next_2");
var back_1 = document.getElementById("back_1");
var back_2 = document.getElementById("back_2");


var div_1 = document.getElementById("part_1");
var div_2 = document.getElementById("part_2");
var div_3 = document.getElementById("part_3");

var main = document.getElementById("main");


next_1.addEventListener("click", ()=>{
    main.scrollTop = 0;
})
