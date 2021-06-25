<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amavita Caucel</title>
    <meta name="author" content="https://agenciavandu.com" />

    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--Bootstrap 4.6-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-nav fixed-top patron">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/amavita-logo.svg')}}" width="200" alt="logotipo Amavita Caucel">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active hurmeregular">
          <a class="nav-link" href="#ama-vivir-en-caucel">Desarrollos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active hurmeregular">
          <a class="nav-link" href="#modelos">Amenidades</a>
        </li>
        <li class="nav-item active hurmeregular">
          <a class="nav-link" href="#beneficios">Beneficios</a>
        </li>
        <li class="nav-item active hurmeregular">
          <a class="nav-link" href="#contactanos">Contacto</a>
        </li>
      </ul>
    </div>
</div>
  </nav>





<body>

    @yield('content')

    <footer>
      <div class="bg-footer">
        <div class="container contenido-footer">
          <div class="row align-items-start justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <p class="footer-txt">
                <span style="color: #fff"><b>Visita nuestro punto de venta</b></span> <br>
                <span style="color: #fff">Plaza 55: C 59A Local 11 Cd. Caucel</span> <br>
                <span style="color: #fff"><b>Informes: </b>Tel. (999) 944 9952 punto de venta</span> <br>
                <span style="color: #fff">
                  <b>
                  www.grupocasitas.com.mx
                </b></span> <br>
                <span style="color: #fff"><i class="fab fa-facebook-square" style="margin-right: 5px"></i><i class="fab fa-instagram-square" style="margin-right: 5px"></i>GrupoCasitas</span>
              </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4">
              
                <div class="casitas">
                  <img src="{{ asset('img/casitas.svg')}}" class="img-fluid" alt="Grupo Casitas" width="300">
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>