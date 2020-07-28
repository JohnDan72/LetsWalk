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

                                <div class="step" data-target="#registro-form-1">
                                    <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger1" aria-controls="registro-form-1">
                                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/persona.svg" alt=""></span>
                                        <span class="bs-stepper-label">Personal</span>
                                    </button>
                                </div>

                                <div class="bs-stepper-line"></div>

                                <div class="step" data-target="#registro-form-2">
                                    <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger2" aria-controls="registro-form-2">
                                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/contrasena.svg" alt=""></span>
                                        <span class="bs-stepper-label">Sesión</span>
                                    </button>
                                </div>

                            </div>
                            <div class="bs-stepper-content">

                                <?php
                                $attributes_formOpen = ['id'=>'formRegistro', 'class' => 'needs_validation', 'onSubmit' => 'return false', 'novalidate' => 'TRUE'];
                                echo form_open(base_url().'registroController/registrar', $attributes_formOpen, 'required');

                                ?>
                                <!--<form class="needs-validation" onSubmit="return false" novalidate>-->
                                <div id="registro-form-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger1">

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
                                            <?= form_error('Ap_Paterno', '<span class="text-danger text-center">', '</span>')?>
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
                                            <?= form_error('Ap_Materno', '<span class="text-danger text-center">', '</span>')?>
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
                                            <?= form_error('Nombre', '<span class="text-danger text-center">', '</span>')?>
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
                                            <?= form_error('Fecha_Nacimiento', '<span class="text-danger text-center">', '</span>')?>
                                        </div>

                                        <div class="col-lg-6 col-sm-12 mt-sm-4">
                                            <?php
                                            //Declaración del arreglo de atributos para el campo
                                            $telefono = [
                                                'id' => 'Telefono',
                                                'name' => 'Telefono',
                                                'type' => 'text',
                                                'class' => 'form-control',
                                                'placeholder' => 'Ejemplo: (222) xxxx xxx',
                                                'required' => 'required',
                                                'size' => '10',
                                                'maxlength' => '10',
                                                'data-length' => '10',
                                                'min' => '1000000000',
                                                'max' => '9999999999',
                                                'onkeypress' => 'return soloNumeros(event)'
                                            ];
                                            //label del campo
                                            echo form_label('Número telefonico <span class="text-danger font-weight-bold">*</span>', 'Telefono');
                                            //Se declara el campo
                                            echo form_input($telefono);
                                            ?>

                                            <div class="invalid-feedback">Este campo es obligatorio</div>
                                            <?= form_error('Telefono', '<span class="text-danger text-center">', '</span>')?>
                                            <span id="errorTel" class="text-danger" style="font-size: 12.8px; display: none;">Debe contener 10 dígitos exactamente</span>
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

                                        <div id="errorSex" class="col-12 text-danger text-center" style="font-size: 12.8px; display: none;">Selecciona tu sexo</div>
                                        
                                    </div>

                                    <div class="d-flex justify-content-center mt-5">
                                        <button class="btn btn-dark btn-next-form">Siguiente</button>
                                    </div>

                                </div>
                                <div id="registro-form-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger2">

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

                                            <?= form_error('Correo', '<span class="text-danger text-center">', '</span>')?>
                                            <div id="error_correo" class="text-danger" style="font-size: 12.8px;"></div>
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

                                            <?= form_error('Passwd', '<span class="text-danger text-center">', '</span>')?>
                                            <div id="error_pass" class="text-danger" style="font-size: 12.8px;"></div>

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

                                            <?= form_error('Passwd_1', '<span class="text-danger text-center">', '</span>')?>
                                            <div id="error_pass_1" class="text-danger" style="font-size: 12.8px;"></div>
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
                                                'value' => '1'
                                            ];

                                            echo form_checkbox($term);
                                            echo form_label('<a href="">He leído los terminos de uso y condiciones.</a>', 'term', $label);

                                            ?>
                                            <div id="error_term" class="text-danger text-center" style="font-size: 12.8px; display:none;">Debes aceptar los términos y condiciones</div>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-center mt-5">
                                        <div class="g-recaptcha mt-4 mb-4" data-sitekey="6LcLefUUAAAAAIR7n2G2ZUp0wIHeZ3r2yrRE52_h"></div>

                                        
                                    </div>
                                    <div id="error_captcha" class="text-danger text-center" style="font-size: 12.8px; display: none;">Prueba que no eres un robot</div>


                                    <div class="d-flex justify-content-center mt-5">
                                        <button class="btn btn-dark" onclick="stepperForm.previous()">Anterior</button>
                                        <button id="id_enviar" class="btn btn-success ml-4">Enviar</button>
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


    <script type="text/javascript">
    

        document.getElementById('id_enviar').addEventListener('click', function (){
            var data = new FormData(document.getElementById('formRegistro'));
            fetch('<?php echo base_url()?>RegistroController/validRegFetch', {
                  method: 'POST',
                  body: data
              })
              .then(function(response) {
                  if(response.ok) {
                      return response.json()
                  } else {
                      throw "Error en la llamada Ajax";
                  }
              })
              .then(function(myJson) {
                  if (!((typeof myJson) == "string")) 
                  {
                    //Fetch correcto
                    /*Se comprueba cada validacíón con su respectivo mensaje de error (si lo hay)*/
                    //alert("correo: "+myJson.correo.band+"\n"+"pass1: "+myJson.passwd.band+"\n"+"pass2: "+myJson.passwd_1.band+"\n"+"captcha: "+myJson.captcha+"\n"+"term: "+myJson.term+"\n")
                    if (myJson.correo.band) {
                        document.getElementById('error_correo').style.display = 'none';
                        document.getElementById('Correo').style.borderColor = "green";
                    }
                    else{
                        document.getElementById('error_correo').textContent = myJson.correo.msj; 
                        document.getElementById('error_correo').style.display = 'block';
                        document.getElementById('Correo').style.borderColor = "red";
                    }
                    if (myJson.passwd.band) {
                        document.getElementById('error_pass').style.display = 'none';
                        document.getElementById('Passwd').style.borderColor = "green";
                    }
                    else{
                        document.getElementById('error_pass').textContent = myJson.passwd.msj; 
                        document.getElementById('error_pass').style.display = 'block';
                        document.getElementById('Passwd').style.borderColor = "red";
                    }
                    if (myJson.passwd_1.band) {
                        document.getElementById('error_pass_1').style.display = 'none';
                        document.getElementById('Passwd_1').style.borderColor = "green";
                    }
                    else{
                        document.getElementById('error_pass_1').textContent = myJson.passwd_1.msj; 
                        document.getElementById('error_pass_1').style.display = 'block';
                        document.getElementById('Passwd_1').style.borderColor = "red";
                    }
                    if (myJson.captcha) {
                        document.getElementById('error_captcha').style.display = 'none';
                    }
                    else{
                        document.getElementById('error_captcha').style.display = 'block'
                    }
                    if (myJson.term) {
                        document.getElementById('error_term').style.display = 'none';
                    }
                    else{
                        document.getElementById('error_term').style.display = 'block'
                    }

                    /*Se comprueban todas las respuestas para seguir con el Formulario*/
                    if (myJson.correo.band && myJson.passwd.band && myJson.passwd_1.band && myJson.captcha && myJson.term) {
                        //Se manda el formulario completo por POST y se valida todo desde nivel de backend
                        document.getElementById("formRegistro").submit();
                    }
                    else{ /*se resetea el captcha cada vez que hay un error*/
                        grecaptcha.reset();
                    }
                  }
                  else
                  { 
                    if (myJson.startsWith("Error")) 
                    {
                      alert(myJson)  
                    } 
                    else if (myJson == "Fatal Error") {
                      alert("Fatal error");
                    }
                    else{
                      alert("Otro error");
                    }
                    
                  }
              })
              .catch(function(err) {
                 console.log("error from catch"+err);
            });
        });
        

   
    </script>