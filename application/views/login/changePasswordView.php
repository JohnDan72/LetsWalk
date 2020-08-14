<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/login/forgot/index.css">
    <link rel="icon" href="https://image.ibb.co/dEEbaA/baidu-logotipo-de-la-pata-2.png">
    <?php if (isset($alt_css)) echo $alt_css; ?>
    <title>Let's Walk | Reestablecer contraseña</title>

    <nav class="navbar sticky-top d-flex justify-content-center">
        <a class="navbar-brand text-white" href="<?= base_url(); ?>InicioController" align="center">
            <img src="https://i.ibb.co/CsdPL9q/Logo-nav.png" width="89" height="35" class="d-inline-block align-top " alt="">
        </a>
    </nav>

</head>

<body>
    
    <?php
        if (isset($success_result)) {//contraseña cambiada correctamente
            ?>
                <!--Vista exito de cambio de contraseña-->
                <div class="container mt-5">

                    <div class=" d-flex justify-content-center">
                        <img src="<?= base_url() ?>private/media/icons/garrapata.svg" alt="" width="200px" class="mt-5">
                    </div>

                    <h2 class="display-4 text-center mt-4">¡Perfecto!</h2>
                    <h4 class="text-center mt-3">Tu contraseña ha sido cambiada con exito</h4>
                    <p class="text-center mt-5">Por favor inicia sesión en nuestro sitio web
                    </p>

                    <p class="text-center mb-5"> <a href="<?= base_url() ?>loginController">Inicia sesión</a></p>

                </div>
            <?php
        }
        elseif (isset($error_enlace)) {//enlace caducado
            ?>
                <!--Vista de enlace caducado-->
                <div class="container mt-5">

                    <div class=" d-flex justify-content-center">
                        <img src="<?= base_url() ?>private/media/icons/404.svg" alt="" width="200px" class="mt-5">
                    </div>

                    <h2 class="display-4 text-center mt-4">¡Lo sentimos!</h2>
                    <h4 class="text-center mt-3">Hemos detectado algunos errores</h4>
                    <p class="text-center mt-5 mb-5">Al parecer el enlace para cambiar tu contraseña ha caducado o  ya ha sido utilizado con anterioridad
                    </p>


                    <p class="text-center mb-5"> <a href="<?= base_url() ?>InicioController">Volver al inicio</a></p>
                </div>
            <?php
        }
        elseif (isset($error_change_password)) {//error al cambiar la contraseña
            ?>
                <span style="color: red">Error al insertar en la base de datos</span>
            <?php
        }
        else{   //vista principal para cambiar contraseña
            ?>
                <!--Vista de cambio de contraseña-->
                <div class="container mt-5">

                    <div class=" d-flex justify-content-center">
                        <img src="<?= base_url() ?>private/media/icons/aleatorio.svg" alt="" width="150px" class="mt-2">
                    </div>


                    <p class="text-center mt-5">Por favor completa el siguiente formulario, el cual te ayudara a reestablecer tu contraseña.</p>
                    <p class="text-center mt-n1">Una vez completado el proceso, podrás iniciar sesión</p>

                    <?php
                    $form_U = array(
                        'id' => 'form_login',
                        'class' => 'd-flex justify-content-center'
                    );
                    echo form_open(base_url().'loginController/cambiarPassword', $form_U);
                    ?>
                    <div class="form-group mt-4" id="id_div_correo">
                        <?php 
                        $id_user = array(
                            'id'               => 'id_user1',
                            'name'             => 'Id_User',
                            'style'            => 'display:none',
                            'value'            => $id_user,
                            'require'          => 'true'
                        );
                        echo form_input($id_user, '');
                        $token_user = array(
                            'id'               => 'id_token',
                            'name'             => 'Token',
                            'style'            => 'display:none',
                            'value'            => $token,
                            'require'          => 'true'
                        );
                        echo form_input($token_user, '');

                        $pass_user1 = array(
                            'id'               => 'id_password_1',
                            'name'             => 'Passwd',
                            'type'             => 'password',
                            'class'            => 'form-control mb-4',
                            'placeholder'      => 'Ingresa tu nueva contraseña',
                            'require'          => 'true'
                        );
                        echo form_input($pass_user1, '');
                        echo form_error('Passwd', '<span class="helper-text"style="color:red;">', '</span>');
                        ?>

                        <?php
                        $pass_user2 = array(
                            'id'               => 'id_password_2',
                            'name'             => 'Passwd_1',
                            'type'             => 'password',
                            'class'            => 'form-control mb-4',
                            'placeholder'      => 'Confirma tu nueva contraseña',
                            'require'          => 'true'
                        );
                        echo form_input($pass_user2, '');
                        echo form_error('Passwd_1', '<span class="helper-text"style="color:red;">', '</span>');
                        ?>

                        <div id="error_pass_f" class="text-danger text-center mb-4" style="font-size: 12.8px;"></div>

                        <div class="d-flex justify-content-center mb-5">
                            <button class="btn btn-success" id="btn_c_f">Enviar</button>
                        </div>


                        <?= form_close() ?>


                        <p class="text-center mb-5"> <a href="<?= base_url() ?>InicioController">Ir al inicio</a></p>

                    </div>
                </div>            
            <?php
        }
    ?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/footer/index.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/login/change/index.js"></script>

</body>

</html>