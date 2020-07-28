
var stepperForm

document.addEventListener('DOMContentLoaded', function () {
    

    var stepperFormEl = document.querySelector('#stepperForm')
    stepperForm = new Stepper(stepperFormEl, {
        animation: true
    })

    var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
    var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))

    //Variables del primer step
    var Ap_Paterno = document.getElementById('Ap_Paterno')
    var Ap_Materno = document.getElementById('Ap_Materno')
    var Nombre = document.getElementById('Nombre')
    var Fecha_Nacimiento = document.getElementById('Fecha_Nacimiento')
    var Telefono = document.getElementById('Telefono')
    
    var Correo = document.getElementById('Correo')
    var Passwd = document.getElementById('Passwd')
    var Passwd_1 = document.getElementById('Passwd_1')
    //Correo, Passwd, Passwd_1

    //console.log("Tamaño date: " + Fecha_Nacimiento.value.length)





    var inputPasswordForm = document.getElementById('inputPasswordForm')
    var form = stepperFormEl.querySelector('.bs-stepper-content form')

    btnNextList.forEach(function (btn) {
        btn.addEventListener('click', function () {
            stepperForm.next()
        })
    })

    stepperFormEl.addEventListener('show.bs-stepper', function (event) {
        form.classList.remove('was-validated')
        var nextStep = event.detail.indexStep
        var currentStep = nextStep

        if (currentStep > 0) {
            currentStep--
        }

        var stepperPan = stepperPanList[currentStep]
        
        switch(currentStep){
            /*Solo se pueden trabajar con Steps que tengan un step siguiente. Si es el último, no funciona*/
            case 0: 
                if (!Ap_Paterno.value.length || !Ap_Materno.value.length || !Nombre.value.length || !Fecha_Nacimiento.value.length || !Telefono.value.length ||
                    !(Fecha_Nacimiento.value.length == 10) ) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                }
                else if(!(Telefono.value.length == 10) || !($.isNumeric(Telefono.value)) ){
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('errorTel').style.display = 'block';
                }
                else{
                    document.getElementById('errorTel').style.display = 'none';
                    
                }

                var Sexo = ($("input[name='Sexo']:checked").val()) ? $("input[name='Sexo']:checked").val() : 0;
                if ((Sexo == 'M') || (Sexo == 'H')) {
                    document.getElementById('errorSex').style.display = 'none';
                }
                else{
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('errorSex').style.display = 'block';
                }
            break;
        }

    })
})


var password_0 = document.getElementById("Passwd")
    password_1 = document.getElementById("Passwd_1")
    button = document.getElementById("send")
    passw_msg = document.getElementById("error_pass_1");

    password_1.addEventListener('change', ()=>{
        if(password_0.value != password_1.value){
            passw_msg.textContent = 'Las contraseñas deben de coincidir'
            passw_msg.style.display = 'block'
            //console.log("Las contraseñas deben de coincidir")
        }else{
            passw_msg.textContent =''
            passw_msg.style.display = 'none'
            //console.log("Ahora todo esta bien")
        }
    })

    password_0.addEventListener('change', () => {
        if(password_1.value != password_0.value){
            passw_msg.textContent = 'Las contraseñas deben de coincidir'
            passw_msg.style.display = 'block'
            //console.log("Las contraseñas deben de coincidir")
        }else{
            passw_msg.textContent =''
            passw_msg.style.display = 'none'
            //console.log("Ahora todo esta bien")
        }
        
    })

    function soloNumeros(e){
            tecla = (document.all) ? e.keyCode : e.which;
            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8 || tecla == 13) {
                return true;
            }
            // Patron de entrada, en este caso solo acepta numeros y letras
            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
    }

/*function validatePassword_0() {

    if (password_0.value != confirm_password_0.value) {
        confirm_password_0.setCustomValidity("Las contraseñas deben coincidir");
    } else {
        confirm_password_0.setCustomValidity('');
    }
}
password_0.onchange = validatePassword_0;
confirm_password_0.onkeyup = validatePassword_0; F*/


