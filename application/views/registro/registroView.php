<body>
    <div class="wrapper">
        <div class="main">
            <section class="content">
                <div class="parallax img-uno">
                    <div class="texto-interior">
                        <h2 class="display-4">Registro</h2>
                    </div>
                </div><!-- .parallax -->
            </section>
        </div>
    </div>

    <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Registro para usuarios</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registro para beneficiencias</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h2 class="display-4 text-center mt-5">Registro para Usuarios</h2>
                <p class="text-center mt-5">A continuación, se muestra un pequeño formulario que debes completar, el cual te
                    dará acceso a este sitio. Es necesario que lo completes de la forma más sincera posible.
                </p>
                <div class="container">
                    <!--Inicio-->
                    <div class="mb-5 p-4">
                        <div id="stepperForm" class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist" id="step_h">

                                <div class="step" data-target="#test-form-1">
                                    <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger1" aria-controls="test-form-1">
                                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/persona.svg" alt=""></span>
                                        <span class="bs-stepper-label">Personal</span>
                                    </button>
                                </div>

                                <div class="bs-stepper-line"></div>

                                <div class="step" data-target="#test-form-2">
                                    <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger2" aria-controls="test-form-2">
                                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/contrasena.svg" alt=""></span>
                                        <span class="bs-stepper-label">Sesión</span>
                                    </button>
                                </div>

                            </div>
                            <div class="bs-stepper-content">

                                <?php
                                $attributes_formOpen = ['class' => 'needs_validation', 'onSubmit' => 'return false', 'novalidate' => 'TRUE'];
                                echo form_open('registroController', $attributes_formOpen, 'required');

                                ?>
                                <!--<form class="needs-validation" onSubmit="return false" novalidate>-->
                                <div id="test-form-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger1">

                                    <h5 class="text-center mb-4"> Información Personal</h5>

                                    <div class="form-group form-row">
                                        <div class="col-lg-4 col-sm-12 mt-sm-4">
                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $ap_p = [
                                                'id' => 'Ap_Paterno',
                                                'name' => 'Ap_Paterno',
                                                'type' => 'text',
                                                'class' => 'form-control',
                                                'placeholder' => 'Ingresa tu Apellido paterno',
                                                'required' => 'required'
                                            ];
                                            //label del campo
                                            echo form_label('Apellido paterno <span class="text-danger font-weight-bold">*</span>', 'Ap_Paterno');
                                            //Se declara el campo
                                            echo form_input($ap_p);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                        </div>

                                        <div class="col-lg-4 col-sm-12 mt-sm-4">

                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $ap_m = [
                                                'id' => 'Ap_Materno',
                                                'name' => 'Ap_Materno',
                                                'type' => 'text',
                                                'class' => 'form-control',
                                                'placeholder' => 'Ingresa tu Apellido materno',
                                                'required' => 'required'
                                            ];
                                            //label del campo
                                            echo form_label('Apellido materno <span class="text-danger font-weight-bold">*</span>', 'Ap_Materno');
                                            //Se declara el campo
                                            echo form_input($ap_m);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                        </div>

                                        <div class="col-lg-4 col-sm-12 mt-sm-4">

                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $nombre = [
                                                'id' => 'Nombre',
                                                'name' => 'Nombre',
                                                'type' => 'text',
                                                'class' => 'form-control',
                                                'placeholder' => 'Ingresa tu nombre(s)',
                                                'required' => 'required'
                                            ];
                                            //label del campo
                                            echo form_label('Nombre <span class="text-danger font-weight-bold">*</span>', 'Nombre');
                                            //Se declara el campo
                                            echo form_input($nombre);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                        </div>

                                        <div class="col-lg-6 col-sm-12 mt-sm-4">

                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $date = [
                                                'id' => 'Fecha_Nacimiento',
                                                'name' => 'Fecha_Nacimiento',
                                                'type' => 'date',
                                                'class' => 'form-control',
                                                'required' => 'required'
                                            ];
                                            //label del campo
                                            echo form_label('Fecha de nacimiento <span class="text-danger font-weight-bold">*</span>', 'Fecha_Nacimiento');
                                            //Se declara el campo
                                            echo form_input($date);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                        </div>

                                        <div class="col-lg-6 col-sm-12 mt-sm-4">
                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $telefono = [
                                                'id' => 'Telefono',
                                                'name' => 'Telefono',
                                                'type' => 'number',
                                                'class' => 'form-control',
                                                'placeholder' => '222 1 234 567',
                                                'required' => 'required',
                                                'size' => '10',
                                                'min' => '1000000000',
                                                'max' => '9999999999'
                                            ];
                                            //label del campo
                                            echo form_label('Número telefonico <span class="text-danger font-weight-bold">*</span>', 'Telefono');
                                            //Se declara el campo
                                            echo form_input($telefono);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-center mt-5">

                                            <div class="form-check form-check-inline">
                                                <?php
                                                $sexo_m = [
                                                    'class' => 'form-check-input',
                                                    'name' => 'Sexo',
                                                    'id' => 's_1',
                                                    'value' => 'M',
                                                    'checked' => 'TRUE'
                                                ];

                                                $label = [
                                                    'class' => 'form-check-label',

                                                ];


                                                echo form_radio($sexo_m);
                                                echo form_label('Mujer', 's_1', $label);

                                                ?>
                                            </div>
                                            <div class="form-check form-check-inline">

                                                <?php
                                                $sexo_h = [
                                                    'class' => 'form-check-input',
                                                    'name' => 'Sexo',
                                                    'id' => 's_2',
                                                    'value' => 'H',
                                                ];

                                                echo form_radio($sexo_h);
                                                echo form_label('Hombre', 's_2', $label);

                                                ?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mt-5">
                                        <button class="btn btn-dark btn-next-form">Siguiente</button>
                                    </div>

                                </div>
                                <div id="test-form-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger2">

                                    <h5 class="text-center mb-4"> Información de Inicio de Sesión</h5>

                                    <div class="form-group form-row">
                                        <div class="col-lg-4 col-sm-12 mt-sm-4">

                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $correo = [
                                                'id' => 'Correo',
                                                'name' => 'Correo',
                                                'type' => 'mail',
                                                'class' => 'form-control',
                                                'placeholder' => 'Ingresa tu e-mail',
                                                'required' => 'required'
                                            ];
                                            //label del campo
                                            echo form_label('Correo <span class="text-danger font-weight-bold">*</span>', 'Correo');
                                            //Se declara el campo
                                            echo form_input($correo);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-sm-4">

                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $passw = [
                                                'id' => 'Passwd',
                                                'name' => 'Passwd',
                                                'type' => 'password',
                                                'class' => 'form-control',
                                                'placeholder' => 'Ingresa tu contraseña',
                                                'required' => 'required'
                                            ];
                                            //label del campo
                                            echo form_label('Contraseña <span class="text-danger font-weight-bold">*</span>', 'Passwd');
                                            //Se declara el campo
                                            echo form_input($passw);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>

                                            <div class="progress mt-2">
                                                <div id="StrengthProgressBar" class="progress-bar"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-sm-4">

                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $passw = [
                                                'id' => 'Passwd_1',
                                                'name' => 'Passwd_1',
                                                'type' => 'password',
                                                'class' => 'form-control',
                                                'placeholder' => 'Confirma tu contraseña',
                                                'required' => 'required'
                                            ];
                                            //label del campo
                                            echo form_label('Contraseña <span class="text-danger font-weight-bold">*</span>', 'Passwd_1');
                                            //Se declara el campo
                                            echo form_input($passw);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                        </div>

                                        <div class="offset-4 col-4 mt-4" id="passw_msg">
                                        
                                        </div>
                                    </div>

                                    <div class="offset-4 col-4 mt-5">
                                        <div class="dropdown-divider"></div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-4">
                                        <div class="form-check">
                                            <?php
                                            $term = [
                                                'class' => 'form-check-input',
                                                'name' => 'term',
                                                'id' => 'term',
                                            ];

                                            echo form_checkbox($term);
                                            echo form_label('<a href="">He leído los terminos de uso y condiciones.</a>', 'term', $label);

                                            ?>
                                            
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-center mt-5">
                                        <div class="g-recaptcha mt-4 mb-4" data-sitekey="6Ld41LUZAAAAAHHetwKBgWI1FSPJOXvKxwA64_le"></div>
                                    </div>


                                    <div class="d-flex justify-content-center mt-5">
                                        <button class="btn btn-dark" onclick="stepperForm.previous()">Anterior</button>
                                        <button class="btn btn-success btn-next-form ml-4">Enviar</button>
                                    </div>


                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin-->


            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Hola 2
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>

        </div>
    </div>