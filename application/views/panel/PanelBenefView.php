<body>
    <div class="wrapper">
        <div class="main">
            <section class="content">
                <div class="parallax img-uno">
                    <div class="texto-interior">
                        <h2 class="display-4">Panel de control</h2>
                    </div>
                </div><!-- .parallax -->
            </section>
        </div>
    </div>


    <div class="d-flex justify-content-center">
        <img src="https://i.ibb.co/hYFgNGG/Logo-2.png" alt="" width="300px">
    </div>




    <div class="container mb-5">
        <p class="text-center mb-5">Controla tus citas, modifica tu información personal y de inicio de sesión.</p>
        <div class="accordion mb-5" id="Panel_Benf">
            <div class="card">
                <div class="card-header pointer" id="add_dog">

                    <p class="text-left collapse_title" data-toggle="collapse" data-target="#ADD_DOG" aria-expanded="true" aria-controls="ADD_DOG">
                        <img src="<?= base_url() ?>private/media/icons/pata.svg" alt="" width="24px" class="ml-3 mr-2">
                        Agregar perro nuevo
                    </p>
                </div>

                <div id="ADD_DOG" class="collapse" aria-labelledby="add_dog" data-parent="#Panel_Benf" >
                    <?php 
                        if(isset($actDatosCorrect)){
                            ?>
                                <div class="d-flex justify-content-center mt-4">
                                    <font size="3" color="#43a047">
                                                                REGISTRO COMPLETADO CORRECTAMENTE
                                                            </font>
                                </div>
                            <?php
                        }
                        elseif (isset($actDatosIncorrect)) {
                            ?>
                                <div class="d-flex justify-content-center mt-4">
                                    <font size="3" color="#d32f2f">
                                                                ERROR EN FORMULARIO, INTENTA DE NUEVO
                                                            </font>
                                </div>
                            <?php
                        }
                    ?>
                    <div class="card-body">

                        <!--Apertura del form-->
                        <?php
                        $attributes_formOpen = ['id' => 'formAddPerro', 'class' => 'needs_validation'];
                        echo form_open_multipart(base_url() . 'PanelControl/PBenefController', $attributes_formOpen, 'required');

                        $vistaActiva = array(//ventana activa para benef en adjuntar archivos
                          'name'      =>  'Activa',
                          'id'        =>  'Activa_Id',
                          'value'     =>  1,
                          'required'  => 'required',
                          'class'     =>  'validate',
                          'style'     => 'display:none'
                        );
                        echo form_input($vistaActiva);
                        ?>



                        <div class="container">

                            <h5 class="text-center mt-5">Información general</h5>

                            <div class="form-group form-row">
                                <div class="col-lg-4 col-sm-12 mt-sm-4">
                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $nombre_p = [
                                        'id' => 'Nombre_Perro',
                                        'name' => 'Nombre_Perro',
                                        'type' => 'text',
                                        'class' => 'form-control',
                                        'placeholder' => 'Ingresa el nombre del perro',
                                        'required' => 'required'
                                    ];
                                    //label del campo
                                    echo form_label('Nombre del perro <span class="text-danger font-weight-bold">*</span>', 'Nombre_Perro');
                                    //Se declara el campo
                                    echo form_input($nombre_p,(isset($actDatosCorrect)) ? "" : ($this->input->post('Nombre_Perro')),'');
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Nombre_Perro', '<span class="text-danger text-center">', '</span>') ?>
                                </div>

                                <div class="col-lg-4 col-sm-12 mt-sm-4">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $options_00 = [
                                        'F'      => 'Hembra',
                                        'M' => 'Macho',
                                    ];

                                    $options_01 = array(
                                        'id'       => 'SexoP',
                                        'class' => 'custom-select'
                                    );
                                    //label del campo
                                    echo form_label('Sexo <span class="text-danger font-weight-bold">*</span>', 'SexoP');
                                    //Se declara el campo
                                    echo form_dropdown('SexoP', $options_00, 'null', $options_01);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('SexoP', '<span class="text-danger text-center">', '</span>') ?>
                                </div>

                                <div class="col-lg-4 col-sm-12 mt-sm-4">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $options_10 = [
                                        '1 mes'         =>      '1 mes',
                                        '2 meses'       =>      '2 meses',
                                        '3 meses'       =>      '3 meses',
                                        '2 trimestres'  =>      '2 trimestres',
                                        '3 trimestres'  =>      '3 trimestres',
                                        '1 año'         =>      '1 año',
                                        '2 años'         =>      '2 años',
                                        '3 años'         =>      '3 años',
                                        '4 años'         =>      '4 años',
                                        '5 años'         =>      '5 años',
                                        '6 años'         =>      '6 años',
                                        '7 años'         =>      '7 años',
                                        '8 años'         =>      '8 años',
                                        '9 años'         =>      '9 años',
                                        '10 años'         =>      '10 años',
                                        'más de 10 años'         =>      'más de 10 años',

                                    ];

                                    $options_11 = array(
                                        'id'       => 'Edad',
                                        'class' => 'custom-select'
                                    );
                                    //label del campo
                                    echo form_label('Edad <span class="text-danger font-weight-bold">*</span>', 'Edad');
                                    //Se declara el campo
                                    echo form_dropdown('Edad', $options_10, 'null', $options_11);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Edad', '<span class="text-danger text-center">', '</span>') ?>
                                </div>

                                <div class="col-lg-4 col-sm-12 mt-sm-4 d-flex justify-content-center align-items-center">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="mestizo" name="Mestizo">
                                        <label class="form-check-label" for="mestizo">¿El perro es mestizo?</label>
                                    </div>
                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Raza', '<span class="text-danger text-center">', '</span>') ?>
                                </div>



                                <div class="col-lg-4 col-sm-12 mt-sm-4" id="r_1">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $options_201 = [
                                        'Labrador'          => 'Labrador',
                                        'Pug'               => 'Pug',
                                        'Buldog'            => 'Buldog',
                                        'Schnauzer'         => 'Schnauzer',
                                        'Husky'             => 'Husky',
                                        'Pastor Alemán'     => 'Pastor Alemán',
                                        'Chihuahua'         => 'Chihuahua',
                                        'Pitbull'           => 'Pitbull '
                                    ];

                                    $options_211 = array(
                                        'id'       => 'Raza',
                                        'class' => 'custom-select'
                                    );
                                    //label del campo
                                    echo form_label('Raza <span class="text-danger font-weight-bold">*</span>', 'Raza');
                                    //Se declara el campo
                                    echo form_dropdown('Raza', $options_201, 'null', $options_211);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Raza', '<span class="text-danger text-center">', '</span>') ?>
                                </div>


                                <div class="col-lg-4 col-sm-12 mt-sm-4" id="r_2">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $options_202 = [
                                        'Labrador'          => 'Labrador',
                                        'Pug'               => 'Pug',
                                        'Buldog'            => 'Buldog',
                                        'Schnauzer'         => 'Schnauzer',
                                        'Husky'             => 'Husky',
                                        'Pastor Alemán'     => 'Pastor Alemán',
                                        'Chihuahua'         => 'Chihuahua',
                                        'Pitbull'           => 'Pitbull '
                                    ];

                                    $options_212 = array(
                                        'id'       => 'Raza_2',
                                        'class' => 'custom-select'
                                    );
                                    //label del campo
                                    echo form_label('Segunda raza <span class="text-danger font-weight-bold">*</span>', 'Raza_2');
                                    //Se declara el campo
                                    echo form_dropdown('Raza_2', $options_202, 'null', $options_212);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Raza_2', '<span class="text-danger text-center">', '</span>') ?>
                                </div>

                                <div class="col-lg-6 col-sm-12 mt-sm-4">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $options_30 = [
                                        'Mini'         =>      'Mini',
                                        'Pequeño' => 'Pequeño',
                                        'Mediano' => 'Mediano',
                                        'Grande' => 'Grande',
                                        'Gigante' => 'Gigante'
                                    ];

                                    $options_31 = array(
                                        'id'       => 'Tamanio',
                                        'class' => 'custom-select'
                                    );
                                    //label del campo
                                    echo form_label('Tamaño <span class="text-danger font-weight-bold">*</span>', 'Tamanio');
                                    //Se declara el campo
                                    echo form_dropdown('Tamanio', $options_30, 'null', $options_31);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Tamanio', '<span class="text-danger text-center">', '</span>') ?>
                                </div>


                                <div class="col-lg-6 col-sm-12 mt-sm-4">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $options_40 = [
                                        'Corto'         => 'Corto',
                                        'Rizado' => 'Rizado',
                                        'Largo' => 'Largo',

                                    ];

                                    $options_41 = array(
                                        'id'       => 'Tipo_Pelaje',
                                        'class' => 'custom-select'
                                    );
                                    //label del campo
                                    echo form_label('Tipo de pelaje <span class="text-danger font-weight-bold">*</span>', 'Tipo_Pelaje');
                                    //Se declara el campo
                                    echo form_dropdown('Tipo_Pelaje', $options_40, 'null', $options_41);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Tipo_Pelaje', '<span class="text-danger text-center">', '</span>') ?>
                                </div>



                                <div class="col-lg-6 col-sm-12 mt-sm-4">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $energia = [
                                        'id' => 'Nivel_E',
                                        'name' => 'Nivel_E',
                                        'type' => 'range',
                                        'class' => 'form-control-range',
                                        'required' => 'required',
                                        'min' => '0',
                                        'max' => '100',
                                        'step' => '25'
                                    ];
                                    //label del campo
                                    echo form_label('Nivel de energia <span class="text-danger font-weight-bold">*</span>', 'Nivel_E');
                                    //Se declara el campo
                                    echo form_input($energia);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Nivel_E', '<span class="text-danger text-center">', '</span>') ?>

                                    <div id="msg_energia"><span class='text_muted text-center span_b'>Nivel de energia: medio</span></div>


                                </div>


                                <div class="col-lg-6 col-sm-12 mt-sm-4">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $sociabilidad = [
                                        'id' => 'Sociabilidad',
                                        'name' => 'Sociabilidad',
                                        'type' => 'range',
                                        'class' => 'form-control-range',
                                        'required' => 'required',
                                        'min' => '0',
                                        'max' => '100',
                                        'step' => '25'
                                    ];
                                    //label del campo
                                    echo form_label('Nivel de Sociabilidad <span class="text-danger font-weight-bold">*</span>', 'Sociabilidad');
                                    //Se declara el campo
                                    echo form_input($sociabilidad);
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <?= form_error('Sociabilidad', '<span class="text-danger text-center">', '</span>') ?>

                                    <div id="msg_sociabilidad"><span class='text_muted text-center span_b'>Nivel de sociabilidad: medio</span></div>


                                </div>

                                <div class="col-12 mt-sm-4 form-group">

                                    <?php
                                    //Declaración del arreglo de atributos para el campo
                                    $descripcion = [
                                        'id' => 'DescripcionP',
                                        'name' => 'DescripcionP',
                                        'class' => 'form-control',
                                        'required' => 'required',
                                        'placeholder' => 'Cuentanos algo sobre el perro',
                                        'rows' => '4',
                                        "data-length" => "200",
                                        "maxlength" => "200"
                                    ];
                                    //label del campo
                                    echo form_label('Descripción sobre el cachorro <span class="text-danger font-weight-bold">*</span>', 'DescripcionP');
                                    //Se declara el campo
                                    echo form_textarea($descripcion,(isset($actDatosCorrect)) ? "" : ($this->input->post('DescripcionP')),'');
                                    ?>

                                    <div class="invalid-feedback">Este campo es obligatorio</div>
                                    <div id="error_descripcion_b" class="text-danger" style="font-size: 12.8px; display: none;">Se requiere máximo 200 caracteres</div>
                                    <?= form_error('DescripcionP', '<span class="text-danger text-center">', '</span>') ?>
                                </div>
                            </div>

                            <div class="row mt-5 mb-5">
                                <div class="col-md-5 offset-sm-4 col-sm-4">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>

                            <h5 class="text-center mt-5">Vacunas</h5>

                            <p class="text-center">Marca las vacunas que el perro ha recibido</p>

                            <div class="form-group form-row ">

                                <div class="col-lg-3 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $V_Triple = [
                                            'name'          => 'V_Triple',
                                            'id'            => 'V_Triple',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($V_Triple);
                                        ?>

                                        <label class="form-check-label" for="V_Triple">
                                            Triple
                                        </label>
                                        <?= form_error('V_Triple', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $V_Mpuppy = [
                                            'name'          => 'V_Mpuppy',
                                            'id'            => 'V_Mpuppy',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($V_Mpuppy);
                                        ?>

                                        <label class="form-check-label" for="V_Mpuppy">
                                            Puppy
                                        </label>
                                        <?= form_error('V_Mpuppy', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $V_Quintuple = [
                                            'name'          => 'V_Quintuple',
                                            'id'            => 'V_Quintuple',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($V_Quintuple);
                                        ?>

                                        <label class="form-check-label" for="V_Quintuple">
                                            Quintuple
                                        </label>
                                        <?= form_error('V_Quintuple', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $V_Sectuple = [
                                            'name'          => 'V_Sectuple',
                                            'id'            => 'V_Sectuple',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($V_Sectuple);
                                        ?>

                                        <label class="form-check-label" for="V_Sectuple">
                                            Sectuple
                                        </label>
                                        <?= form_error('V_Sectuple', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5 mb-5">
                                <div class="col-md-5 offset-sm-4 col-sm-4">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>

                            <h5 class="text-center mt-5">Desparacitación</h5>
                            <div class="form-group form-row">
                                <div class="col-lg-6 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $Desp_Ext = [
                                            'name'          => 'Desp_Ext',
                                            'id'            => 'Desp_Ext',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($Desp_Ext);
                                        ?>

                                        <label class="form-check-label" for="Desp_Ext">
                                            Externa
                                        </label>
                                        <?= form_error('Desp_Ext', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $Desp_Int = [
                                            'name'          => 'Desp_Int',
                                            'id'            => 'Desp_Int',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($Desp_Int);
                                        ?>

                                        <label class="form-check-label" for="Desp_Int">
                                            Interna
                                        </label>
                                        <?= form_error('Desp_Int', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-5 mb-5">
                                <div class="col-md-5 offset-sm-4 col-sm-4">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>

                            <h5 class="text-center mt-5">Esterilización</h5>
                            <div class="form-group form-row">
                                <div class="col-lg-12 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $Esterilizacion = [
                                            'name'          => 'Esterilizacion',
                                            'id'            => 'Esterilizacion',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($Esterilizacion);
                                        ?>

                                        <label class="form-check-label" for="Esterilizacion">
                                            Esterilizado
                                        </label>
                                        <?= form_error('Esterilizacion', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-5 mb-5">
                                <div class="col-md-5 offset-sm-4 col-sm-4">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>

                            <h5 class="text-center mt-5">Otros</h5>
                            <div class="form-group form-row">
                                <div class="col-lg-12 col-sm-12 mt-sm-4 d-flex justify-content-center">
                                    <div class="form-check">

                                        <?php
                                        $Carnet_Fisico = [
                                            'name'          => 'Carnet_Fisico',
                                            'id'            => 'Carnet_Fisico',
                                            'value'         => '1',
                                            'checked'       => TRUE,
                                        ];

                                        echo form_checkbox($Carnet_Fisico);
                                        ?>

                                        <label class="form-check-label" for="Carnet_Fisico">
                                            Carnet fisico
                                        </label>
                                        <?= form_error('Carnet_Fisico', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-5 mb-5">
                                <div class="col-md-5 offset-sm-4 col-sm-4">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>



                            <h5 class="text-center mt-5">Fotografias del perro</h5>

                            <div class="form-group form-row mb-5">

                                <div class="col-lg-4 col-sm-12 mt-sm-4 custom-file">
                                    <div class="custom-file">
                                        <?php
                                        //Declaración del arreglo de atributos para el campo
                                        $foto_1 = [
                                            'class' => 'custom-file-input',
                                            'id' => 'Nombre_Foto_File',
                                            'name' => 'Nombre_Foto_File[]',
                                            'accept' => 'image/x-png,image/jpg,image/jpeg'
                                        ];

                                        $foto_1_attributos = [
                                            'class' => 'custom-file-label',
                                            'data-browse' => 'Buscar',
                                            'id' => 'id_img1'
                                        ];

                                        //Se declara el campo
                                        echo form_upload($foto_1);
                                        //label del campo
                                        echo form_label('Foto #1 ', 'Nombre_Foto_File', $foto_1_attributos);
                                        ?>

                                        <div class="invalid-feedback">Este campo es obligatorio</div>
                                        <?= form_error('Nombre_Foto_File', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>

                                    <div id="msg_img1"> </div>
                                </div>

                                <div class="col-lg-4 col-sm-12 mt-sm-4">
                                    <div class="custom-file">
                                        <?php
                                        //Declaración del arreglo de atributos para el campo
                                        $foto_2 = [
                                            'class' => 'custom-file-input',
                                            'id' => 'Nombre_Foto_File2',
                                            'name' => 'Nombre_Foto_File[]',
                                            'accept' => 'image/png,image/jpg,image/jpeg'

                                        ];

                                        $foto_2_attributos = [
                                            'class' => 'custom-file-label',
                                            'data-browse' => 'Buscar',
                                            'id' => 'id_img2'
                                        ];

                                        //Se declara el campo
                                        echo form_upload($foto_2);
                                        //label del campo
                                        echo form_label('Foto #2 ', 'Nombre_Foto_File2', $foto_2_attributos);
                                        ?>

                                        <div class="invalid-feedback">Este campo es obligatorio</div>
                                        <?= form_error('Nombre_Foto_File2', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>

                                    <div id="msg_img2"> </div>
                                </div>

                                <div class="col-lg-4 col-sm-12 mt-sm-4">
                                    <div class="custom-file">
                                        <?php
                                        //Declaración del arreglo de atributos para el campo
                                        $foto_3 = [
                                            'class' => 'custom-file-input',
                                            'id' => 'Nombre_Foto_File3',
                                            'name' => 'Nombre_Foto_File[]',
                                            'accept' => 'image/x-png,image/jpg,image/jpeg'

                                        ];

                                        $foto_3_attributos = [
                                            'class' => 'custom-file-label',
                                            'data-browse' => 'Buscar',
                                            'id' => 'id_img3'
                                        ];

                                        //Se declara el campo
                                        echo form_upload($foto_3);
                                        //label del campo
                                        echo form_label('Foto #3 ', 'Nombre_Foto_File3', $foto_3_attributos);
                                        ?>

                                        <div class="invalid-feedback">Este campo es obligatorio</div>
                                        <?= form_error('Nombre_Foto_File3', '<span class="text-danger text-center">', '</span>') ?>
                                    </div>
                                    <div id="msg_img3"> </div>
                                </div>


                                <div class=" col-lg-4 col-sm-12 mt-sm-4 d-flex justify-content-center align-items-center">
                                    <div id="preview_1" class="preview"></div>
                                </div>

                                <div class=" col-lg-4 col-sm-12 mt-sm-4 d-flex justify-content-center align-items-center">
                                    <div id="preview_2" class="preview"></div>
                                </div>

                                <div class=" col-lg-4 col-sm-12 mt-sm-4 d-flex justify-content-center align-items-center">
                                    <div id="preview_3" class="preview"></div>
                                </div>

                                <div class="col-12 text-center mt-3"><span class="span_b text-muted">*Las imagenes deberán tener un peso maximo de 5 mb</span></div>

                            </div>

                            <div class="d-flex justify-content-center mb-4"> <button class="btn btn-success" type="submit">Agregar</button></div>
                        </div>

                        <?= form_close() ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header pointer" id="admon_cita">

                    <p class="text-left collapsed collapse_title" data-toggle="collapse" data-target="#ADMON_CITA" aria-expanded="false" aria-controls="ADMON_CITA">
                        <img src="<?= base_url() ?>private/media/icons/calendario.svg" alt="" width="24px" class="ml-3 mr-2">
                        Administrar Citas
                    </p>

                </div>
                <div id="ADMON_CITA" class="collapse" aria-labelledby="admon_cita" data-parent="#Panel_Benf">
                    <div class="card-body">
                        Proximamente...
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header pointer" id="profile">

                    <p class="text-left collapsed collapse_title" data-toggle="collapse" data-target="#PROFILE" aria-expanded="false" aria-controls="PROFILE">
                        <img src="<?= base_url() ?>private/media/icons/usuario.svg" alt="" width="24px" class="ml-3 mr-2">
                        Información del titular y beneficiencia
                    </p>

                </div>
                <div id="PROFILE" class="collapse" aria-labelledby="profile" data-parent="#Panel_Benf">
                    <div class="card-body">
                        Proximamente...
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header pointer" id="seguridad">

                    <p class="text-left collapsed collapse_title" data-toggle="collapse" data-target="#SEGURIDAD" aria-expanded="false" aria-controls="SEGURIDAD">
                        <img src="<?= base_url() ?>private/media/icons/bloquear.svg" alt="" width="24px" class="ml-3 mr-2">
                        Seguridad e inicio de sesión
                    </p>

                </div>
                <div id="SEGURIDAD" class="collapse" aria-labelledby="seguridad" data-parent="#Panel_Benf">
                    <div class="card-body">
                        Proximamente...
                    </div>
                </div>
            </div>



        </div>
    </div>

    <script type="text/javascript">
        <?php
            switch ($this->input->post('Activa')) {
                case '1':
                    ?>
                        $('#ADD_DOG').show()
                    <?php
                    break;
                case '2':
                    ?>
                        $('#ADMON_CITA').show()
                    <?php
                    break;
                case '3':
                    ?>
                        $('#PROFILE').show()
                    <?php
                    break;
                case '4':
                    ?>
                        $('#SEGURIDAD').show()
                    <?php
                    break;
                default:
                    ?>
                        console.log("nachos...")
                    <?php
                    break;
            }
        ?>
    </script>