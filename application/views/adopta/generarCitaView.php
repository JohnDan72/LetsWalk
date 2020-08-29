<body>
    <div class="wrapper">
        <div class="main">
            <section class="content">
                <div class="parallax img-uno">
                    <div class="texto-interior">
                        <h2 class="display-4">Generación de cita</h2>
                    </div>
                </div><!-- .parallax -->
            </section>
        </div>
    </div>

    <div class="container mt-5">
        <p class="text-center mt-5">Ahora solo estamos a un paso de generar una cita.</p>
        <p class="text-center">A continuación encontraras la información general de tu
            posible nuevo amigo, asi como un formulario en el que deberás seleccionar la
            fecha y la hora en la que estés seguro que puedas estar presente.</p>


        <div class="row mb-5">
            <div class="col-lg-5 mt-5">
                <h4 class="text-center mb-4">Información detallada del perro</h4>
                <div id="id_perro_x" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?= $fotos_perro;?>
                    </div>
                    <a class="carousel-control-prev" href="#id_perro_x" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#id_perro_x" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="container mt-4">
                    <p><b>Nombre: </b><?= $info_perro['Nombre_Perro']?></p>
                    <p><b>Raza: </b><?= $info_perro['Raza']?></p>
                    <p><b>Genero: </b><?php echo ($info_perro['SexoP']=='M')?"Macho":"Hembra";?></p>
                    <p><b>Edad: </b><?= $info_perro['Edad']?></p>
                    <p><b>Tamaño: </b><?= $info_perro['Tamanio']?></p>
                    <p><b>Beneficiencia a la que pertenece: </b><?= $info_perro['NombreB']?></p>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success mt-5 mb-3" type="button" data-toggle="collapse" data-target="#moreInfo" aria-expanded="false" aria-controls="collapseExample">
                            Más información
                        </button>
                    </div>

                    <div class="collapse" id="moreInfo">
                        <div class="card card-body mt-3">
                            <p><b>Nivel de energia: </b><?= $info_perro['Nivel_E']?></p>
                            <?php
                                if (strtolower($info_perro['Nivel_E']) == 'bajo') {
                                    ?>
                                        <div class="progress mt-n1 mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                    <?php
                                }
                                else if (strtolower($info_perro['Nivel_E']) == 'medio') {
                                    ?>
                                        <div class="progress mt-n1 mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    <?php
                                }
                                else if (strtolower($info_perro['Nivel_E']) == 'alto') {
                                    ?>
                                        <div class="progress mt-n1 mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    <?php
                                }
                                else{
                                    ?>
                                        <div class="progress mt-n1 mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    <?php
                                }
                            ?>
                            
                            <p><b>Sociabilidad: </b><?= $info_perro['Sociabilidad']?></p>
                            <?php
                                if (strtolower($info_perro['Sociabilidad']) == 'poco sociable') {
                                    ?>
                                        <div class="progress mt-n1 mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 33.3%" aria-valuenow="33.3" aria-valuemin="0" aria-valuemax="100">33.3%</div>
                                        </div>
                                    <?php
                                }
                                else if (strtolower($info_perro['Sociabilidad']) == 'sociable') {
                                    ?>
                                        <div class="progress mt-n1 mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 66.6%" aria-valuenow="66.6" aria-valuemin="0" aria-valuemax="100">66.6%</div>
                                        </div>
                                    <?php
                                }
                                else{
                                    ?>
                                        <div class="progress mt-n1 mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                        </div>
                                    <?php
                                }
                            ?>
                            <p><b>Tipo de pelaje: </b><?= $info_perro['Tipo_Pelaje']?></p>
                            <p><b>¿Cuenta con carnet fisico?: </b><?php echo ($info_perro['Carnet_Fisico'])?"Sí":"No";?></p>
                            <p class="text-justify"><b>Descripción: </b><?= $info_perro['DescripcionP']?></p>
                        </div>
                    </div>

                </div>



            </div>
            <div class=" offset-lg-1 col-lg-5 mt-5">
                <h4 class="text-center mb-4">Información sobre la cita</h4>

                <p class="mt-4 text-justify">A continuación deberas elegir la fecha en la te gustaría realizar la visita al centro de adopción en
                    donde se encuentra el perro. Recuerda que debes tener un compromiso maximo, ya que de lo contrario generaras una mala reputación
                    en el sitio.</p>


                <?php
                $attributes_formOpen = ['id' => 'formCita', 'class' => 'needs_validation mt-5'];
                echo form_open(base_url() . 'GenerarcitaController/index/'.$info_perro['Id_Perro'], $attributes_formOpen);
                ?>

                <div class="form-group">
                    <?php
                    //Declaración del arreglo de atributos para el campo
                    $fecha = [
                        'id' => 'fecha_cita',
                        'name' => 'Fecha',
                        'type' => 'date',
                        'class' => 'form-control',
                        'value' => date("Y-m-d"),
                        'required' => 'required'
                    ];
                    //label del campo
                    echo form_label('Fecha para la cita', 'fecha_cita');
                    //Se declara el campo
                    echo form_input($fecha);
                    ?>
                    <small id="emailHelp" class="form-text text-muted">Selecciona la fecha en la que te gustaria agendar la cita</small>
                    <?= form_error('Fecha', '<span class="text-danger text-center">', '</span>'); ?>
                    <span id="errorFecha" class="text-danger text-center"></span>
                </div>

                

                <?php

                $options = array(
                );


                $options_2 = array(
                    'id'            => 'hora_cita',
                    'name'          => 'Hora',
                    'class'         => 'form-control',
                    'required' => 'required',
                    'disabled' => 'true'
                );

                //echo form_dropdown('filtro', $options, 'large', $options_2);

                ?>

                <?php
                echo form_label('Hola de la cita', 'Hora');
                echo form_dropdown('Hora', $options, '10:00 am', $options_2);
                ?>

                

                <small id="emailHelp" class="form-text text-muted">Selecciona la hora de la cita</small>
                <?= form_error('Hora', '<span class="text-danger text-center">', '</span>'); ?>

                <div class="d-flex justify-content-center mt-4">
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#modal_cita">Siguiente</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal_cita" tabindex="-1" aria-labelledby="cita_modal" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="d-flex justify-content-center">
                                    <h5 class="modal-title text-danger text-dark" id="cita_modal">¡Información importante!</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                                <p class="text-justify mt-4">Al presionar el boton "Claro, estoy de acuerdo", aceptas que te enviemos un correo electronico
                                    el cual contendrá un formato que deberas presentar el día de la cita. Es importante que lo imprimas porque
                                    de lo contrario la beneficiencia a la que asistas no podra brindarte el servicio. </p>
                                <p class="text-center mt-5">De corazón a corazon, ¡Gracias!.</p>

                                <p class="text-center mt-n3">Atte.</p>
                                <p class="text-center mt-n3"><b>El equipo de Let's Walk</b></p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button id="buttonSubmit" type="submit" class="btn btn-success">Claro, estoy de acuerdo</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>




    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded', function() {
            var selectHora = document.getElementById('hora_cita')
            var elDate = document.getElementById('fecha_cita')
            var elForm = document.getElementById('formCita')
            var elSubmit = document.getElementById('buttonSubmit')
            var diasInv = <?php echo json_encode($dias_inv);?> //$dias_inv se obtiene del controlador en $dato['dias_inv'] = ...

            
            elDate.addEventListener('change', validaFecha)
            elDate.addEventListener("blur", obtenerFecha)

            function validaFecha(){
                var day = new Date(elDate.value ).getUTCDay()
                // Días 0-6, Domingo = 0, Lunes =1 ...
                //console.log("dia: "+typeof(day)+"\n"+typeof(diasInv)[0])
                elDate.setCustomValidity('') // limpiarlo para evitar pisar el fecha inválida

                //Nota: se añade un +"" para castar a string el valor de day
                if(diasInv.includes(day+"")){ //si la fecha seleccionada es un dia invalido, lo bloquea
                   console.log("set")
                   document.getElementById('errorFecha').textContent = "Dia no disponible, por favor seleccione otro día"
                   //elDate.setCustomValidity('Dia no disponible, por favor seleccione otro día')
                   $('#hora_cita').empty()
                    selectHora.disabled = true
                } else {
                   //se generan los posibles horarios para las citas
                   document.getElementById('errorFecha').textContent = ""
                   getHorariosByDate()
                }
                //if(!elForm.checkValidity()) {elSubmit.click()}
            }

            function obtenerFecha(){
                validaFecha()
            }

            function getHorariosByDate(){
                elDate.setCustomValidity('') // limpiarlo para evitar pisar el fecha inválida

                var myForm = new FormData()
                    myForm.append("Fecha", elDate.value)
                    myForm.append("Id_Benef",<?php echo json_encode($id_benef);?>)

                //console.log("html: "+elDate.value)
                fetch('<?php echo base_url(); ?>GenerarcitaController/getHorariosByDate', {
                    method: 'POST',
                    body: myForm
                })
                .then(function(response) {
                    if (response.ok) {
                        return response.json()
                    } else {
                        throw "Error en la llamada Ajax"
                    }
                })
                .then(function(myJson){
                    //console.log("Respuesta 2\n"+JSON.stringify(myJson))
                    //console.log("Respuesta 2\n"+JSON.stringify(myJson.response))
                    /*Se comienza a tratar la respuesta del CP desde listener de click*/
                    if (typeof(myJson) != 'string') {
                        document.getElementById('errorFecha').textContent = ""

                        selectHora.disabled = false
                        //console.log(myJson)
                        
                        // Se eliminan todas las opciones del antiguo selec
                        $('#hora_cita').empty()

                        // Se inserta cada opción dentro del nuevo select
                        myJson.forEach(function(horario) {
                            $("#hora_cita").append(new Option(horario, horario))
                        })
                        
                    }
                    else{
                        if (myJson.startsWith("Error")) {
                            console.log("set")
                            document.getElementById('errorFecha').textContent = "Día con horario agotado, elige otro día"
                            //elDate.setCustomValidity('Día con horario agotado, intenta otro día')
                            //if(!elForm.checkValidity()) {elSubmit.click()}
                        }

                        console.log(myJson)
                        $('#hora_cita').empty()
                        selectHora.disabled = true
                        
                    }
                    
                })
                .catch(function(error){
                    console.log("Error desde Catch _  "+error)
                    $('#hora_cita').empty()
                    selectHora.disabled = true
                })
            }

            elSubmit.addEventListener('click',function(){
                //alert("Hola")
                elDate.setCustomValidity('') // limpiarlo para evitar pisar el fecha inválida

                var myForm = new FormData()
                    myForm.append("Fecha", elDate.value)
                    myForm.append("Id_Benef",<?php echo json_encode($id_benef);?>)

                //console.log("html: "+elDate.value)
                fetch('<?php echo base_url(); ?>GenerarcitaController/getHorariosByDate', {
                    method: 'POST',
                    body: myForm
                })
                .then(function(response) {
                    if (response.ok) {
                        return response.json()
                    } else {
                        throw "Error en la llamada Ajax"
                    }
                })
                .then(function(myJson){
                    //console.log("Respuesta 2\n"+JSON.stringify(myJson))
                    //console.log("Respuesta 2\n"+JSON.stringify(myJson.response))
                    /*Se comienza a tratar la respuesta del CP desde listener de click*/
                    if (typeof(myJson) != 'string') {
                        document.getElementById('errorFecha').textContent = ""

                        selectHora.disabled = false
                        //console.log(myJson)
                        
                        // Se eliminan todas las opciones del antiguo selec
                        $('#hora_cita').empty()

                        // Se inserta cada opción dentro del nuevo select
                        myJson.forEach(function(horario) {
                            $("#hora_cita").append(new Option(horario, horario))
                        })
                        
                    }
                    else{
                        if (myJson.startsWith("Error")) {
                            console.log("set")
                            document.getElementById('errorFecha').textContent = "Día con horario agotado, elige otro día"
                            //elDate.setCustomValidity('Día con horario agotado, intenta otro día')
                            //if(!elForm.checkValidity()) {elSubmit.click()}
                        }

                        console.log(myJson)
                        $('#hora_cita').empty()
                        selectHora.disabled = true
                        
                    }
                    
                })
                .catch(function(error){
                    console.log("Error desde Catch _  "+error)
                    $('#hora_cita').empty()
                    selectHora.disabled = true
                })
            })
        })
        
        
    </script>