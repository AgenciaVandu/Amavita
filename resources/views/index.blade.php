@extends('layouts.amavita')
@section('content')

<header>
    <div class="bg-overlay">
        
    </div>
</header>

<section id="ama-vivir-en-caucel" class="mt-5">
    <div class="ama-vivir">
        <div class="container">
            <div class="titular">
                <img src="{{asset('img/ama-vivir.svg') }}" alt="Ama vivir en Caucel | Amtiavita " class="img-fluid" width="480">
            </div>
        </div>
    </div>
    <div class="hight-lights">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-6 col-6 col-sm-6">
                            <div class="icon">
                                <img src="{{asset('img/caracteristicas/caucel.svg') }}" class="img-fluid" width="110" alt="">
                                <h5 class="hurmebold">Caucel</h5>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-6 col-sm-6">
                            <div class="icon">
                                <img src="{{asset('img/caracteristicas/hectareas.svg') }}" class="img-fluid" width="110" alt="">
                                <h5 class="hurmebold">6.8<br> <span class="hurmeregular">Perimetral</span></h5>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-6 col-6 col-sm-6">
                            <div class="icon">
                                <img src="{{asset('img/caracteristicas/viviendas.svg') }}" class="img-fluid" width="110" alt="">
                                <h5 class="hurmebold">441<br> <span class="hurmeregular">viviendas</span></h5>
                            
                            </div>
                        </div>
                        <div class="col-lg-6 col-6 col-sm-6">
                            <div class="icon">
                                <img src="{{asset('img/caracteristicas/caseta.svg') }}" class="img-fluid" width="110" alt="">
                                <h5 class="hurmebold">Caseta<br> <span class="hurmeregular">de vigilancia</span></h5>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-6 col-6 col-sm-6">
                            <div class="icon">
                                <img src="{{asset('img/caracteristicas/barda.svg') }}" class="img-fluid" width="110" alt="">
                                <h5 class="hurmebold">Barda <br> <span class="hurmeregular">Perimetral</span></h5>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-6 col-sm-6">
                            <div class="icon">
                                <img src="{{asset('img/caracteristicas/servicios.svg') }}" class="img-fluid" width="110" alt="">
                                <h5 class="hurmebold">Todos los servicios<br> <span class="hurmeregular">a tu alcance</span></h5>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="modelos" class="mt-5">
    <div class="container">
        <h1 style="text-align: center" class="hurmebold">Nuestros Modelos</h1>
       <div class="modelos">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="modelo">
                    <img src="{{asset('img/ALULA.png') }}" class="img-fluid" alt="">
                </div>
                <div class="especificaciones">
                        <p  class="hurmeregular">Construcción: <span class="hurmebold">50.93 m2</span><br>
                        <span  class="hurmeregular">Terreno desde: <span class="hurmebold">5 x 20 m</span></span></p>
                        <p></p>
                    <li class="hurmeregular">2 recámaras</li>
                    <li class="hurmeregular">Baño completo</li>
                    <li class="hurmeregular">Pasillo lateral</li>
                    <li class="hurmeregular">Patio</li>
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="modelo">
                    <img src="{{asset('img/BOREAL.png') }}" class="img-fluid" alt="">
                </div>
                <div class="especificaciones">
                        <p  class="hurmeregular">Construcción: <span class="hurmebold">61.86 m2</span><br>
                        <span  class="hurmeregular">Terreno desde: <span class="hurmebold">6 x 20 m</span></span></p>
                        <p></p>
                    <li class="hurmeregular">2 recámaras</li>
                    <li class="hurmeregular">Baño completo</li>
                    <li class="hurmeregular">Pasillo lateral</li>
                    <li class="hurmeregular">Patio</li>
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="modelo">
                    <img src="{{asset('img/CITALA.png') }}" class="img-fluid" alt="">
                </div>
                <div class="especificaciones">
                        <p  class="hurmeregular">Construcción: <span class="hurmebold">69.86 m2</span><br>
                        <span  class="hurmeregular">Terreno desde: <span class="hurmebold">5.5 x 20 m</span></span></p>
                        <p></p>
                    <li class="hurmeregular">2 recámaras</li>
                    <li class="hurmeregular">1 y 1/2 Baños</li>
                    <li class="hurmeregular">Amplio patio de: <span class="hurmebold"> 39m2</span></li>
                    <li class="hurmeregular">Pasillo lateral</li>
                    </div>
            </div>
        </div>
       </div>
    </div>

</section>

<section id="beneficios">
    <div class="bg-beneficios">
        <div class="container">
            <div class="titular">
                <h1 class="hurmebold">Beneficios</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contenido-beneficios">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 sinpadding">
                    <div class="row ">
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/1.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 sinpadding">
                            <h4 class="beneficio hurme-semibold">Supermercados</h4>
                        </div>
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/3.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 sinpadding">
                            <h4 class="beneficio hurme-semibold ">Centros Comreciales</h4>
                        </div>
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/4.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 sinpadding">
                            <h4 class="beneficio hurme-semibold ">Escuelas</h4>
                        </div>
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/6.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 sinpadding">
                            <h4 class="beneficio hurme-semibold ">Entretenimiento</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 sinpadding">
                    <div class="row">
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/2.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 sinpadding">
                            <h4 class="beneficio hurme-semibold ">Bancos</h4>
                        </div>
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/8.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8  sinpadding">
                            <h4 class="beneficio hurme-semibold">Gasolineras</h4>
                        </div>
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/5.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8  sinpadding">
                            <h4 class="beneficio hurme-semibold">Hospitales y Farmacias</h4>
                        </div>
                        <!--Elementos-->
                        <div class="col-lg-4 col-md-4 col-sm-4 sinpadding">
                            <div class="beneficios-ico">
                                <img src="{{asset('img/beneficios/7.svg') }}" alt="" class="img-fluid" width="100">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8  sinpadding">
                            <h4 class="beneficio hurme-semibold">Pago de Servicios</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contactanos" class="mt-5">
    <h1 style="text-align: center" class="hurmebold">Contáctanos</h1>
    <div class="bg-contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="mapa">
                        <img src="{{asset('img/mapa.svg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                </div>
            </div>
        </div>
    </div>

</section>

@endsection

