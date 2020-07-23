<body>

    <div class="slider">
        <h5 class="display-4 d-flex justify-content-center text-center text-white pt-5" data-entrance="from-right">
            Bienvenido a Let's Adopt!
        </h5>
        <p class="text-center text-white d-none d-sm-block d-md-block d-lg-block d-xl-block" data-entrance="from-left">
            ¿Estas pensando en un nuevo perrito? Nuestra recomendación siempre será:
        </p>

        <p class="text-center text-white d-block d-sm-none d-md-none d-lg-none d-xl-none" data-entrance="from-left">
            ¿Estas pensando en un nuevo perrito? Nuestra recomendación siempre será adoptar
        </p>

        <div class=" d-flex justify-content-center" data-entrance="from-right">
            <button type="button"
                class="btn btn-color text-white d-none d-sm-block d-md-block d-lg-block d-md-xl-block">¡Adopta!</button>
        </div>

        <div class="arrow arrow-first mr-auto align-bottom"></div>
        <div class="arrow arrow-second mr-auto align-bottom"></div>
    </div>

    <img src="https://i.ibb.co/7v3sy3c/Logo-portada.png" class="rounded mx-auto d-block img-fluid my-5 pt-5" alt="...">

    <h4 class="display-4 text-center my-5 pt-5">En Let's walk deberás </h4>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 " data-entrance="from-left" data-entrance-delay="100">
                <div class="card border-light my-2 zoom">
                    <div class="card-body ">
                        <img src="<?=base_url() ?>private/media/icons/browser.svg" width="128px" height="128px" class="card-img-top mt-4" alt="...">
                        <h5 class="card-title text-center text-info mt-4">Registrarte</h5>
                        <p class="card-text text-center mb-4 mt-4">Contamos con dos tipos de registros. Para personas que buscan
                            adoptar a
                            algún perrito o para beneficencias que buscan ser colaboradores de nosotros.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 " data-entrance="from-left" data-entrance-delay="200">

                <div class="card border-light my-2 zoom">
                    <div class="card-body">
                        <img src="<?=base_url() ?>private/media/icons/password.svg" width="128px" height="128px" class="card-img-top mt-4"
                            alt="">
                        <h5 class="card-title text-center text-info mt-4">Iniciar Sesión</h5>
                        <p class="card-text text-center mb-4 mt-4">No podrás gozar de ninguno de nuestros servicios sin antes
                            iniciar sesión, asi que ¿Que esperas? Los datos que nos proporciones estan protegidos por la
                            ley</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mx-auto d-block" data-entrance="from-left"
                data-entrance-delay="300">

                <div class="card border-light my-1 zoom">
                    <div class="card-body">
                        <img src="<?=base_url() ?>private/media/icons/medal.svg" width="128px" height="128px" class="card-img-top mt-4" alt="...">
                        <h5 class="card-title text-center text-info mt-4">Adoptar</h5>
                        <p class="card-text text-center mb-4 mt-4">Puedes conocer a más de un cachorro, puedes buscar con el que
                            sientas esa química especial, solicita una cita y visítalo. Existen diversos centros de
                            adopción</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="offset-4 col-4" >
            <div class="dropdown-divider"></div>
        </div>
    </div>

    <div class="slider_banner my-5 align-items-center d-flex justify-content-center container" data-entrance="fade" data-entrance-delay="100">
        <div class="container">
            <h5 class="display-4  text-center text-white pt-5 ">
               ¿Eres apto para adoptar?
            </h5>

            <p class="text-center text-white mt-2" data-entrance="fade" data-entrance-delay="200">
               Nostros te ayudamos a saberlo, contesta nuestro test
            </p>

            <div class=" d-flex justify-content-center mt-3" data-entrance="fade" data-entrance-delay="300">
                <a href="<?= base_url()?>TestController" class="btn btn-color text-white ">¡Aquí!</a>
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-4">
        <div class="offset-4 col-4" >
            <div class="dropdown-divider"></div>
        </div>
    </div>


    <div class="container mt-5 d-block">
        <h3 class="display-4 mt-4 mb-4 text-center">Testimonios</h3>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner  align-content-center" ALIGN="center">
                <div class="carousel-item active">
                    <img src="https://i.ibb.co/NNscFrZ/1rahca.jpg" class="circle-img" alt="" width="128px" heigth="128px">
                    <p class="text-center cursive mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nisi amet similique exercitationem blanditiis? Reprehenderit molestias tempore iste ipsam at, ea, consequuntur, reiciendis eveniet excepturi iure voluptatem nisi sint dignissimos?Quibusdam perferendis ab ipsa totam! Eos est libero quasi dolor reprehenderit illo deleniti consequatur eius beatae. Possimus perferendis neque adipisci dolorem ipsa officia, recusandae a repellendus quas enim minus eum.</p>
                </div>
                
            </div>
        </div>
    </div>


    <div class="row mt-4 mb-4">
        <div class="offset-4 col-4" >
            <div class="dropdown-divider"></div>
        </div>
    </div>

    <div class="container mb-5">
        <h3 class="display-4 mt-4 mb-5 text-center">¿Quienes somos?</h3>
        <p class="text-center">
            Somos una organización sin fines de lucro, que busca disminuir los índices de perros callejeros, así como los índices de 
            sacrificios, además de fomentar la empatía, la solidaridad y el amor en las familias, a través del sistema de recepción de 
            citas a través de internet para conocer a un perro de una organización afiliada para que puedas adoptarlo. De esta manera 
            creamos una manera más rápida y fácil de vincular perros callejeros con familias capaces de darle el amor y el cuidado que 
            merecen.
        </p>

        <div class=" d-flex justify-content-center mt-3 mb-5" data-entrance="fade" data-entrance-delay="300">
            <button type="button" class="btn btn-color text-white ">Conoce más</button>
        </div>
    </div>
 


    


  
