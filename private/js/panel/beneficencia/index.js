var mestizo = document.getElementById('mestizo')
var drop_1 = document.getElementById('raza')
var drop_2 = document.getElementById('r_2')
drop_2.style.visibility = 'hidden'
var msg_energia = document.getElementById('msg_energia')
var msg_sociabilidad = document.getElementById('msg_sociabilidad')

var img_1 = document.getElementById("Nombre_Foto_File")
var img_2 = document.getElementById("Nombre_Foto_File2")
var img_3 = document.getElementById("Nombre_Foto_File3")

var p_1 = document.getElementById('preview_1')
var p_2 = document.getElementById('preview_2')
var p_3 = document.getElementById('preview_3')

p_1.style.display = "none"
p_2.style.display = "none"
p_3.style.display = "none"

//drop_2.style.visibility = "hidden"

//var barrita = document.getElementById('formControlRange')


mestizo.addEventListener('input', () => {
    if (mestizo.checked) {

        //alert("Esta madre esta parada")
        drop_2.style.visibility = 'visible'
    } else {
        //alert("Esta madre no esta parada")
        drop_2.style.visibility = 'hidden'
        drop_2.value = null
            //alert(drop_2.value)

    }
})




/*Contreol de rangos*/
$('#Nivel_E').on('input', function(e) {
    var min = e.target.min,
        max = e.target.max,
        val = e.target.value;
    //console.log("value: " + val)

    if (val < 25) {

        $(e.target).css({
            'background-image': 'linear-gradient(#DC3545, #DC3545)'
        });
        $(e.target).css({
            'background-size': '25% 100%'
        });

        msg_energia.innerHTML = "<span class='text_muted text-center span_b'>Nivel de energia: bajo</span>"
    }
    if (val == 25) {
        $(e.target).css({
            'background-image': 'linear-gradient(#DC3545, #DC3545)'

        });

        msg_energia.innerHTML = "<span class='text_muted text-center span_b'>Nivel de energia: bajo</span>"
    } else if (val == 50) {
        $(e.target).css({
            'background-image': 'linear-gradient(#ffa726, #ffa726)'
        });
        msg_energia.innerHTML = "<span class='text_muted text-center span_b'>Nivel de energia: medio</span>"
    } else if (val == 75) {
        $(e.target).css({
            'background-image': 'linear-gradient(#FFC107, #FFC107)'
        });
        msg_energia.innerHTML = "<span class='text_muted text-center span_b'>Nivel de energia: alto</span>"
    } else {
        $(e.target).css({
            'background-image': 'linear-gradient(#28A745, #28A745)'
        });
        msg_energia.innerHTML = "<span class='text_muted text-center span_b'>Nivel de energia: muy alto</span>"
    }


    $(e.target).css({
        'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
    });
}).trigger('input');

$("#Nivel_E").on('input', function(e) {
    var val = e.target.value;
    if (val < 25) {
        document.getElementById('Nivel_E').style.backgroundImage = 'linear-gradient(#f00, #f00)'
        $("#Nivel_E").css({
            'background-size': '25% 100%'
        });
        msg_energia.innerHTML = "<span class='text_muted span_b'>Nivel de energia: bajo</span>"
        document.getElementById('Nivel_E').value = '25'


    }
});



/*Otro gato*/
$('#Sociabilidad').on('input', function(e) {
    var min = e.target.min,
        max = e.target.max,
        val = e.target.value;
    //console.log("value: " + val)

    if (val < 25) {

        $(e.target).css({
            'background-image': 'linear-gradient(#DC3545, #DC3545)'
        });
        $(e.target).css({
            'background-size': '25% 100%'
        });

        msg_sociabilidad.innerHTML = "<span class='text_muted span_b'>Nivel de sociabilidad: bajo</span>"

    }
    if (val == 25) {
        $(e.target).css({
            'background-image': 'linear-gradient(#DC3545, #DC3545)'
        });
        msg_sociabilidad.innerHTML = "<span class='text_muted span_b'>Nivel de sociabilidad: bajo</span>"
    } else if (val == 50) {
        $(e.target).css({
            'background-image': 'linear-gradient(#ffa726, #ffa726)'
        });
        msg_sociabilidad.innerHTML = "<span class='text_muted span_b'>Nivel de sociabilidad: medio</span>"
    } else if (val == 75) {
        $(e.target).css({
            'background-image': 'linear-gradient(#FFC107, #FFC107)'
        });
        msg_sociabilidad.innerHTML = "<span class='text_muted span_b'>Nivel de sociabilidad: alto</span>"
    } else {
        $(e.target).css({
            'background-image': 'linear-gradient(#28A745, #28A745)'
        });
        msg_sociabilidad.innerHTML = "<span class='text_muted span_b'>Nivel de sociabilidad: muy alto</span>"
    }


    $(e.target).css({
        'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
    });
}).trigger('input');

