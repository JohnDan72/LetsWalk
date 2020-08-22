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
                        <div class="carousel-item active">
                            <img src="<?= base_url() ?>private/img_perros/1.png" class="d-block w-100 img-circle" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url() ?>private/img_perros/2.jpg" class="d-block w-100 img-circle" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url() ?>private/img_perros/3.jpg" class="d-block w-100 img-circle" alt="...">
                        </div>
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
                    <p><b>Nombre: </b>Junior</p>
                    <p><b>Raza: </b>mestizo</p>
                    <p><b>Genero: </b>macho</p>
                    <p><b>Edad: </b>18 meses</p>
                    <p><b>Tamaño: </b>pequeño</p>
                    <p><b>Beneficiencia a la que pertenece: </b>Angeles peludos</p>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success mt-5 mb-3" type="button" data-toggle="collapse" data-target="#moreInfo" aria-expanded="false" aria-controls="collapseExample">
                            Más información
                        </button>
                    </div>

                    <div class="collapse" id="moreInfo">
                        <div class="card card-body mt-3">
                            <p><b>Nivel de energia: </b>Alto</p>
                            <div class="progress mt-n1 mb-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                            <p><b>Sociabilidad: </b>poco</p>
                            <div class="progress mt-n1 mb-2">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                            </div>
                            <p><b>Tipo de pelaje: </b>rizado</p>
                            <p><b>¿Cuenta con carnet fisico?: </b>Sí</p>
                            <p class="text-justify"><b>Descripción: </b>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Obcaecati natus, nobis ut necessitatibus consequatur perspiciatis, et labore doloribus
                                voluptatum debitis accusamus vel aliquid, totam odit dolorem sapiente provident. Debitis,
                                eaque.</p>
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
                $attributes_formOpen = ['id' => 'formCita', 'class' => 'needs_validation mt-5', 'onSubmit' => 'return false', 'novalidate' => 'TRUE'];
                echo form_open(base_url() . '', $attributes_formOpen, 'required');
                ?>

                <div class="form-group">
                    <?php
                    //Declaración del arreglo de atributos para el campo
                    $fecha = [
                        'id' => 'fecha_cita',
                        'name' => 'fecha_cita',
                        'type' => 'date',
                        'class' => 'form-control',
                        'value' => date("Y-m-d"),
                    ];
                    //label del campo
                    echo form_label('Fecha para la cita', 'fecha_cita');
                    //Se declara el campo
                    echo form_input($fecha);
                    ?>
                    <small id="emailHelp" class="form-text text-muted">Selecciona la fecha en la que te gustaria agendar la cita</small>
                </div>

                <?php

                $options = array(
                    '10:00 am'     =>  '10:00 am',
                    '10:30 am'     =>  '10:30 am',
                    '11:00 am'     =>  '11:00 am',
                    '12:00 pm'     =>  '12:00 pm',
                    '12:30 pm'     =>  '12:30 pm',
                    '01:00 pm'     =>  '01:00 pm',
                    '01:30 pm'     =>  '01:30 pm',
                    '02:00 pm'     =>  '02:00 pm',
                    '02:30 pm'     =>  '02:30 pm',
                    '03:00 pm'     =>  '03:00 pm',
                    '03:30pam'     =>  '03:30 pm'
                );


                $options_2 = array(
                    'id'            => 'hora_cita',
                    'class'         => 'form-control'
                );

                //echo form_dropdown('filtro', $options, 'large', $options_2);

                ?>

                <?php
                echo form_label('Hola de la cita', 'hora_cita');
                echo form_dropdown('hora_cita', $options, '10:00 am', $options_2)
                ?>




                <small id="emailHelp" class="form-text text-muted">Selecciona la hora de la cita</small>

                <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-success" data-toggle="modal" data-target="#modal_cita">Siguiente</button>
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
                                <button type="button" class="btn btn-success">Claro, estoy de acuerdo</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>