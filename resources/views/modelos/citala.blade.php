@extends('layouts.amavita')
@section('content')
    
    <header>
        <div class="bg-modelos-4">
            <div class="container pb-5">
                <div class="text-center titular-modelos-2">
                    <img src="{{asset('img/ama-vivir.svg')}}" class="img-fluid" alt="Ama vivir en Caucel">
                </div>
            </div>
        </div>
    </header>

    <section id="cabecera">
        <div class="container">
            <div class="d-none d-md-block d-lg-block">
                <div class="row">
                    <div class="col-8 pt-1 posicion-render-1">
                        <img src="{{asset('img/modelos/alula/render-2.jpg')}}" class="img-fluid" alt="Render de modelo alula">
                    </div>
                    <div class="col-4 posicion-render">
                        <div class="row">
                            <div class="col-12 pt-1">
                                <img src="{{asset('img/modelos/alula/render-1.jpg')}}" class="img-fluid" alt="Render de modelo alula">
                            </div>
                            <div class="col-12 pt-1">
                                <img src="{{asset('img/modelos/alula/render-1.jpg')}}" class="img-fluid" alt="Render de modelo alula">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center d-block d-sm-block d-md-none d-lg-none">
                <div class="carousel_1">
                    <!--Carousel 1-->
                    <div class="carousel__contenedor">
                        <!--Carousel contenedor-->
                        <button aria-label="anterior" class="carousel__anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="carousel__lista">
                            <div class="carousel__elemento">
                                <div class="col">
                                    <img src="{{asset('img/modelos/alula/render-modelo-1.jpg')}}" class="img-fluid" alt="Render de modelo alula">
                                </div>
                            </div>
                            <div class="carousel__elemento">
                                <div class="col">
                                    <img src="{{asset('img/modelos/alula/render-modelo-1.jpg')}}" class="img-fluid" alt="Render de modelo alula">
                                </div>
                            </div>
                            <div class="carousel__elemento">
                                <div class="col">
                                    <img src="{{asset('img/modelos/alula/render-modelo-1.jpg')}}" class="img-fluid" alt="Render de modelo alula">
                                </div>
                            </div>
                        </div>
                        <button aria-label="siguiente" class="carousel__siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div role="tabList" class="carousel__indicadores"></div>
                </div> <!-- Fint Carousel 1-->
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mt-2 pt-5 detalle-titulo">
                    <ul>
                        <h4 class="hurmebold" style="color: #fff">Modelo Alula</h4> <br>
                        <li class="hurmeregular">Construcción: 50.93 m2</li>
                        <li class="hurmeregular">Terreno desde: 5 x 20 m</li> <br>

                        <li class="hurmebold"><b>Planta arquitectónica</b></li> <br>

                        <li class="hurmeregular">Sala/comedor</li>
                        <li class="hurmeregular">Cocina con barra desayunadora</li>
                        <li class="hurmeregular">Baño completo</li>
                        <li class="hurmeregular">Espacio para jardín interior</li>
                        <li class="hurmeregular">Recámara 1 con área para clóset</li>
                        <li class="hurmeregular">Recámara 2 con área para clóset</li>
                        <li class="hurmeregular">Patio</li> <br>
                        <li><img src="{{asset('img/modelos/alula/construccion.svg')}}" width="320" alt="Tipo de construccion"></li>
                    </ul>
                    <div class="row pt-5">
                        <div class="col-md-6 col-sm-12 pt-2">
                            <a href="" class="hurmebold btn btn-secondary btn-block">Ficha Técnica</a>
                        </div>
                        <div class="col-md-6 col-sm-12 pt-2">
                            <a href="" class="hurmebold btn btn-secondary btn-block">Cotiza tu casa</a>
                        </div>
                    </div>
                   
                </div>
                
                <div class="col-md-6 col-sm-12 pt-5 text-center">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('img/modelos/alula/plano.png')}}" class="img-fluid" alt="Plano de vivienda">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="recorrido">
        <div class="container">
            <div class="text-center">
                <img src="{{asset('img/modelos/alula/recorrido.jpg')}}" class="w-100" alt="">
            </div>
        </div>
    </section>

    <section id="video">
        <div class="container">
            <div class="text-center pt-4">
                <video src="{{asset('img/amavita/pres.mp4')}}" autoplay muted class="w-100" ></video>
            </div>
        </div>
    </section>

@endsection