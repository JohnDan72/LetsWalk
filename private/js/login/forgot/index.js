var btn_f = document.getElementById('btn_f')
var id_correo_f = document.getElementById('id_correo_f')
var error_mail_f = document.getElementById('error_mail_f')





error_mail_f.style.visibility = "hidden";


btn_f.addEventListener('click', function (e) {
    e.preventDefault();
    //alert(id_correo_f.value)

    if(validarEmail(id_correo_f.value)){
        error_mail_f.style.visibility = "hidden";
    }else{
        error_mail_f.style.visibility = "visible";
    }
    
})

function validarEmail(valor) {

    emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

    if (emailRegex.test(valor)) {
        //campo.style.visibility = "hidden";
        console.log('Esta bien')
        return true;
    } else {
        //campo.style.visibility = "visible";
        console.log('Esta mal')
        return false;
    }
}


