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
    <title>Let's Walk | Contraseña olvidada</title>

    <nav class="navbar sticky-top d-flex justify-content-center">
        <a class="navbar-brand text-white" href="<?= base_url(); ?>InicioController" align="center">
            <img src="https://i.ibb.co/CsdPL9q/Logo-nav.png" width="89" height="35" class="d-inline-block align-top " alt="">
        </a>
    </nav>

</head>

<body>

    <!--Vista que se utilizará en caso de que haya algun error en la verificación o que ya haya sido verificado-->
    <div class="container mt-5">

        <div class=" d-flex justify-content-center">
            <img src="<?= base_url() ?>private/media/icons/olvido.svg" alt="" width="150px" class="mt-2">
        </div>

        <h2 class="display-4 text-center mt-4">¡Veamos que tenemos aquí!</h2>
        <p class="text-center mt-5 mb-2">Ingresa tu correo para iniciar con el proceso. Si coincide con el que te has
            registrado en breves momentos recibirás un correo con un enlace para generar una nueva contraseña
        </p>

        <?php
        $form_U = array(
            'id' => 'form_login',
            'class' => 'd-flex justify-content-center'
        );
        echo form_open('', $form_U);
        ?>
        <div class="form-group mt-4" id="id_div_correo">
            <?php
            $mail_user = array(
                'id'               => 'id_correo_f',
                'name'             => 'Correo',
                'type'             => 'mail',
                'aria-describedby' => 'emailHelp',
                'class'            => 'form-control mb-4',
                'placeholder'      => 'Ingresa tu e-mail',
                'require'          => 'true'
            );
            echo form_input($mail_user, '');
            ?>

            <div id="error_mail_f" class="text-danger text-center mb-4" style="font-size: 12.8px;">Por favor ingresa una dirección de correo valida</div>

            <div class="d-flex justify-content-center mb-5">
                <button class="btn btn-success" id="btn_f">Enviar</button>
            </div>


            <?= form_close() ?>


            <p class="text-center mb-5"> <a href="<?= base_url() ?>InicioController">Volver al inicio</a></p>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/footer/index.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/login/forgot/index.js"></script>

</body>

</html>