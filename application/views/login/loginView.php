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
              <div class=" d-flex justify-content-center">
                  <img src="<?=base_url() ?>private/media/icons/gold.svg" alt="" width="100px" height="100px" class="">
              </div>
              <h4 class="card-title text-center mt-3 display-5">Inicio de Sesión</h4>
              <p class="card-text text-center mt-4">¡Que gusto tenerte aquí! Por favor completa los campos<br>Recuerda no compartir tus credenciales con nadie</p>

              <?php
                $form_U = array('id' => "form_login");
                echo form_open(base_url() . 'loginController',$form_U);
                ?>
                <div class="form-group mt-4">
                  <?php
                    $mail_user = array(
                      'name'             => 'correo',
                      'type'             => 'mail',
                      'aria-describedby' => 'emailHelp',
                      'class'            => 'form-control ',
                      'placeholder'      => 'Correo'
                    );
                    echo form_input($mail_user, '');
                  ?>

                </div>
                <div class="form-group">
                  <?php
                    $pass_user = array(
                      'name'             => 'pass',
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



                <div class="text-center">
                  <div class="alert alert-danger" role="alert">
                    Mensaje de error, elije el que mejor se vea
                  </div>
                  <p class="register">¿Aún no eres miembro? <a href="#"> Registrate</a> </p>
                  <a href="#" class="btn btn-success d-flex justify-content-center my-3 ">Iniciar</a>

                  <p class="register">Al presionarel boton declaras que estas de acuerdo con nuestros <a href="#"> Terminos y condiciones</a> </p>
                </div>
              <?= form_close() ?>



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

  </body>
</html>
