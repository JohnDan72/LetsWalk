<body>

    <div class="wrapper">
        <div class="main">
            <section class="content">
                <div class="parallax img-uno">
                    <div class="texto-interior">
                        <h2 class="display-4">El Test</h2>
                    </div>
                </div><!-- .parallax -->

                <div class="texto">
                    <p class="text-center mb-3">
                        A continuación, te mostramos el test que de Ardogs, esto te ayudará a saber si realmente estas listo para
                        adoptar a un perrito. Se sincero contigo mismo.
                    </p>
                </div>
            </section>
        </div>
    </div>



    <div class="container">
        <div class="bs-stepper container">
            <div class="bs-stepper-header" role="tablist">
                <!-- your steps here -->
                <div class="step" data-target="#part_1">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/galleta-de-perro.svg" alt=""></span>
                        <span class="bs-stepper-label">Paso 1</span>
                    </button>
                </div>

                <div class="line"></div>
                <div class="step" data-target="#part_2">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/perro.svg"></span>
                        <span class="bs-stepper-label">Paso 2</span>
                    </button>
                </div>

                <div class="line"></div>
                <div class="step" data-target="#part_3">
                    <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/hueso.svg"></span>
                        <span class="bs-stepper-label">Paso 3</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">

                <!-- your steps content here -->
                <div id="part_1" class="content mt-5" role="tabpanel" aria-labelledby="logins-part-trigger">

                    <p class="p_p">1. ¿Cuánto tiempo puedes dedicarle a tú mascota?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_1" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                No tengo tiempo definido, pero el espacio en casa es grande y no me preocupo.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_2" value="2">
                            <label class="form-check-label" for="exampleRadios2">
                                Por las noches, ya que salgo temprano a trabajar y llego después de las 6 pm.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_3" value="3">
                            <label class="form-check-label" for="exampleRadios2">
                                Los fines de semana, porque otros miembros de la familia se encargan entre semana.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_4" value="4">
                            <label class="form-check-label" for="exampleRadios2">
                                Al menos dos horas al día, ya que mi trabajo en casa o cerca de casa me lo permite.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_5" value="5">
                            <label class="form-check-label" for="exampleRadios2">
                                Por la mañana sale a correr conmigo y fines de semana busco alguna actividad al aire libre para pasearlo. Por las noches juego con él.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-5">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">2. ¿Cuánto estoy dispuesto a gastar para su manutención mensual?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_1" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                50 a 100 pesos.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_2" value="2">
                            <label class="form-check-label" for="exampleRadios2">
                                100 a 200 pesos.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_3" value="3">
                            <label class="form-check-label" for="exampleRadios2">
                                200 a 400 pesos.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_4" value="4">
                            <label class="form-check-label" for="exampleRadios2">
                                Sin límite, ya que puedo asumir cualquier gasto imprevisto.
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-info" id="next_1">Siguiente</button>
                </div>






                <div id="part_2" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <h2 class="display-4">Hola 2</h2>
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
                    <button class="btn btn-info" id="next_2">Siguiente</button>
                    <button class="btn btn-danger" id="back_2">Atras</button>

                </div>

                <div id="part_3" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <h2 class="display-4">Hola 3</h2>
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
                    <button class="btn btn-danger" id="back_3">Atras</button>
                    <button class="btn btn-info">Terminar</button>
                </div>

            </div>
        </div>
    </div>




    <script>
        var stepper
        document.addEventListener('DOMContentLoaded', function() {
            stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        var next_1 = document.getElementById("next_1");
        var next_2 = document.getElementById("next_2");
        var back_2 = document.getElementById("back_2");
        var back_3 = document.getElementById("back_3");

        next_1.addEventListener('click', () => {
            stepper.next()
        })

        next_2.addEventListener('click', () => {
            stepper.next()
        })

        back_2.addEventListener('click', () => {
            stepper.previous()
        })

        back_3.addEventListener('click', () => {
            stepper.previous()
        })
    </script>