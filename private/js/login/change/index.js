var btn_c_f = document.getElementById('btn_c_f')
var id_password_1 = document.getElementById('id_password_1')
var id_password_2 = document.getElementById('id_password_2')
var error_pass_f = document.getElementById('error_pass_f')


error_pass_f.style.visibility = "hidden"

id_password_1.addEventListener('change', () => {
    if (id_password_1.value.length > 8) {
        if (id_password_1.value != id_password_2.value) {
            error_pass_f.textContent = 'Las contraseñas deben de coincidir'
            error_pass_f.style.visibility = 'visible'
            //console.log("Las contraseñas deben de coincidir")
        } else {
            error_pass_f.textContent = ''
            error_pass_f.style.visibility = 'hidden'
            //console.log("Ahora todo esta bien")
        }
    }
})

id_password_2.addEventListener('change', () => {
    if (id_password_2.value, length > 8) {
        if (id_password_2.value != id_password_1.value) {
            error_pass_f.textContent = 'Las contraseñas deben de coincidir'
            error_pass_f.style.visibility = 'visible'
            //console.log("Las contraseñas deben de coincidir")
        } else {
            error_pass_f.textContent = ''
            error_pass_f.style.visibility = 'hidden'
            //console.log("Ahora todo esta bien")
        }
    }
})


id_password_1.addEventListener('change', () => {
    if (id_password_1.value.length < 8 && id_password_2.value.length < 8) {
        error_pass_f.textContent = 'Las contraseñas deberán ser mayores a 8 caracteres'
        error_pass_f.style.visibility = 'visible'
        console.log("Tamaño menor")
    } else {
        error_pass_f.textContent = ''
        error_pass_f.style.visibility = 'hidden'
        //console.log("Ahora todo esta bien")
    }
})

