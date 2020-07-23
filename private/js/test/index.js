
var stepper
document.addEventListener('DOMContentLoaded', function () {
    stepper = new Stepper(document.querySelector('.bs-stepper'), {
        animation: true
    })
})



var next_1 = document.getElementById("next_1");
var next_2 = document.getElementById("next_2");
var back_2 = document.getElementById("back_2");
var back_3 = document.getElementById("back_3");


next_1.addEventListener("click", () => {
    window.scroll({
        top: 500,
        behavior: 'smooth'
    });
})

next_2.addEventListener("click", () => {
    window.scroll({
        top: 500,
        behavior: 'smooth'
    });
})

back_2.addEventListener("click", () => {
    window.scroll({
        top: 500,
        behavior: 'smooth'
    });
})

back_3.addEventListener("click", () => {
    window.scroll({
        top: 500,
        behavior: 'smooth'
    });
})
