<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>private/css/login/index.css">
    <link rel="icon" href="https://image.ibb.co/dEEbaA/baidu-logotipo-de-la-pata-2.png">
    <title><?php echo $string; ?></title>
  </head>
  <body>

    <div class="row">
      <div class="slider d-sm-none d-md-block d-lg-block d-xl-block col-md-6 col-lg-6 col-xl-6 rounded mx-n5"></div>
      <div class="col-md-6 col-lg-6 col-xl-6 rounded d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="card my-n5">
            <div class="card-body">

              <div class="mt-n5 d-flex justify-content-center">
                  <img src="<?=base_url() ?>private/media/icons/gold.svg" alt="" width="150px" height="150px" class="mt-n5">
              </div>

              <h4 class="card-title text-center mt-3">Inicio de Sesión</h4>
              <p class="card-text text-center">¡Que gusto tenerte aquí! Por favor completa los campos</p>

              <form>
                <div class="form-group">
                  <label for="correo">e-mail *</label>
                  <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted"> *Campos requeridos</small>
                </div>
                <div class="form-group">
                  <label for="pass">Contraseña *</label>
                  <input type="password" class="form-control" id="pass">
                </div>

              </form>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script type="text/javascript"  src="<?= base_url() ?>private/js/bootstrap/bootstrap.min.js"></script>

  </body>
</html>
