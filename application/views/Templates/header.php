<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/<?php echo $css?>/index.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/footer/index.css">
    <link rel="icon" href="https://image.ibb.co/dEEbaA/baidu-logotipo-de-la-pata-2.png">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <?php if(isset($alt_css)) echo $alt_css; ?>
    <title><?php echo $string; ?></title>

    <nav class="navbar navbar-expand-md sticky-top">
        <a class="navbar-brand text-white d-flex justify-content-sm-center" href="#">
            <img src="https://i.ibb.co/CsdPL9q/Logo-nav.png" width="89" height="35" class="d-inline-block align-top "
                alt="">
        </a>

        <button class="navbar-toggler navbar-toggler-rigth" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <img src="<?=base_url() ?>private/media/icons/menu.png" width="24px" height="24px" alt="">
        </button>

        <div class="collapse navbar-collapse justify-content-end mr-sm-auto text-sm-center" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="<?=base_url()?>InicioController">Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="<?=base_url()?>AdoptaController">Adopta</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#">Contacto</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="<?=base_url()?>NosotrosController">Nosotros</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#">Faq's</a>
                </li>
                <li class="nav-item  dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php 
                            if($this->session->userdata('user')) {
                                //$user = $this->session->userdata('user');
                                //extract($user);
                                echo "Bienvenido ".$this->session->userdata('user')['Nombre'];
                            }
                        ?>
                        <img src="<?=base_url() ?>private/media/icons/user.png" width="25px" height="25px" alt="" id="icon-nav">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dd_menu">
                        <?php 
                            if($this->session->userdata('user')) {
                                if ($this->session->userdata('user')['Tipo_User'] == 1) {
                                   ?>
                                        <a class="dropdown-item text-white" href="<?=base_url()?>PanelControl/PUserController">Pánel de Control</a>
                                   <?php
                                }
                                elseif ($this->session->userdata('user')['Tipo_User'] == 2){
                                    ?>
                                        <a class="dropdown-item text-white" href="<?=base_url()?>PanelControl/PBenefController">Pánel de Control</a>
                                   <?php
                                }
                                elseif ($this->session->userdata('user')['Tipo_User'] == 3){
                                    ?>
                                        <a class="dropdown-item text-white" href="<?=base_url()?>PanelControl/PAdminController">Pánel de Control</a>
                                   <?php
                                }
                        ?>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="<?=base_url()?>loginController/logout">Cerrar Sesión</a>
                        <?php
                            }
                            else
                            {
                        ?>
                                <a class="dropdown-item text-white" href="<?= base_url() ?>RegistroController">¡Registrate!</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="<?=base_url()?>loginController">Inicia Sesión</a>
                        <?php
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
