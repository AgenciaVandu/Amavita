@extends('layouts.amavita')
@section('content')
    <main role="main">
        <div class="modal fade" id="modal-ficha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Descargar Ficha Técnica</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #0f3e67">
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                        <script>
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "5510950",
                                formId: "dc9cfba4-600b-4430-9bc3-cd95ff13c768"
                            });
                        </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <header>
        <div class="bg-modelos-4">
            <div class="container pb-5">
                <div class="text-center titular-modelos-2">
                    <img src="{{ asset('img/ama-vivir.svg') }}" class="img-fluid" alt="Ama vivir en Caucel">
                </div>
            </div>
        </div>
    </header>

    <section id="cabecera">
        <div class="container">
            <div class="d-none d-md-block d-lg-block">
                <div class="row">
                    <div class="col-8 pt-1 posicion-render-1">
                        <img src="{{ Storage::url($model->img1) }}" class="img-fluid"
                            alt="Render de modelo alula">
                    </div>
                    <div class="col-4 posicion-render">
                        <div class="row">
                            <div class="col-12 pt-1">
                                <img src="{{ Storage::url($model->img2) }}" class="img-fluid"
                                    alt="Render de modelo alula">
                            </div>
                            <div class="col-12 pt-1">
                                <img src="{{ Storage::url($model->img3) }}" class="img-fluid"
                                    alt="Render de modelo alula">
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
                                    <img src="{{ Storage::url($model->img1) }}" class="img-fluid"
                                        alt="Render de modelo alula">
                                </div>
                            </div>
                            <div class="carousel__elemento">
                                <div class="col">
                                    <img src="{{ Storage::url($model->img2) }}" class="img-fluid"
                                        alt="Render de modelo alula">
                                </div>
                            </div>
                            <div class="carousel__elemento">
                                <div class="col">
                                    <img src="{{ Storage::url($model->img3) }}" class="img-fluid"
                                        alt="Render de modelo alula">
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
                        <h4 class="hurmebold" style="color: #fff">Modelo {{ $model->name }}</h4> <br>
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
                        <li><img src="{{ asset('img/modelos/alula/construccion.svg') }}" width="320"
                                alt="Tipo de construccion"></li>
                    </ul>
                    <div class="row pt-5">
                        <div class="col-md-6 col-sm-12 pt-2">
                            <a href="" class="hurmebold btn btn-secondary btn-block" data-toggle="modal"
                                data-target="#modal-ficha">Ficha Técnica</a>
                        </div>
                        <div class="col-md-6 col-sm-12 pt-2">
                            <a href="{{ route('models.leads', $model) }}"
                                class="hurmebold btn btn-secondary btn-block">Cotiza tu
                                casa</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-sm-12 pt-5 text-center">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('img/modelos/alula/plano.png') }}" class="img-fluid"
                                alt="Plano de vivienda">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="recorrido">
        <div class="container">
            <div class="text-center">
                @if ($model->virtual_visible)
                    {!! $model->virtual !!}
                @endif
            </div>
        </div>
    </section>

    <section id="video">
        <div class="container">
            <div class="text-center pt-4">
                @if ($model->video_visible)
                    <video src="{{ Storage::url($model->video) }}" autoplay muted class="w-100"></video>
                @endif
            </div>
        </div>
    </section>

    <section id="modelos-int">
        <div class="bg-naranja">
            <div class="container pt-4 pb-5">
                <h4 class="hurmebold pt-5 color-rose text-center">Modelos que pueden interesarte</h4>
                <div class="text-center pt-5">
                    <div class="carousel_4">
                        <!--Carousel 1-->
                        <div class="carousel__contenedor">
                            <!--Carousel contenedor-->
                            <button aria-label="anterior" class="carousel__anterior4">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <div class="carousel__lista4">
                                <div class="carousel__elemento">
                                    @foreach ($models as $model)
                                        @if ($model->id == 2)
                                            <div class="col">
                                                <img src="{{ asset('img/index/modelos/2.png') }}" class="img-fluid"
                                                    loading="lazy" alt="">
                                                <h5 class="hurmebold pt-3" style="color: #fff">{{ $model->name }} <br>
                                                    @if ($model->price_visible)
                                                        <span class="hurme-semibold">Desde:
                                                            ${{ number_format($model->price, 2) }}</span>
                                                    @endif
                                                </h5>
                                                <li class="hurmeregular" style="color: #fff">2 recámaras</li>
                                                <li class="hurmeregular" style="color: #fff">Baño completo</li>
                                                <li class="hurmeregular" style="color: #fff">Pasillo lateral</li>
                                                <li class="hurmeregular" style="color: #fff">Patio</li>
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
                                                <img src="{{ asset('img/index/modelos/3.png') }}" class="img-fluid"
                                                    loading="lazy" alt="">
                                                <h5 class="hurmebold pt-3" style="color: #fff">{{ $model->name }}<br>
                                                    @if ($model->price_visible)
                                                        <span class="hurme-semibold">Desde:
                                                            ${{ number_format($model->price, 2) }}</span>
                                                    @endif
                                                </h5>
                                                <li class="hurmeregular" style="color: #fff">2 recámaras</li>
                                                <li class="hurmeregular" style="color: #fff">Baño completo</li>
                                                <li class="hurmeregular" style="color: #fff">Pasillo lateral</li>
                                                <li class="hurmeregular" style="color: #fff">Patio</li>
                                                <a href="{{ route('models.show', $model) }}"
                                                    class="btn btn-secondary hurmebold mt-2">Cotiza tu casa</a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <button aria-label="siguiente" class="carousel__siguiente4">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <div role="tabList" class="carousel__indicadores4"></div>
                    </div> <!-- Fint Carousel 1-->
                </div>
            </div>
        </div>
    </section>

    <section id="creditos">
        <div class="container text-center">
            <h4 class="hurmebold color-blue pt-5">Aceptamos todo tipo de crédito <br> ¡Precalifícate!</h4>
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

@endsection
