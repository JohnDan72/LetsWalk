<body>

    <div class="wrapper">
        <div class="main">
            <section class="content">
                <div class="parallax img-uno">
                    <div class="texto-interior">
                        <h2 class="display-4 text-white">El Test</h2>
                    </div>
                </div><!-- .parallax -->
            </section>
        </div>
    </div>

    <div class="row container-fluid mt-5">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?= base_url() ?>private/media/icons/garrapata.svg" width="128px" alt="">

        </div>

        <div class="col-12 mt-5 mb-5">
            <h3 class="text-center">El test ha sido respondido correctamente.</h3>
            <p class="text-center">A continuación se muestra tu resultado: </p>
        </div>

        <div class="offset-2 col-8  mb-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mt-5 mb-5">Resultado</h4>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <?php if(!$this->session->userdata('user')['scoreTest']){
                                    redirect("InicioController");
                            } 
                            $scoreT = $this->session->userdata('user')['scoreTest'];
                            $resText = "";
                            $color = "";
                            ?>
                            <h2 class="display-1 text-center"><?= $scoreT."%"?></h2>
                            <h6 class="text-center">Score</h6>
                            <div class="progress mt-5 mb-5">
                                <!--Aqui podemos jugar con los colores segun el resultado, ademas de mover la barra de acuerdo el score
                                Ocuparemos colores verde, naranja y rojo
                                Te paso la liga:
                                https://getbootstrap.com/docs/4.0/components/progress/
                            -->
                                <?php 
                                    if ($scoreT<=35) {
                                        $resText = "Definitivamente no estás preparado para tener una mascota y darle todos los  cuidados que requiere.";
                                        $color = "danger";
                                    }elseif ($scoreT>=36 && $scoreT<=58) {
                                        $resText = "Tu estilo de vida no es el óptimo para tener una mascota. Te sugerimos que pienses muy bien si estás seguro de querer adoptar una mascota.";
                                        $color = "warning";
                                    }
                                    elseif ($scoreT>=59 && $scoreT<=82) {
                                        $resText = "Cuentas con las características necesarias y tienes una estructura sólida para adoptar un perrito, pero puedes esforzarte para que este lo mejor posible.";
                                        $color = "success";
                                    }
                                    else{
                                        $resText = "Eres el candidato idóneo para adoptar una mascota. Qué esperas. busca opiniones y dale la oportunidad a un animalito de ser feliz.";
                                        $color = "success";
                                    }
                                ?>
                                <div class="progress-bar bg-<?= $color?>" role="progressbar" style="width: <?= $scoreT?>%" aria-valuenow="<?= $scoreT?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12" ALIGN="center">
                            <img src="<?= base_url() ?>private/media/icons/comida-de-perro.svg" width="180px" alt="" >
                            <p class="text-center">
                                <?= $resText;?>
                            </p>
                        </div>
                    </div>

                    
                    
                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <a  href="<?=base_url()?>InicioController">Volver al inicio</a>
                    </div>

                </div>
            </div>
        </div>




    </div>