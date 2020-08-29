var stepperForm
var stepperForm_1

document.addEventListener('DOMContentLoaded', function() {


    var stepperFormEl = document.querySelector('#stepperForm')
    stepperForm = new Stepper(stepperFormEl, {
        animation: true
    })

    var btnNextList = [].slice.call(stepperFormEl.querySelectorAll('.btn-next-form'))
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

    btnNextList.forEach(function(btn) {
        btn.addEventListener('click', function() {
            stepperForm.next()
        })
    })

    stepperFormEl.addEventListener('show.bs-stepper', function(event) {
        form.classList.remove('was-validated')
        var nextStep = event.detail.indexStep
        var currentStep = nextStep

        if (currentStep > 0) {
            currentStep--
        }

        var stepperPan = stepperPanList[currentStep]

        switch (currentStep) {
            /*Solo se pueden trabajar con Steps que tengan un step siguiente. Si es el último, no funciona*/
            case 0:
                if (!Ap_Paterno.value.length || !Ap_Materno.value.length || !Nombre.value.length || !Fecha_Nacimiento.value.length || !Telefono.value.length ||
                    !(Fecha_Nacimiento.value.length == 10)) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                } else if (!(Telefono.value.length == 10) || !($.isNumeric(Telefono.value))) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('errorTel').style.display = 'block';
                } else {
                    document.getElementById('errorTel').style.display = 'none';

                }

                var Sexo = ($("input[name='Sexo']:checked").val()) ? $("input[name='Sexo']:checked").val() : 0;
                if ((Sexo == 'M') || (Sexo == 'H')) {
                    document.getElementById('errorSex').style.display = 'none';
                } else {
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('errorSex').style.display = 'block';
                }
                break;
        }

    })
})


var password_0 = document.getElementById("Passwd_b")
password_1 = document.getElementById("Passwd_1_b")
button = document.getElementById("send")
passw_msg = document.getElementById("error_pass_1_b");

password_1.addEventListener('change', () => {
    if (password_0.value != password_1.value) {
        passw_msg.textContent = 'Las contraseñas deben de coincidir'
        passw_msg.style.display = 'block'
            //console.log("Las contraseñas deben de coincidir")
    } else {
        passw_msg.textContent = ''
        passw_msg.style.display = 'none'
            //console.log("Ahora todo esta bien")
    }
})

password_0.addEventListener('change', () => {
    if (password_1.value != password_0.value) {
        passw_msg.textContent = 'Las contraseñas deben de coincidir'
        passw_msg.style.display = 'block'
            //console.log("Las contraseñas deben de coincidir")
    } else {
        passw_msg.textContent = ''
        passw_msg.style.display = 'none'
            //console.log("Ahora todo esta bien")
    }

})

