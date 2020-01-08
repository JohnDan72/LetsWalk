<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/inicio/index.css">
    <title>Let's Adopt | Inicio</title>

</head>

<body>

    <div class="slider">

        <h5 class="display-4 d-flex justify-content-center text-center text-white pt-5" data-entrance="from-right">
            Bienvenido a Let's Adopt
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

    <nav class="navbar sticky-top navbar-expand-md">
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
                    <a class="nav-link text-white" href="#">Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#">Adopta</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#">Contacto</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#">Faq's</a>
                </li>
                <li class="nav-item  dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?=base_url() ?>private/media/icons/user.png" width="25px" height="25px" alt="" id="icon-nav">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dd_menu">
                        <a class="dropdown-item text-white" href="#">¡Registrate!</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-white" href="#">Inicia Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <img src="https://i.ibb.co/7v3sy3c/Logo-portada.png" class="rounded mx-auto d-block img-fluid my-5 pt-5" alt="...">

    <h4 class="display-4 text-center my-5 pt-5">En let's walk deberás </h4>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4" data-entrance="from-left" data-entrance-delay="100">
                <div class="card border-light my-2">

                    <div class="card-body">
                        <img src="<?=base_url() ?>private/media/icons/browser.svg" width="128px" height="128px" class="card-img-top" alt="...">
                        <h5 class="card-title text-center text-info">Registrarte</h5>
                        <p class="card-text text-justify">Contamos con dos tipos de registros. Para personas que buscan
                            adoptar a
                            algún perrito o para beneficencias que buscan ser colaboradores de nosotros.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 " data-entrance="from-left" data-entrance-delay="200">

                <div class="card border-light my-2 ">

                    <div class="card-body">
                        <img src="<?=base_url() ?>private/media/icons/password.svg" width="128px" height="128px" class="card-img-top"
                            alt="...">
                        <h5 class="card-title text-center text-info">Iniciar Sesión</h5>
                        <p class="card-text text-justify">No podrás gozar de ninguno de nuestros servicios sin antes
                            iniciar sesión, asi que ¿Que esperas? Los datos que nos proporciones estan protegidos por la
                            ley</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mx-auto d-block" data-entrance="from-left"
                data-entrance-delay="300">

                <div class="card border-light my-1">

                    <div class="card-body">
                        <img src="<?=base_url() ?>private/media/icons/medal.svg" width="128px" height="128px" class="card-img-top" alt="...">
                        <h5 class="card-title text-center text-info">Adoptar</h5>
                        <p class="card-text text-justify">Puedes conocer a más de un cachorro, puedes buscar con el que
                            sientas esa química especial, solicita una cita y visítalo. Existen diversos centros de
                            adopción</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="slider_banner my-5 align-items-center" data-entrance="fade" data-entrance-delay="100">
        <div class="container">
            <h5 class="display-4 d-flex justify-content-center text-center text-white pt-5">
                <mark>¿Eres apto para adoptar? </mark>
            </h5>

            <p class="text-center text-white" data-entrance="fade" data-entrance-delay="200">
                <mark> Nostros te ayudamos a saberlo, contesta nuestro test</mark>
            </p>

            <div class=" d-flex justify-content-center" data-entrance="fade" data-entrance-delay="300">
                <button type="button" class="btn btn-color text-white ">¡Aquí!</button>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="dropdown-divider"></div>

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <hr>

        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
            </li>
        </ul>
        <!-- Call to action -->

        <hr>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script type="text/javascript"  src="<?= base_url() ?>private/js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript"  src="<?= base_url() ?>private/js/animations/scroll-entrance.js"></script>



</body>

</html>
