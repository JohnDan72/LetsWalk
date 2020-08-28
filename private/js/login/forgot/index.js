document.addEventListener('DOMContentLoaded', function() {
    var btn_f = document.getElementById('btn_f')
    var id_correo_f = document.getElementById('id_correo_f')
    var error_mail_f = document.getElementById('error_mail_f')





    error_mail_f.style.visibility = "hidden";




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


})