<body>

    <div class="wrapper">
        <div class="main">
            <section class="content">
                <div class="parallax img-uno">
                    <div class="texto-interior">
                        <h2 class="display-4 text-white">El Test</h2>
                    </div>
                </div><!-- .parallax -->

                <div class="texto">
                    <p class="text-center mb-3">
                        A continuación, te mostramos el test que Let's Walk diseño, esto te ayudará a saber si realmente estas listo para
                        adoptar a un perrito. Se sincero contigo mismo.
                    </p>
                </div>
            </section>
        </div>
    </div>



    <div class="container" id="main_1">
        <div class="bs-stepper container ">
            <div class="bs-stepper-header" role="tablist" id="step_h" ALIGN="center">
                <!-- your steps here -->
                <div class="step" data-target="#part_1 ">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle"><img src="<?= base_url() ?>private/media/icons/galleta-de-perro.svg" alt=""></span>
                        <span class="bs-stepper-label">Paso 1</span>
                    </button>
                </div>

                <div class="line"></div>
                <div class="step " data-target="#part_2">
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
                            <label class="form-check-label">
                                No tengo tiempo definido, pero el espacio en casa es grande y no me preocupo.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_2" value="2">
                            <label class="form-check-label">
                                Por las noches, ya que salgo temprano a trabajar y llego después de las 6 pm.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_3" value="3">
                            <label class="form-check-label">
                                Los fines de semana, porque otros miembros de la familia se encargan entre semana.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_4" value="4">
                            <label class="form-check-label">
                                Al menos dos horas al día, ya que mi trabajo en casa o cerca de casa me lo permite.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_1" id="r1_5" value="5">
                            <label class="form-check-label">
                                Por la mañana sale a correr conmigo y fines de semana busco alguna actividad al aire libre para pasearlo. Por las noches juego con él.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">2. ¿Cuánto estoy dispuesto a gastar para su manutención mensual?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_1" value="1">
                            <label class="form-check-label">
                                50 a 100 pesos.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_2" value="2">
                            <label class="form-check-label">
                                100 a 200 pesos.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_3" value="3">
                            <label class="form-check-label">
                                200 a 400 pesos.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_2" id="r2_4" value="4">
                            <label class="form-check-label">
                                Sin límite, ya que puedo asumir cualquier gasto imprevisto.
                            </label>
                        </div>
                    </div>


                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">3. ¿Conoces las leyes que protegen a los animales?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_3" id="r3_1" value="1">
                            <label class="form-check-label">
                                No, ni idea.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_3" id="r3_2" value="2">
                            <label class="form-check-label">
                                Poco.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_3" id="r3_3" value="3">
                            <label class="form-check-label">
                                Sí.
                            </label>
                        </div>
                    </div>


                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">4. ¿Por qué deseas un perro?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_4" id="r4_1" value="1">
                            <label class="form-check-label">
                                Por moda. Para cruzarlo y vender los cachorros
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_4" id="r4_2" value="2">
                            <label class="form-check-label">
                                Porque mi mejor amigo, o casi todos mis vecinos tienen uno.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_4" id="r4_3" value="3">
                            <label class="form-check-label">
                                Porque mi hijo(a) insiste y desea tener un perrito.
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_4" id="r4_4" value="4">
                            <label class="form-check-label">
                                Para no estar sólo(a) o por terapia.
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_4" id="r4_5" value="5">
                            <label class="form-check-label">
                                Por seguridad mía y de mi casa.
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_4" id="r4_6" value="6">
                            <label class="form-check-label">
                                Porque amo a los animales, he tenido con anterioridad y deseo darle un hogar a un perro que lo necesite
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">5. ¿Qué tan frecuentemente te mudas de casa?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_5" id="r5_1" value="1">
                            <label class="form-check-label">
                                ¡Me encanta! Al menos una cada 2 años
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_5" id="r5_2" value="2">
                            <label class="form-check-label">
                                He tenido de 2 a 3 cambios de casa en toda mi vida.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_5" id="r5_3" value="3">
                            <label class="form-check-label">
                                Llevo más de 10 años en la misma casa.
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_5" id="r5_4" value="4">
                            <label class="form-check-label">
                                Nunca me he cambiado de casa.
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary mt-5 mb-5" id="next_1" onclick="stepper.next()">Siguiente</button>
                    </div>

                </div>

                <div id="part_2" class="content mt-5" role="tabpanel" aria-labelledby="information-part-trigger">

                    <p class="p_p">6. ¿Qué tan frecuentemente cambias de trabajo?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_6" id="r6_1" value="1">
                            <label class="form-check-label">
                                Promedio una vez por año.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_6" id="r6_2" value="2">
                            <label class="form-check-label">
                                Cada 2 o 3 años.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_6" id="r6_3" value="3">
                            <label class="form-check-label">
                                Entre 4 y 9 años.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_6" id="r6_4" value="4">
                            <label class="form-check-label">
                                Llevo más de 10 años en el mismo trabajo.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">7. ¿En qué espacio vivirá?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_7" id="r7_1" value="1">
                            <label class="form-check-label">
                                En el baño.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_7" id="r7_2" value="2">
                            <label class="form-check-label">
                                En el balcón.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_7" id="r7_3" value="3">
                            <label class="form-check-label">
                                En un departamento amplio.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_7" id="r7_4" value="4">
                            <label class="form-check-label">
                                En una casa con jardín.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">8. ¿Cuál de los siguientes proyectos consideras a corto y mediano plazo?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_8" id="r8_1" value="1">
                            <label class="form-check-label">
                                Hacer un viaje largo a otro país o ciudad.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_8" id="r8_2" value="2">
                            <label class="form-check-label">
                                Independizarme o comprarme un departamento para mudarme sólo.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_8" id="r8_3" value="3">
                            <label class="form-check-label">
                                Tener hijos.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_8" id="r8_4" value="4">
                            <label class="form-check-label">
                                Casarme.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">9. ¿Cuando viajes, dónde se quedará tu perro?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_9" id="r9_1" value="1">
                            <label class="form-check-label">
                                Aún no lo sé. Ya se me ocurrirá algo a última hora.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_9" id="r9_2" value="2">
                            <label class="form-check-label">
                                En una veterinaria.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_9" id="r9_3" value="3">
                            <label class="form-check-label">
                                En casa de algún pariente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_9" id="r9_4" value="4">
                            <label class="form-check-label">
                                Una pensión.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_9" id="r9_5" value="5">
                            <label class="form-check-label">
                                Procuraré vacacionar en lugares donde acepten mascotas.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">10. ¿Conoces lugares públicos PET FRIENDLY (hoteles y restaurantes especiales para perro)?</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_10" id="r10_1" value="1">
                            <label class="form-check-label">
                                No me interesan.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_10" id="r10_2" value="2">
                            <label class="form-check-label">
                                Sé de algunos, pero pienso que mi perro debe estar acostumbrado a estar en casa.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_10" id="r10_3" value="3">
                            <label class="form-check-label">
                                Sí y me encantaría frecuentarlos con mi mascota.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_10" id="r10_4" value="4">
                            <label class="form-check-label">
                                Una pensión.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_10" id="r10_5" value="5">
                            <label class="form-check-label">
                                Procuraré vacacionar en lugares donde acepten mascotas.
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-dark mt-5 mb-5" onclick="stepper.previous()" id="back_2">Atras</button>
                        <button class="btn btn-primary mt-5 mb-5 ml-3" onclick="stepper.next()" id="next_2">Siguiente</button>
                    </div>

                </div>

                <div id="part_3" class="content mt-5" role="tabpanel" aria-labelledby="information-part-trigger">

                    <p class="p_p">11. Alguna de las personas que convivirá en casa con la mascota tiene la siguiente característica:</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_11" id="r11_1" value="1">
                            <label class="form-check-label">
                                Alérgica.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_11" id="r11_2" value="2">
                            <label class="form-check-label">
                                Iracunda, grita y se altera fácilmente.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_11" id="r11_3" value="3">
                            <label class="form-check-label">
                                Depresiva.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_11" id="r11_4" value="4">
                            <label class="form-check-label">
                                Ninguna de las anteriores.
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_11" id="r11_4" value="5">
                            <label class="form-check-label">
                                Adora a los animales igual que yo.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">12. Levantar las heces caninas es una costumbre que:</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_12" id="r12_1" value="1">
                            <label class="form-check-label">
                                No se acostumbra donde vivo.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_12" id="r12_2" value="2">
                            <label class="form-check-label">
                                Me desagrada, pero creo importante levantarlas.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_12" id="r12_3" value="3">
                            <label class="form-check-label">
                                Es fundamental recogerlas, a fin de cuidar el medio ambiente.
                            </label>
                        </div>
                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-5 offset-sm-4 col-sm-4">
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>

                    <p class="p_p">13. En cuanto tu perro muerda zapatos o muebles y haga travesuras:</p>
                    <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_13" id="r13_1" value="1">
                            <label class="form-check-label">
                                Se le golpea con periódico.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="p_13" id="r13_2" value="2">
                            <label class="form-check-label">
                                Se le castiga encerrándolo o amarrándolo.
                            </label>
                        </div>
                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_13" id="r13_3" value="3">
                            <label class="form-check-label">
                                Nada se debe hacer, pues es parte de su naturaleza cuando son pequeños y tienen la necesidad de morder. Si acaso conseguirle juguetes que cubran esa función.
                            </label>
                        </div>

                        <div class=" form-check">
                            <input class="form-check-input" type="radio" name="p_13" id="r13_4" value="4">
                            <label class="form-check-label">
                                Se le corrige en el momento con una llamada de atención firme.
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-dark mt-5 mb-5" onclick="stepper.previous()" id="back_3">Atras</button>
                        <button class="btn btn-success mt-5 mb-5 ml-3" onclick="return evaluaTest();">Terminar</button>
                    </div>


                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
    function evaluaTest() {
            //Recuperación de respuestas
            var res = [];
            res[0] = 0;

            res[1] = ($("input[name='p_1']:checked").val()) ? $("input[name='p_1']:checked").val() : 0;
            res[2] = ($("input[name='p_2']:checked").val()) ? $("input[name='p_2']:checked").val() : 0;
            res[3] = ($("input[name='p_3']:checked").val()) ? $("input[name='p_3']:checked").val() : 0;
            res[4] = ($("input[name='p_4']:checked").val()) ? $("input[name='p_4']:checked").val() : 0;
            res[5] = ($("input[name='p_5']:checked").val()) ? $("input[name='p_5']:checked").val() : 0;
            res[6] = ($("input[name='p_6']:checked").val()) ? $("input[name='p_6']:checked").val() : 0;
            res[7] = ($("input[name='p_7']:checked").val()) ? $("input[name='p_7']:checked").val() : 0;
            res[8] = ($("input[name='p_8']:checked").val()) ? $("input[name='p_8']:checked").val() : 0;
            res[9] = ($("input[name='p_9']:checked").val()) ? $("input[name='p_9']:checked").val() : 0;
            res[10] = ($("input[name='p_10']:checked").val()) ? $("input[name='p_10']:checked").val() : 0;
            res[11] = ($("input[name='p_11']:checked").val()) ? $("input[name='p_11']:checked").val() : 0;
            res[12] = ($("input[name='p_12']:checked").val()) ? $("input[name='p_12']:checked").val() : 0;
            res[13] = ($("input[name='p_13']:checked").val()) ? $("input[name='p_13']:checked").val() : 0;


            //Preparación del formulario a enviar
            var myForm = new FormData();
            myForm.append('respuesta', JSON.stringify(res)); //se crea un input donde se manda el array en json para pasar por post
            myForm.append('max_score', 56); //Nota máxima del test (puede variar conforme a los cambios)

            fetch('<?php echo base_url() ?>TestController/evaluaTestFetch', {
                    method: 'POST',
                    body: myForm
                })
                .then(function(response) {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw "Error en la llamada Ajax";
                    }
                })
                .then(function(myJson) {
                    //alert("res: " + myJson);
                    //se prepara para mostrar Resultado despues de que Jesus termine la vista correspondiente
                    window.location.replace("<?php echo base_url();?>TestController/mostrarRes");
                })
                .catch(function(err) {
                    console.log(err);
                });


        }
</script>