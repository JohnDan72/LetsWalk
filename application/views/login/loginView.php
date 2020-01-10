<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/login/index.css">
    <link rel="icon" href="https://image.ibb.co/dEEbaA/baidu-logotipo-de-la-pata-2.png">
    <title><?php echo $string; ?></title>
  </head>
  <body class="">

    <style>
    .form-label-group > input,
    .form-label-group > label {
      height: 3.125rem;
      padding: .75rem;
    }

    .form-label-group > label {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      margin-bottom: 0; /* Override default `<label>` margin */
      line-height: 1.5;
      color: #495057;
      pointer-events: none;
      cursor: text; /* Match the input under the label */
      border: 1px solid transparent;
      border-radius: .25rem;
      transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
      color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-moz-placeholder {
      color: transparent;
    }

    .form-label-group input::placeholder {
      color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
      padding-top: 1.25rem;
      padding-bottom: .25rem;
    }

    .form-label-group input:not(:placeholder-shown) ~ label {
      padding-top: .25rem;
      padding-bottom: .25rem;
      font-size: 12px;
      color: #777;
    }

    /* Fallback for Edge
    -------------------------------------------------- */
    @supports (-ms-ime-align: auto) {
      .form-label-group > label {
        display: none;
      }
      .form-label-group input::-ms-input-placeholder {
        color: #777;
      }
    }

    /* Fallback for IE
    -------------------------------------------------- */
    @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
      .form-label-group > label {
        display: none;
      }
      .form-label-group input:-ms-input-placeholder {
        color: #777;
      }
    }
}
    </style>

    <div class="row">
      <!--<div class=" d-sm-none d-md-block d-lg-block d-xl-block col-md-6 col-lg-6 col-xl-6 rounded"></div>-->
      <div class="col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center align-items-center slider ">
          <div class="card trans">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <button id="id_btn_retorno" onclick="return funcRetorno()" style="display: none; border: 0; background: #ffffff;">
                    <img src="https://image.flaticon.com/icons/png/512/16/16116.png" width="25px" height="25px">
                  </button>
                </div>
              </div>
              <div class=" d-flex justify-content-center">
                  <img src="<?=base_url() ?>private/media/icons/gold.svg" alt="" width="100px" height="100px" class="">
              </div>
              <h4 class="card-title text-center mt-3 display-5" id="id_titulo">Inicio de Sesión</h4>
              <p class="card-text text-center mt-4" id="id_indicacion">¡Que gusto tenerte aquí! Por favor ingresa tu correo<br>Recuerda no compartir tu información personal con nadie</p>

              <?php
                $form_U = array('id' => "form_login");
                echo form_open(base_url() . 'loginController/loginUser',$form_U);
                ?>
                <div class="form-group mt-4" id="id_div_correo">
                  <?php
                    $mail_user = array(
                      'id'               => 'id_correo',
                      'name'             => 'Correo',
                      'type'             => 'mail',
                      'aria-describedby' => 'emailHelp',
                      'class'            => 'form-control ',
                      'placeholder'      => 'Correo'
                    );
                    echo form_input($mail_user, '');
                  ?>

                </div>
                <div class="form-group" id="id_div_passwd" style="display: none;">
                  <?php
                    $pass_user = array(
                      'id'               => 'id_passwd',
                      'name'             => 'Passwd',
                      'type'             => 'password',
                      'class'            => 'form-control ',
                      'placeholder'      => 'Contraseña'
                    );
                    echo form_input($pass_user, '');

                  ?>
                  <div class="text-center">
                    <a href="" class="forgot-pass text-right">¿Has olvidado tu contraseña?</a>
                  </div>
                </div>



                <?= form_close() ?>
                <div class="text-center">
                  <div id="id_mensaje_error" class="alert alert-danger" role="alert" style="display: none;">
                    Mensaje de error, elije el que mejor se vea
                  </div>
                  <p class="register">¿Aún no eres miembro? <a href="#"> Registrate</a> </p>
                  <div class="row justify-content-center text-center d-flex my-3">
                    <!--button class=" col-md-6 btn btn-success d-flex my-3 ">Iniciar</button-->
                    <button class=" col-md-12 btn btn-success" id="id_btn_sig" onclick=" return fetchUser()" >
                        Siguiente
                    </button>
                    <button class=" col-md-12 btn btn-success" id="id_btn_send" onclick=" return fetchPasswd()" style="display: none;">
                        Iniciar Sesión
                    </button>  
                  </div>
                  

                  <p class="register" id="id_terminos" style="display: none;">Al presionar el boton declaras que estas de acuerdo con nuestros <br><a href="#"> Terminos y condiciones</a> </p>
                </div>
              



            </div>
          </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script type="text/javascript"  src="<?= base_url() ?>private/js/bootstrap/bootstrap.min.js"></script>

    <script type="text/javascript">
      function fetchUser(){
          var correo = document.getElementById('id_correo').value;
          var data = new FormData();
              data.append('Correo', correo);
          
          fetch('<?php echo base_url()?>loginController/checarUser', {
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
                
                funcSiguiente();
              }
              else
              { 
                var cadResponse = myJson.replace("Error/","");
                var auxError = document.getElementById('id_mensaje_error');
                auxError.textContent = cadResponse;
                auxError.style.display = 'block';
              }
          })
          .catch(function(err) {
             console.log(err);
          });
      }

      function fetchPasswd(){
          var data = new FormData(document.getElementById('form_login'));

          fetch('<?php echo base_url()?>loginController/loginUser', {
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
                window.location.replace("<?php echo base_url();?>InicioController");   
              }
              else
              { 
                if (myJson.startsWith("Error")) 
                {
                  var cadResponse = myJson.replace("Error/","");
                  var auxError = document.getElementById('id_mensaje_error');
                  auxError.textContent = cadResponse;
                  auxError.style.display = 'block';  
                } 
                else if (myJson == "Fatal Error") {
                  window.location.replace("<?php echo base_url();?>InicioController");
                }
                else{
                  alert("Otro error");
                }
                
              }
          })
          .catch(function(err) {
             console.log(err);
          });
      }

      function funcRetorno(){
          document.getElementById('id_titulo').textContent = "Inicio de Sesión";
          document.getElementById('id_btn_retorno').style.display = 'none';
          document.getElementById('id_mensaje_error').textContent = '';
          document.getElementById('id_mensaje_error').style.display = 'none';
          document.getElementById('id_btn_sig').style.display = 'block';
          document.getElementById('id_btn_send').style.display = 'none';
          document.getElementById('id_indicacion').innerHTML = '¡Que gusto tenerte aquí! Por favor ingresa tu correo<br>Recuerda no compartir tu información personal con nadie';
          document.getElementById('id_div_correo').style.display = 'block';
          document.getElementById('id_passwd').value = '';
          document.getElementById('id_div_passwd').style.display = 'none';
          document.getElementById('id_terminos').style.display = 'none';
      }

      function funcSiguiente(){
          document.getElementById('id_titulo').textContent = "Escribir Contraseña";
          document.getElementById('id_btn_retorno').style.display = 'block';
          document.getElementById('id_mensaje_error').textContent = '';
          document.getElementById('id_mensaje_error').style.display = 'none';
          document.getElementById('id_btn_sig').style.display = 'none';
          document.getElementById('id_btn_send').style.display = 'block';
          document.getElementById('id_indicacion').innerHTML = '¡Ya casi esta listo! Ahora ingresa tu contraseña<br>Recuerda no compartir tu información personal con nadie';
          document.getElementById('id_div_correo').style.display = 'none';
          document.getElementById('id_passwd').value = '';
          document.getElementById('id_div_passwd').style.display = 'block';
          document.getElementById('id_terminos').style.display = 'block';
      }
    </script>

  </body>
</html>

<!--
  SENTENCIAS JAVASCRIPT AUXILIARES

  const data = new FormData(document.getElementById('form_login'));
  alert("Respuesta desde jason "+JSON.stringify(myJson));
  alert("Hubo un error: "+myJson+"\n otra cadena: "+cadResponse);
  alert("respuesta : "+ JSON.stringify(myJson));

  window.location.replace("<?php echo base_url();?>InicioController");
  alert(data.get('Correo')+"\nOtro: "+data.get('Passwd')+"\nOtro: "+data);
-->
