var mestizo = document.getElementById('mestizo')
var drop_1 = document.getElementById('raza')
var drop_2 = document.getElementById('r_2')
var msg_energia = document.getElementById('msg_energia')
var msg_sociabilidad = document.getElementById('msg_sociabilidad')

var img_1 = document.getElementById("img_1")
var img_2 = document.getElementById("img_2")
var img_3 = document.getElementById("img_3")

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
$('#id_energia').on('input', function(e) {
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

$("#id_energia").on('input', function(e) {
    var val = e.target.value;
    if (val < 25) {
        document.getElementById('id_energia').style.backgroundImage = 'linear-gradient(#f00, #f00)'
        $("#id_energia").css({
            'background-size': '25% 100%'
        });
        msg_energia.innerHTML = "<span class='text_muted span_b'>Nivel de energia: bajo</span>"
        document.getElementById('id_energia').value = '25'


    }
});



/*Otro gato*/
$('#id_sociabilidad').on('input', function(e) {
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

$("#id_sociabilidad").on('input', function(e) {
    var val = e.target.value;
    if (val < 25) {
        document.getElementById('id_sociabilidad').style.backgroundImage = 'linear-gradient(#f00, #f00)'
        $("#id_sociabilidad").css({
            'background-size': '25% 100%'
        });
        document.getElementById('id_sociabilidad').value = '25'
        msg_sociabilidad.innerHTML = "<span class='text_muted span_b'>Nivel de sociabilidad: bajo</span>"


    }
});


$('#img_1').change(function(e) {
    var fileName = e.target.files[0].name;
    $('#id_img1').html(fileName);
});

$('#img_2').change(function(e) {
    var fileName = e.target.files[0].name;
    $('#id_img2').html(fileName);
});

$('#img_3').change(function(e) {
    var fileName = e.target.files[0].name;
    $('#id_img3').html(fileName);
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
        $('#id_img1').html('Foto #1');
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
        $('#id_img2').html('Foto #2');
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
        $('#id_img3').html('Foto #3');

    }


}