function soloNumeros(e) {
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


//----------------------



var nombre_b = document.getElementById('NombreB')
var TelefonoB = document.getElementById('TelefonoB')
var calle = document.getElementById('Calle')
var numExterior = document.getElementById('Num_Ext')
var CP = document.getElementById('CP')
var colonia = document.getElementById('Colonia')
var localidad = document.getElementById('Localidad')
var municipio = document.getElementById('Municipio')
var bandCP = false

//calle.disabled = true
//numExterior.disabled = true
colonia.disabled = true
localidad.disabled = true
municipio.disabled = true



document.addEventListener('DOMContentLoaded', function() {


    var stepperFormEl_1 = document.querySelector('#stepperForm_1')
    stepperForm_1 = new Stepper(stepperFormEl_1, {
        animation: true
    })

    var btnNextList = [].slice.call(stepperFormEl_1.querySelectorAll('.btn-next-form'))
    var stepperPanList = [].slice.call(stepperFormEl_1.querySelectorAll('.bs-stepper-pane'))

    //Variables del primer step
    var Ap_Paterno_b = document.getElementById('Ap_Paterno_b')
    var Ap_Materno_b = document.getElementById('Ap_Materno_b')
    var Nombre_b = document.getElementById('Nombre_b')
    var Fecha_Nacimiento_b = document.getElementById('Fecha_Nacimiento_b')
    var Telefono_b = document.getElementById('Telefono_b')
    var TelefonoB = document.getElementById('TelefonoB')
    var error_cp = document.getElementById('error_cp')
    var DescripcionB = document.getElementById('DescripcionB')

    //console.log("Tamaño date: " + Fecha_Nacimiento.value.length)


    var form = stepperFormEl_1.querySelector('.bs-stepper-content form')

    btnNextList.forEach(function(btn) {
        btn.addEventListener('click', function() {
            stepperForm_1.next()

        })
    })

    stepperFormEl_1.addEventListener('show.bs-stepper', function(event) {
        form.classList.remove('was-validated')
        var nextStep = event.detail.indexStep
        var currentStep = nextStep

        if (currentStep > 0) {
            currentStep--
        }

        var stepperPan = stepperPanList[currentStep]
            //console.log("currentStep: "+currentStep)
        switch (currentStep) {
            /*Solo se pueden trabajar con Steps que tengan un step siguiente. Si es el último, no funciona*/
            case 0:
                if (!Ap_Paterno_b.value.length || !Ap_Materno_b.value.length || !Nombre_b.value.length || !Fecha_Nacimiento_b.value.length || !Telefono_b.value.length ||
                    !(Fecha_Nacimiento_b.value.length == 10)) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                } else if (!(Telefono_b.value.length == 10) || !($.isNumeric(Telefono_b.value))) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('errorTel_b').style.display = 'block';
                } else {
                    document.getElementById('errorTel_b').style.display = 'none';

                }

                var Sexo = ($("input[name='Sexo_b']:checked").val()) ? $("input[name='Sexo_b']:checked").val() : 0;
                if ((Sexo == 'M') || (Sexo == 'H')) {
                    document.getElementById('errorSex_b').style.display = 'none';
                } else {
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('errorSex_b').style.display = 'block';
                }
                break;

            case 1:
                if (!nombre_b.value.length || !TelefonoB.value.length || !CP.value.length || !localidad.value.length || !municipio.value.length ||
                    !DescripcionB.value.length || !calle.value.length || !numExterior.value.length) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                        //console.log("Bro, la regaste!")
                } else if (!(TelefonoB.value.length == 10) || !($.isNumeric(TelefonoB.value))) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('errorTelB').style.display = 'block';
                    //console.log("Bro, la regaste!")
                } else {
                    document.getElementById('errorTelB').style.display = 'none';
                    //console.log("Bro, no la regaste!")
                }

                if (!(CP.value.length == 5) || !($.isNumeric(CP.value)) || !bandCP) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('error_cp').style.display = 'block';
                    //console.log("Bro, la regaste!")

                } else {
                    document.getElementById('error_cp').style.display = 'none';
                    //console.log("Bro, no la regaste!")
                }
                if (!(DescripcionB.value.length <= 200)) {
                    event.preventDefault()
                    form.classList.add('was-validated')
                    document.getElementById('error_descripcion_b').style.display = 'block';
                    DescripcionB.style.borderColor = "red";
                } else {
                    document.getElementById('error_descripcion_b').style.display = 'none';
                    DescripcionB.style.borderColor = "green";
                }

                break;


        }
    })
})

//setInterval(function(){
//    console.log("Step: "+stepperForm_1._currentIndex)
//},2000)

/*Listener del botón de search se cambió a la vista para trabajar con fetch y la info del CP*/





var desplazamiento_fecha = 30; //dias de desplazamiento de fechas
var fecha = new Date();
//fecha = sumarDias(fecha, 1)
var anio = fecha.getFullYear() - 100;
var dia = 1;

var _mes = 01; //viene con valores de 0 al 11
_mes = _mes; //ahora lo tienes de 1 al 12
if (_mes < 10) { //ahora le agregas un 0 para el formato date{
    var mes = "0" + _mes;
} else {
    var mes = _mes.toString;
}

if (dia < 10) { //ahora le agregas un 0 para el formato date
    var dia_2 = "0" + dia;
} else {
    var dia_2 = dia;
}
//console.log("dia: "+fecha.getDate());
//console.log("dia + 1: "+(fecha.getDate() + 1));
let fecha_minimo = anio + '-' + mes + '-' + dia_2; // Nueva variable
let fecha_maximo = fecha;
fecha_maximo.setDate(fecha.getDate() + desplazamiento_fecha); //desplazamiento de 30 dias
var mes_max = 12

if (mes_max < 10) { //ahora le agregas un 0 para el formato date
    mes_max = "0" + mes_max;
} else {
    mes_max = mes_max;
}

fecha_maximo = (fecha_maximo.getFullYear() - 10) + '-' + mes_max + '-' + '31'

console.log(fecha_maximo)


document.getElementById("Fecha_Nacimiento").value = fecha_maximo
document.getElementById("Fecha_Nacimiento").setAttribute('min', fecha_minimo);
document.getElementById("Fecha_Nacimiento").setAttribute('max', fecha_maximo);

document.getElementById("Fecha_Nacimiento_b").value = fecha_maximo
document.getElementById("Fecha_Nacimiento_b").setAttribute('min', fecha_minimo);
document.getElementById("Fecha_Nacimiento_b").setAttribute('max', fecha_maximo);


function sumarDias(fecha, dias) {
    fecha.setDate(fecha.getDate() + dias);
    return fecha;
}