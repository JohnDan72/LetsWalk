<body>
    <div class="wrapper">
        <div class="main">
            <section class="content">
                <div class="parallax img-uno">
                    <div class="texto-interior">
                        <h2 class="display-4">Centro de adopción</h2>
                    </div>
                </div><!-- .parallax -->
            </section>
        </div>
    </div>



    <div class="container">
        <p class="text-center mt-5">A continuación, te presentamos a todos los perritos que estan presente en el sitio.</p>
        <p class="text-center mt-n2">Es importante saber que no todos se encuentran en el mismo lugar, por lo que te tendras que trasladar a puntos difrentes en el caso que estes
            interesado por uno de ellos.
        </p>
    </div>



    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="offset-lg-4 col-lg-4 col-md-12">

                <?php
                $attributes_formOpen = ['id' => 'formFilter', 'onSubmit' => 'return false', 'novalidate' => 'TRUE'];
                echo form_open(base_url() . 'AdoptaController/nombre_funcion', $attributes_formOpen, 'required');
                ?>

                <?php

                $options = array(
                    '0'     =>  'Todos',
                    '1'     =>  'Nombre',
                    '2'     =>  'Beneficiencia',
                    '3'     =>  'Adoptados',
                    '4'     =>  'No adoptados',
                    '5'     =>  'En proceso de adopción',
                    '6'     =>  'Sexo',
                    '7'     =>  'Edad',
                    '8'     =>  'Raza',
                    '9'     =>  'Agregados recientemente',
                    '10'    =>  'Más antiguos'
                );


                $options_2 = array(
                    'id'            => 'filtro',
                    'class'         => 'custom-select'
                );

                //echo form_dropdown('filtro', $options, 'large', $options_2);

                ?>
                <div class="input-group">
                    <?= form_dropdown('filtro', $options, 'large', $options_2) ?>

                    <div class="input-group-append">
                        <button class="btn btn-success"><img src="<?= base_url() ?>private/media/icons/buscar_white.svg" alt="" width="18px" class="search_cp pb-n2"></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>


            <?php echo form_close(); ?>
        </div>
    </div>


    <div class="container container">
        <div class="row mt-5 row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
                <div class="card shadow-sm">
                    <div id="id_perro" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url() ?>private/media/images/dog-1230839_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>private/media/images/weimaraner-2600694_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>private/media/images/park-bench-2471534_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#id_perro" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#id_perro" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>



                    <div class="card-body">
                        <h5 class="card-title">Nombre del perro</h5>
                        <p class="card-text text-justify"><b>Fundación: </b><a href="">Nombre de la fundación</a></p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto excepturi placeat voluptatibus temporibus deserunt molestias,
                            repudiandae.
                        </p>
                        <p class="text-right" data-toggle="popover" title="Acerca del perro" data-content="<b>Raza:</b> <?php echo 'Pastor Aleman<br>' ?>
                                          <b>Edad:</b> <?php echo '1 año 12 meses<br>' ?>
                                          <b>Tamaño:</b> <?php echo 'Mediano<br>' ?>
                                          <b>Tipo de pelaje:</b> <?php echo 'Corto<br>' ?>
                                          <b>¿Cuenta con carnet fisico?:</b> <?php echo 'Sí' ?>
                                          ">

                            <img src="<?= base_url() ?>private/media/icons/info.svg" width="18px">
                        </p>
                    </div>

                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-dark btn-sm">Quiero conocerlo</button>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card shadow-sm">
                    <div id="id_perro" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url() ?>private/media/images/dog-1230839_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>private/media/images/weimaraner-2600694_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>private/media/images/park-bench-2471534_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#id_perro" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#id_perro" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>



                    <div class="card-body">
                        <h5 class="card-title">Nombre del perro</h5>
                        <p class="card-text text-justify"><b>Fundación: </b><a href="">Nombre de la fundación</a></p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto excepturi placeat voluptatibus temporibus deserunt molestias,
                            repudiandae.
                        </p>
                        <p class="text-right" data-toggle="popover" title="Acerca del perro" data-content="<b>Raza:</b> <?php echo 'Pastor Aleman<br>' ?>
                                          <b>Edad:</b> <?php echo '1 año 12 meses<br>' ?>
                                          <b>Tamaño:</b> <?php echo 'Mediano<br>' ?>
                                          <b>Tipo de pelaje:</b> <?php echo 'Corto<br>' ?>
                                          <b>¿Cuenta con carnet fisico?:</b> <?php echo 'Sí' ?>
                                          ">

                            <img src="<?= base_url() ?>private/media/icons/info.svg" width="18px">
                        </p>
                    </div>

                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-dark btn-sm">Quiero conocerlo</button>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card shadow-sm">
                    <div id="id_perro" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= base_url() ?>private/media/images/dog-1230839_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>private/media/images/weimaraner-2600694_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>private/media/images/park-bench-2471534_1920.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#id_perro" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#id_perro" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>



                    <div class="card-body">
                        <h5 class="card-title">Nombre del perro</h5>
                        <p class="card-text text-justify"><b>Fundación: </b><a href="">Nombre de la fundación</a></p>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto excepturi placeat voluptatibus temporibus deserunt molestias,
                            repudiandae.
                        </p>
                        <p class="text-right" data-toggle="popover" title="Acerca del perro" data-content="<b>Raza:</b> <?php echo 'Pastor Aleman<br>' ?>
                                          <b>Edad:</b> <?php echo '1 año 12 meses<br>' ?>
                                          <b>Tamaño:</b> <?php echo 'Mediano<br>' ?>
                                          <b>Tipo de pelaje:</b> <?php echo 'Corto<br>' ?>
                                          <b>¿Cuenta con carnet fisico?:</b> <?php echo 'Sí' ?>
                                          ">

                            <img src="<?= base_url() ?>private/media/icons/info.svg" width="18px">
                        </p>
                    </div>

                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-outline-dark btn-sm">Quiero conocerlo</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="offset-4 col-4">
                    <nav aria-label="Page navigation example d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>



    </div>