$("#Sociabilidad").on('input', function(e) {
    var val = e.target.value;
    if (val < 25) {
        document.getElementById('Sociabilidad').style.backgroundImage = 'linear-gradient(#f00, #f00)'
        $("#Sociabilidad").css({
            'background-size': '25% 100%'
        });
        document.getElementById('Sociabilidad').value = '25'
        msg_sociabilidad.innerHTML = "<span class='text_muted span_b'>Nivel de sociabilidad: bajo</span>"


    }
});


$('#Nombre_Foto_File').change(function(e) {
    var fileName = e.target.files[0].name;
    $('#Nombre_Foto_File').html(fileName);
});

$('#Nombre_Foto_File2').change(function(e) {
    var fileName = e.target.files[0].name;
    $('#Nombre_Foto_File2').html(fileName);
});

$('#Nombre_Foto_File3').change(function(e) {
    var fileName = e.target.files[0].name;
    $('#Nombre_Foto_File3').html(fileName);
});





img_1.onchange = function(e) {
    let reader = new FileReader();

    if (img_1.files[0].size <= 5000000) {
        document.getElementById('msg_img1').innerHTML = ""
        reader.onload = function() {
            let preview = document.getElementById('preview_1'),
                image = document.createElement('img');



            image.src = reader.result;
            preview.style.display = "block"
            preview.innerHTML = '';
            preview.append(image);
            //alert('Tamaño: ' + img_1.files[0].size)
        };

        reader.readAsDataURL(e.target.files[0]);

    } else {
        p_1.style.display = "none"
        document.getElementById('msg_img1').innerHTML = "<span class='span_b text-danger'>El tamaño maximo es de 5 mb</span>"
        img_1.value = ""
        $('#Nombre_Foto_File').html('Foto #1');
    }


}


img_2.onchange = function(e) {
    let reader = new FileReader();

    if (img_2.files[0].size <= 5000000) {
        document.getElementById('msg_img2').innerHTML = ""

        reader.onload = function() {
            let preview = document.getElementById('preview_2'),
                image = document.createElement('img');

            image.src = reader.result;
            preview.style.display = "block"
            preview.innerHTML = '';
            preview.append(image);
        };

        reader.readAsDataURL(e.target.files[0]);

    } else {
        p_2.style.display = "none"
        document.getElementById('msg_img2').innerHTML = "<span class='span_b text-danger'>El tamaño maximo es de 5 mb</span>"
        img_2.value = ""
        $('#Nombre_Foto_File2').html('Foto #2');
    }


}

img_3.onchange = function(e) {
    let reader = new FileReader();

    if (img_3.files[0].size <= 5000000) {
        document.getElementById('msg_img3').innerHTML = ""
        reader.onload = function() {
            let preview = document.getElementById('preview_3'),
                image = document.createElement('img');


            image.src = reader.result;
            preview.style.display = "block"
            preview.innerHTML = '';
            preview.append(image);
        };

        reader.readAsDataURL(e.target.files[0]);

    } else {
        p_3.style.display = "none"
        document.getElementById('msg_img3').innerHTML = "<span class='span_b text-danger'>El tamaño maximo es de 5 mb</span>"
        img_3.value = ""
        $('#Nombre_Foto_File3').html('Foto #3');

    }


}

window.addEventListener('load', (event) => {
    console.log('The page has fully loaded');
    window.scroll({
        top: 800,
        behavior: 'smooth'
    });
});

var btn = document.getElementById("add_btn");
var div_dog = document.getElementById('ADD_DOG')
btn.addEventListener("click", () => {
    //alert("Presionado")
    window.scroll({
        top: 400,
        behavior: 'smooth'
    });
})