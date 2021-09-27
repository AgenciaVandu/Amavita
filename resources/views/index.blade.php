@extends('layouts.amavita')
@section('content')
<header class="slider-header">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/index/Slider.png')}}" class="d-block w-100"  alt="Amavita Caucel | Informacion">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/index/Slider.png')}}" class="d-block w-100"  alt="Amavita Caucel | Informacion">
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</header>

<section id="introduccion">
    <div class="container">
        <div class="row bg-intro">
            <div class="col-md-6 col-sm-12 text-center">
                <img src="{{asset('img/index/desarrollo.png')}}" class="img-fluid" loading="lazy" alt="Desarrollo habitacional amavita caucel">
            </div>
            <div class="col-md-6 col-sm-12  text-center">
                <h3 class="hurme-semibold color-rose pt-3">Tú y tu familia disfrutarán de <br> todo lo bueno de la vida</h3>
                <h4 class="hurme-semibold color-blue pt-3">Desde: $000,000</h4>
                <p class="pt-2">Disfruta vivir en un desarrollo tipo privada habitacional<br>con la oportunidad de vivir cerca de todos los servicios<br> que tu familia necesita, así como la tranquilidad de<br> vivir en un lugar seguro, fresco y a la altura de<br> tus necesidades.</p>
                <a href="" class="btn btn-secondary mt-2">Desacarga el brochure</a>
            </div>
        </div>
    </div>
</section>

<section id="desarrollo">
    <div class="container">
        <h4 class="color-rose hurmebold text-center pt-5 pb-5">Ama vivir en Caucel, <br> 
            <span class="color-blue">todo esto está a tu al rededor</span>
        </h4>
        <div class="bg-2">
            <div class="espaciado">
                <div class="row text-center">
                    <div class="col">
                        <img src="{{asset ('img/index/centros-comerciales.svg')}}" width="100" loading="lazy" alt="Iconos de servicios">
                        <p class="hurme-semibold pt-3" >Escuelas</p>
                    </div>
                    <div class="col">
                        <img src="{{asset ('img/index/centros-comerciales.svg')}}" width="100" loading="lazy" alt="Iconos de servicios">
                        <p class="hurme-semibold pt-3">Entretenimiento</p>
                    </div>
                    <div class="col">
                        <img src="{{asset ('img/index/centros-comerciales.svg')}}" width="100" loading="lazy" alt="Iconos de servicios">
                        <p class="hurme-semibold pt-3" >Centros 
                            <br> Comerciales
                        </p>
                    </div>
                    <div class="col">
                        <img src="{{asset ('img/index/supermercado.svg')}}" width="100" loading="lazy" alt="Iconos de servicios">
                        <p class="hurme-semibold pt-3">Supermercados</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-secondary hurme-semibold mt-4">Conoce Amavita</a>
        </div>
        <div class="row pt-5 text-center">
            <div class="col-md-6">
                <h4 class="color-rose hurmebold">Tu podrías vivir aquí,<br>
                    <span class="color-blue">conoce tu próximo hogar</span>
                </h4>
                <div class="row espaciado-1">
                    <div class="col-6">
                        <img src="{{asset('img/index/tu-podrias/viviendas.svg')}}" width="70" loading="lazy" alt="">
                        <p class="hurme-semibold pt-2">CAUCEL</p>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('img/index/tu-podrias/viviendas.svg')}}" width="70" loading="lazy" alt="">
                        <p class="hurme-semibold pt-2">441 VIVIENDAS</p>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('img/index/tu-podrias/viviendas.svg')}}" width="70" loading="lazy" alt="">
                        <p class="hurme-semibold pt-2">CASETA DE <br> VIGILANCIA</p>
                    </div>
                    <div class="col-6">
                        <img src="{{asset('img/index/tu-podrias/viviendas.svg')}}" width="70" loading="lazy" alt="">
                        <p class="hurme-semibold pt-2">BARDA <br>PERIMETRAOL</p>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <a href="#" class="btn btn-secondary hurmebold">Conoce Amavita</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset ('img/index/familia.png')}}" class="img-fluid pt-4" loading="lazy" alt="Familia en amavita">
            </div>
            
        </div>
    </div>
</section>

<section id="modelos">
    <div class="container text-center">
        <h4 class="hurmebold color-rose pt-5">Amarás nuestros modelos, 
            <br>
            elige el ideal para ti
        </h4>
        <div class="bg-modelos">
            <div class="row pt-4">
                <div class="col-4">
                    <img src="{{asset('img/index/modelos/1.png')}}" class="img-fluid" loading="lazy" alt="">
                    <h5 class="color-blue hurmebold pt-3">ALULA <br> 
                        <span class="hurme-semibold">Desde: $000,000</span>
                    </h5>
                    
                </div>
                <div class="col-4">
                    <img src="{{asset('img/index/modelos/2.png')}}" class="img-fluid" loading="lazy" alt="">
                    <h5 class="color-blue hurmebold pt-3">Boreal <br> 
                        <span class="hurme-semibold">Desde: $000,000</span>
                    </h5>
                    
                </div>
                <div class="col-4">
                    <img src="{{asset('img/index/modelos/3.png')}}" class="img-fluid" loading="lazy" alt="">
                    <h5 class="color-blue hurmebold pt-3">CITALA <br> 
                        <span class="hurme-semibold">Desde: $000,000</span>
                    </h5>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

