<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="img/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="img/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="img/assets/css/style.css" rel="stylesheet">

    <title>Sistema de Monitoreo</title>
  </head>
  <body  class="form-02-main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <form action="{{ route('login') }}" method="post" >
                   @csrf
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h3 style="font-weight: bold;">Sistema de Monitoreo</h3>
                  </div>
                </div>
                Usuario
                <div class="form-group">
                  <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                </div>
                Contraseña
                <div class="form-group">
                  <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                
                <div class="form-group">
                  <button class="btn  btn-block fa-lg gradient-custom-2 mb-3 _btn_04" type="submit">Ingresar</button>
                  
                </div>

                <div class="form-group nm_lk"><p>Soporte</p></div>
              </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>