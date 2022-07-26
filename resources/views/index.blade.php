@extends('layouts.amavita')
@section('content')
<div class="modal fade" id="modal-brochure" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Descarga nuestro Brochure</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
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

    <section id="introduccion">
        <div class="bg-familia fade-in">
            <div class="container">
                <div class="row bg-intro">
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('img/index/amv-real.png') }}" class="img-fluid" loading="lazy"
                            alt="Desarrollo habitacional amavita caucel">
                    </div>
                    <div class="col-md-6 col-sm-12  text-center">
                        <h3 class="hurme-semibold color-rose pt-3">Tú y tu familia disfrutarán de <br
                                class="d-none d-md-block d-lg-block"> todo lo bueno de la
                            vida</h3>
                        <h4 class="hurme-semibold color-blue pt-3">Desde: ${{ number_format($price->price,2) }}</h4>
                        <p class="pt-2 disfruta-vivir">Disfruta vivir en un desarrollo tipo privada habitacional<br
                                class="d-none d-md-block d-lg-block">con la
                            oportunidad de vivir cerca de todos los servicios<br class="d-none d-md-block d-lg-block"> que
                            tu familia necesita, así como la
                            tranquilidad de<br class="d-none d-md-block d-lg-block"> vivir en un lugar seguro, fresco y a la
                            altura de<br class="d-none d-md-block d-lg-block"> tus necesidades.</p>
                        <a href="" class="btn btn-secondary mt-2" data-toggle="modal"
                            data-target="#modal-brochure">Descarga el brochure</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="desarrollo">
        <div class="container fade-in">
            <h4 class="color-rose hurmebold text-center pt-5 pb-5">Ama vivir en Caucel, <br>
                <span class="color-blue">todo esto está a tu al rededor</span>
            </h4>
            <div class="bg-2">
                <div class="espaciado">
                    <div class="row text-center">
                        <div class="col">
                            <img src="{{ asset('img/index/escuelas.svg') }}" width="100" loading="lazy"
                                alt="Iconos de servicios">
                            <p class="hurme-semibold pt-3">Escuelas</p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/index/entretenimiento.svg') }}" width="100" loading="lazy"
                                alt="Iconos de servicios">
                            <p class="hurme-semibold pt-3">Entretenimiento</p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/index/centros-comerciales.svg') }}" width="100" loading="lazy"
                                alt="Iconos de servicios">
                            <p class="hurme-semibold pt-3">Centros
                                <br> Comerciales
                            </p>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/index/supermercado.svg') }}" width="100" loading="lazy"
                                alt="Iconos de servicios">
                            <p class="hurme-semibold pt-3">Supermercados</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ url('/amavita') }}" class="btn btn-secondary hurme-semibold mt-4">Explora todas las amenidades</a>
            </div>
            <div class="row pt-5 text-center fade-in-1">
                <div class="col-md-6">
                    <h4 class="color-rose hurmebold">Tu podrías vivir aquí,<br>
                        <span class="color-blue">conoce tu próximo hogar</span>
                    </h4>
                    <div class="row espaciado-1">
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/caucel.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2">CAUCEL</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/viviendas.svg') }}" width="70" loading="lazy"
                                alt="">
                            <p class="hurme-semibold pt-2">441 VIVIENDAS</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/caseta.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2">CASETA DE <br> VIGILANCIA</p>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('img/index/tu-podrias/barda.svg') }}" width="70" loading="lazy" alt="">
                            <p class="hurme-semibold pt-2">BARDA <br>PERIMETRAL</p>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <a href="{{ url('/amavita') }}" class="btn btn-secondary hurmebold">Conoce Amavita Caucel</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/index/familia.png') }}" class="img-fluid pt-4" loading="lazy"
                        alt="Familia en amavita">
                </div>
            </div>
        </div>
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
                                                    {{-- <li class="color-blue hurmeregular">Pasillo lateral</li> --}}
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
                                                    <li class="color-blue hurmeregular">1  1/2 baños</li>
                                                    <li class="color-blue hurmeregular">Pasillo lateral</li>
                                                    <li class="color-blue hurmeregular">Amplio patio de 39 m2</li>
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
        <div class="container text-center ">
            <a href="{{ route('contacto') }}" style="text-decoration: none">
                <h4 class="hurmebold color-blue pt-5 arrows cta-index">Aceptamos todo tipo de crédito <br> ¡Precalifícate!</h4>
            </a>
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

    <section id="galeria">
        <div class="container">
            <h4 class=" hurmebold color-blue text-center pt-5 pb-4">Conoce el avance de Amavita Caucel</h4>
            <div class="text-center pt-5">
                <div class="carousel_1">
                    <!--Carousel 1-->
                    <div class="carousel__contenedor">
                        <!--Carousel contenedor-->
                        <button aria-label="anterior" class="carousel__anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="carousel__lista">
                            @foreach ($albumes as $album)
                                <a href="{{ route('galery.show', $album) }}">
                                    <div class="carousel__elemento">
                                        <div class="col">
                                            {{-- <a href="{{ route('galery.show', $album) }}"> --}}
                                                <img src="{{ Storage::url($album->image) }}" class="img-fluid"
                                                    loading="lazy" alt="Amenidades de los desarrollos habitacionales">
                                            {{-- </a> --}}
                                        </div>
                                    </div>
                                </a>
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

    <section>
        <div class="container-fluid pt-5 mb-5">
            <div class="bg-llamada">
                <div class="text-center centrado">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="hurmebold" style="color: #fff">¿Te gustaria vivir en Amavita Caucel?</h4>
                        </div>
                        <div class="col-12">
                            <a href="{{ url('/amavita') }}" class="btn btn-secondary hurmebold">Conócelo ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
