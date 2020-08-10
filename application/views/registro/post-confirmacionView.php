<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/registro/index.css">
    <link rel="icon" href="https://image.ibb.co/dEEbaA/baidu-logotipo-de-la-pata-2.png">
    <?php if (isset($alt_css)) echo $alt_css; ?>
    <title>Confirmación de correo</title>

    <nav class="navbar sticky-top d-flex justify-content-center">
        <a class="navbar-brand text-white" href="<?= base_url();?>InicioController" align="center">
            <img src="https://i.ibb.co/CsdPL9q/Logo-nav.png" width="89" height="35" class="d-inline-block align-top " alt="">
        </a>
    </nav>

</head>

<body>

    <div class="container mt-5">

        <div class=" d-flex justify-content-center">
            <img src="<?= base_url() ?>private/media/icons/garrapata.svg" alt="" width="200px" class="mt-5">
        </div>

        <h2 class="display-4 text-center mt-4">¡Perfecto!</h2>
        <h4 class="text-center mt-3">Tu dirección de correo ha sido confirmada</h4>
        <p class="text-center mt-5">Por favor inicia sesión en nuestro sitio web, pero recuerda que aun debes
            confirmar tu identidad.
        </p>
        <p class="mb-5 text-center">Ingresa al panel de control para completar tu resgistro.</p>

        <p class="text-center mb-5"> <a href="<?= base_url() ?>InicioController">Volver al inicio</a></p>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/animations/scroll-entrance.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>private/js/footer/index.js"></script>
</body>

</html>