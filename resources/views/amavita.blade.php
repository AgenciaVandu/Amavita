@extends('layouts.amavita')
@section('content')
    <main role="main">
        <div class="modal fade" id="modal-brochure" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Descarga nuestro Brochure</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script> hbspt.forms.create({
                        region: "na1",
                        portalId: "5510950",
                        formId: "a48c36f8-eff2-4726-bf36-48ca5e633fb8"
                        }); </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
       
    </main>
    <header class="slider-header">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            @isset($header->resources)
                <ol class="carousel-indicators">
                    @forelse ($header->resources as $resource)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                            class="{{ $loop->first ? 'active' : '' }}"></li>
                    @empty
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        </li>
                    @endforelse
                </ol>
            @endisset
            <div class="carousel-inner">
                @isset($header->resources)
                    @forelse ($header->resources as $resource)
                        @php
                            $file = new SplFileInfo($resource->url);
                            $extension = $file->getExtension();
                        @endphp
                        @if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi')
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <video src="{{ Storage::url($resource->url) }}" loop muted preload autoplay
                                    class="d-block w-100"></video>
                            </div>
                        @else
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ Storage::url($resource->url) }}" class="d-block w-100"
                                    alt="Amavita Caucel | Informacion">
                            </div>
                        @endif
                    @empty
                        <div class="carousel-item active">
                            <img src="{{ asset('img/index/Slider.png') }}" class="d-block w-100"
                                alt="Amavita Caucel | Informacion">
                        </div>
                    @endforelse
                @endisset
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

    <section id="master-plan">
        <div class="bg-familia-3 fade-in-1">
            <div class="container arrows-1 text-center">
                <h5 class="hurmebold color-rose pt-5 pb-4">Bienvenido a tu nuevo hogar,<br>
                    <span class="hurmebold color-blue titulo">estás en Amavita Caucel</span>
                </h5>
            </div>
        </div>
        <div class="p-0">
            <img src="{{ asset('img/amavita/master.jpg') }}" class="img-fluid p-0 w-100" alt="Master plan Amavita Caucel">
        </div>
        <div class="bg-azul">
            <div class="container">
                <div class="d-none d-md-block d-lg-block">
                    <div class="row pt-4 text-center">
                        <div class="col-md-3 col-sm-6">
                            <img src="{{ asset('img/index/tu-podrias/caucel.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">CAUCEL</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="{{ asset('img/index/tu-podrias/viviendas.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">441 VIVIENDAS</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="{{ asset('img/index/tu-podrias/caseta.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">CASETA DE VIGILANCIA</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <img src="{{ asset('img/index/tu-podrias/barda.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">BARDA PERIMETRAL</p>
                        </div>
                    </div>
                </div>
                <div class="d-block d-md-none d-lg-none">
                    <div class="row pt-4 text-center">
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/caucel.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">CAUCEL</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/viviendas.svg') }}" width="70" loading="lazy"
                                alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">441 VIVIENDAS</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/caseta.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">CASETA DE VIGILANCIA</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/barda.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2" style="color: #fff">BARDA PERIMETRAL</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center pb-5">
                    <div class="row espaciado">
                        <div class="col-md-6 col-sm-12 mt-3">
                            <a href="" class="btn btn-secondary hurmebold" data-toggle="modal"
                                data-target="#modal-brochure">Descarga el brochure
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <a href="{{ url('/modelos-amavita') }}" class="btn btn-lead hurmebold">Cotiza tu casa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="caracteristicas">
        <div class="bg fade-in-1">
            <div class="container">
                <div class="bg-detalles-1">
                    <h4 class="hurmebold color-rose text-center pt-4 pb-4">Ama el bienestar de tu familia <br>
                        <span class="hurmebold color-blue">el desarrollo cuenta con:</span>
                    </h4>
                    <div class="row p-bienestar text-center">
                        <div class="col">
                            <img src="{{ asset('img/amavita/el-desarrollo/1.svg') }}" width="70"
                                alt="Instalaciones electricas">
                            <p class="hurmeregular color-gray pt-2">Instalaciones eléctricas
                                <br> subterráneas
                            </p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/amavita/el-desarrollo/2.svg') }}" width="70" alt="Drenaje pluvial">
                            <p class="hurmeregular color-gray pt-2">Drenaje pluvial
                            </p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/amavita/el-desarrollo/3.svg') }}" width="70"
                                alt="Planta de tratamiento">
                            <p class="hurmeregular color-gray pt-2">Planta de tratamiento
                            </p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/amavita/el-desarrollo/4.svg') }}" width="70"
                                alt="Servicio de agua potable">
                            <p class="hurmeregular color-gray pt-2">Servicio de agua potable
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-familia-2">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-md-5 col-sm-12">
                            <h4 class="hurmebold color-blue">Ama su ubicación</h4>
                            <p class="hurme-semibold color-gray" style="text-align: justify">Amavita Caucel® está ubicada en
                                el poniente de la ciudad de Mérida en una zona de alto crecimiento, cuenta con 3 accesos.
                                <br><br>

                                Totalmente conectada a todos los servicios que tu familia necesita,
                                para que solo te enfoques en la gente que amas y en disfrutar de tu entorno.
                            </p>
                            <a href="{{ url('/modelos-amavita') }}" class="hurmebold btn btn-secondary mb-3">Cotiza tu
                                casa</a>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="d-none d-md-block d-lg-block">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="hurmeregular"><img src="{{ asset('img/amavita/beneficios/8.svg') }}"
                                                width="80" alt="">
                                            Gasolineras
                                        </p>
                                        <p class="hurmeregular"><img src="{{ asset('img/amavita/beneficios/3.svg') }}"
                                                width="80" alt="">
                                            Comercios
                                        </p>
                                        <p class="hurmeregular"><img src="{{ asset('img/amavita/beneficios/5.svg') }}"
                                                width="80" alt="">
                                            Hospitales
                                        </p>
                                        <p class="hurmeregular"><img src="{{ asset('img/amavita/beneficios/6.svg') }}"
                                                width="80" alt="">
                                            <span class="beneficios">Entretenimiento</span>
                                        </p>

                                    </div>
                                    <div class="col-6">
                                        <p class="hurmeregular"><img src="{{ asset('img/amavita/beneficios/2.svg') }}"
                                                width="80" alt="">
                                            Bancos
                                        </p>
                                        <p class="hurmeregular"><img src="{{ asset('img/amavita/beneficios/4.svg') }}"
                                                width="80" alt="">
                                            Escuelas
                                        </p>
                                        <p class="hurmeregular"><img src="{{ asset('img/amavita/beneficios/1.svg') }}"
                                                width="80" alt="">
                                            <span class="beneficios">Supermercados</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-md-none d-lg-none">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <img src="{{ asset('img/amavita/beneficios/8.svg') }}" width="80" alt="">
                                        <p class="hurmeregular">
                                            Gasolineras
                                        </p>
                                        <img src="{{ asset('img/amavita/beneficios/3.svg') }}" width="80" alt="">
                                        <p class="hurmeregular">
                                            Comercios
                                        </p>
                                        <img src="{{ asset('img/amavita/beneficios/5.svg') }}" width="80" alt="">
                                        <p class="hurmeregular">
                                            Hospitales
                                        </p>
                                        <img src="{{ asset('img/amavita/beneficios/6.svg') }}" width="80" alt="">
                                        <p class="hurmeregular">
                                            <span class="beneficios">Entretenimiento</span>
                                        </p>

                                    </div>
                                    <div class="col-6 text-center">
                                        <img src="{{ asset('img/amavita/beneficios/2.svg') }}" width="80" alt="">
                                        <p class="hurmeregular">
                                            Bancos
                                        </p>
                                        <img src="{{ asset('img/amavita/beneficios/4.svg') }}" width="80" alt="">
                                        <p class="hurmeregular">
                                            Escuelas
                                        </p>
                                        <img src="{{ asset('img/amavita/beneficios/1.svg') }}" width="80" alt="">
                                        <p class="hurmeregular">
                                            <span class="beneficios">Supermercados</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container fade-in-1">
            <div class="col-12 text-center pt-4">
                <h4 class="hurmebold color-rose">Ama estar rodeado <br>
                    <span class="hurmebold color-blue">de todos los servicios</span>
                </h4>
            </div>
            <img src="{{ asset('img/amavita/mapa-servicios.svg') }}" class="img-fluid" alt="">
            <div class="text-center pt-5 pb-5">
                <div class="carousel_1">
                    <!--Carousel 1-->
                    <div class="carousel__contenedor">
                        <!--Carousel contenedor-->
                        <button aria-label="anterior" class="carousel__anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="carousel__lista">
                            @foreach ($services->resources as $resource)
                                <div class="carousel__elemento">
                                    <div class="col">
                                        <img src="{{ Storage::url($resource->url) }}" class="img-fluid"
                                            loading="lazy" alt="Amenidades de los desarrollos habitacionales">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button aria-label="siguiente" class="carousel__siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div role="tabList" class="carousel__indicadores"></div>
                </div> <!-- Fint Carousel 1-->
            </div>
        </div>
    </section>

    <section id="video">
        <div class="text-center pt-5">
            @if ($video->resources->first())
                <video src="{{ Storage::url($video->resources->first()->url) }}" autoplay muted
                    class="w-100"></video>
            @else
                <video src="{{ asset('img/amavita/pres.mp4') }}" autoplay muted class="w-100"></video>
            @endif

        </div>
    </section>
    <section id="disponibilidad">
        <div class="container fade-in-1">
            <div class="col-12 text-center disponibilidad-2 pb-5">
                <h4 class="hurmebold color-rose">Conoce la disponibilidad, <br> <span class="hurmebold color-blue">Amarás
                        vivir aquí:</span></h4>
            </div>
        </div>
        @if ($master->resources->first())
            <img src="{{ Storage::url($master->resources->first()->url) }}" class="w-100" loading="lazy"
                alt="">
        @else
            <img src="{{ asset('img/amavita/mapa-master-ed.png') }}" class="w-100" loading="lazy" alt="">
        @endif
    </section>

    <section id="modelos">
        <div class="container text-center fade-in-1">
            <h4 class="hurmebold color-rose pt-5 pb-5">Amarás nuestros modelos,
                <br>
                elige el ideal para ti
            </h4>
        </div>
        <div class="bg-modelos-1 fade-in-1">
            <div class="container text-center">
                <div class="bg-modelos">
                    <div class="text-center pt-5">
                        <div class="carousel_1">
                            <!--Carousel 1-->
                            <div class="carousel__contenedor">
                                <!--Carousel contenedor-->
                                <button aria-label="anterior" class="carousel__anterior1">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <div class="carousel__lista1">
                                    <div class="carousel__elemento1">
                                        @foreach ($models as $model)
                                            @if ($model->id == 1)
                                                <div class="col">
                                                    <img src="{{ asset('img/index/modelos/alula-1.png') }}"
                                                        class="img-fluid" loading="lazy" alt="">
                                                    <h5 class="color-blue hurmebold pt-3">{{ $model->name }} <br>
                                                        @if ($model->price_visible)
                                                            <span class="hurme-semibold">Desde:
                                                                ${{ number_format($model->price, 2) }}</span>
                                                        @endif
                                                    </h5>
                                                    <li class="color-blue hurmeregular">2 recámaras</li>
                                                    <li class="color-blue hurmeregular">Baño completo</li>
                                                    <li class="color-blue hurmeregular">Pasillo lateral</li>
                                                    <li class="color-blue hurmeregular">Patio</li>
                                                    <a href="{{ route('models.show', $model) }}"
                                                        class="btn btn-secondary hurmebold mt-2">Cotiza tu casa</a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="carousel__elemento">
                                        @foreach ($models as $model)
                                            @if ($model->id == 2)
                                                <div class="col">
                                                    <img src="{{ asset('img/index/modelos/boreal-1.png') }}"
                                                        class="img-fluid" loading="lazy" alt="">
                                                    <h5 class="color-blue hurmebold pt-3">{{ $model->name }}<br>
                                                        @if ($model->price_visible)
                                                            <span class="hurme-semibold">Desde:
                                                                ${{ number_format($model->price, 2) }}</span>
                                                        @endif
                                                    </h5>
                                                    <li class="color-blue hurmeregular">2 recámaras</li>
                                                    <li class="color-blue hurmeregular">Baño completo</li>
                                                    <li class="color-blue hurmeregular">Pasillo lateral</li>
                                                    <li class="color-blue hurmeregular">Patio</li>
                                                    <a href="{{ route('models.show', $model) }}"
                                                        class="btn btn-secondary hurmebold mt-2">Cotiza tu casa</a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="carousel__elemento">
                                        @foreach ($models as $model)
                                            @if ($model->id == 3)
                                                <div class="col">
                                                    <img src="{{ asset('img/index/modelos/citala-1.png') }}"
                                                        class="img-fluid" loading="lazy" alt="">
                                                    <h5 class="color-blue hurmebold pt-3">{{ $model->name }}<br>
                                                        @if ($model->price_visible)
                                                            <span class="hurme-semibold">Desde:
                                                                ${{ number_format($model->price, 2) }}</span>
                                                        @endif
                                                    </h5>
                                                    <li class="color-blue hurmeregular">2 recámaras</li>
                                                    <li class="color-blue hurmeregular">Baño completo</li>
                                                    <li class="color-blue hurmeregular">Pasillo lateral</li>
                                                    <li class="color-blue hurmeregular">Patio</li>
                                                    <a href="{{ route('models.show', $model) }}"
                                                        class="btn btn-secondary hurmebold mt-2">Cotiza tu casa</a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <button aria-label="siguiente" class="carousel__siguiente1">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <div role="tabList" class="carousel__indicadores1"></div>
                        </div> <!-- Fint Carousel 1-->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="creditos">
        <div class="container text-center">
            <h4 class="hurmebold color-blue pt-5 arrows">Aceptamos todo tipo de crédito <br> ¡Precalifícate!</h4>
            <div class="d-none d-md-block d-lg-block">
                <div class="row espaciado-2">
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/index/creditos/1.svg') }}" width="100" alt="">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/index/creditos/2.svg') }}" width="100" alt="">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/index/creditos/3.svg') }}" width="180" alt="">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ asset('img/index/creditos/4.svg') }}" width="100" alt="">
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('img/index/creditos/credito-1.svg') }}" width="290" alt="">
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('img/index/creditos/credito-2.svg') }}" width="290" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="gpo-casitas">
        <div class="container">
            <div class="row pt-4 pb-5">
                <div class="col-md-3 col-sm-12 text-center gpo-casitas orden">
                    <img src="{{ asset('img/amavita/casitas-logo.svg') }}" width="140" alt="Logo grupo casitas">
                </div>
                <div class="col-md-9 col-sm-12 orden-1">
                    <h4 class="hurmebold pb-2">Amavita Caucel cuenta con el respaldo <br> de un gran desarrollador</h4>
                    <p class="hurmeregular">Grupo Casitas Desarrollos®, empresa con más de 15 años de experiencia
                        diseñando, planeando, construyendo y comercializando comunidades, en busca siempre de la innovación
                        y sustentabilidad para otorgar a los habitantes de sus desarrollos beneficios exclusivos de calidad,
                        ubicación y diseño.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
