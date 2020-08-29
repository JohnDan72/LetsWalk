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
                $attributes_formOpen = ['id' => 'formFilter'];
                echo form_open(base_url() . 'AdoptaController/index', $attributes_formOpen, 'required');
                ?>

                <?php

                $options = array(
                    '1'     =>  'Todos',
                    '2'     =>  'Nombre',
                    '3'     =>  'Beneficiencia',
                    '4'     =>  'No adoptados',
                    '5'     =>  'Adoptados',
                    '6'     =>  'En proceso de adopción',
                    '7'     =>  'Género',
                    '8'     =>  'Edad',
                    '9'     =>  'Raza',
                    '10'    =>  'Agregados recientemente',
                    '11'    =>  'Más antiguos'
                );


                $options_2 = array(
                    'id'            => 'id_filtro',
                    'class'         => 'custom-select'
                );

                //echo form_dropdown('filtro', $options, 'large', $options_2);

                ?>
                <div class="input-group">
                    <?= form_dropdown('Filtro', $options, 'large', $options_2) ?>

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success"><img src="<?= base_url() ?>private/media/icons/buscar_white.svg" alt="" width="18px" class="search_cp pb-n2"></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>


            <?php echo form_close(); ?>
        </div>
    </div>

    <!--Filtrado de perros (CARDS)--->
    <div class="container container">
        <div class="row mt-5 row row-cols-1 row-cols-md-3">
            <?php if(isset($results)) {
                $cont=0;
                foreach ($results as $fila) {
                    //echo "Nombre perro: ".$fila['Nombre_Perro']." Status: ".$fila['Status']."<br><br>"; 
                    ?>
                    <div class="col mb-4">
                        <div class="card shadow-sm" style="max-height: 500px;">
                            <div id="id_perro_<?php echo ($cont+1);?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" style="max-height: 200px;">
                                    <?php echo $fotosCarousel[$cont];?>
                                    <!--div class="carousel-item active">
                                        <img src="<?= base_url() ?>private/img_perros/<?= $fila->Nombre_Foto_File;?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url() ?>private/img_perros/<?= $fila->Nombre_Foto_File;?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url() ?>private/img_perros/<?= $fila->Nombre_Foto_File;?>" class="d-block w-100" alt="...">
                                    </div-->
                                </div>
                                <a class="carousel-control-prev" href="#id_perro_<?php echo ($cont+1);?>" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#id_perro_<?php echo ($cont+1);?>" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>


                            <div class="card-body">
                                <h5 class="card-title"><?= $fila['Nombre_Perro'];?></h5>
                                <p class="card-text text-justify">
                                    <b>Fundación: </b>
                                    <a href="##">
                                        <?php echo $fila['NombreB'];?>
                                    </a>
                                </p>
                                <p class="text-justify">
                                    <?= $fila['DescripcionP']?>
                                </p>
                                <p class="text-right" data-toggle="popover" title="Acerca del perro" data-content="<b>Raza:</b> <?php echo $fila['Raza']."<br>" ?>
                                                  <b>Edad:</b> <?php echo $fila['Edad']."<br>" ?>
                                                  <b>Tamaño:</b> <?php echo $fila['Tamanio']."<br>" ?>
                                                  <b>Tipo de pelaje:</b> <?php echo $fila['Tipo_Pelaje']."<br>" ?>
                                                  <b>¿Cuenta con carnet fisico?:</b> <?php echo ($fila['Carnet_Fisico'])?"Sí <br>":"No <br>";?>
                                                  ">

                                    <img src="<?= base_url() ?>private/media/icons/info.svg" width="18px">
                                </p>
                            </div>

                            <div class="card-footer text-center">
                                <?php
                                    extract($this->session->userdata('user'));
                                    if($Id_Beneficencia==null){

                                       if($fila['Status_Perro']=='2'){
                                            ?>
                                                <a href="<?= base_url();?>GenerarcitaController/index/<?= $fila['Id_Perro'];?>" class="btn btn-outline-dark btn-sm">Quiero conocerlo</a>
                                            <?php
                                        }
                                        else if($fila['Status_Perro']=='1'){
                                            ?>
                                                <span style="font-size: 14px; color: var(--amber-darken-1);">En proceso de Adopción</span>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <span style="font-size: 14px; color: var(--grey-darken-1);">Adoptado</span>
                                            <?php
                                        }
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
            <?php $cont++;}} else{?>
                <div>Perro(s) NO Encontrados.</div>
            <?php }?>
        </div>


        <!--Paginacion de los filtros-->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="offset-4 col-4">
                    <nav aria-label="Page navigation example d-flex justify-content-center">
                        <?php if (isset($links)) { ?>
                            <?php echo $links ?>
                        <?php } ?>

                        <!--ul class="pagination">
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
                        </ul-->
                    </nav>
                </div>
            </div>
        </div>



    </div>