@extends('layouts.amavita')
@section('content')

    <header id="modelos-amavita">
        <div class="bg-modelos-3">
            <div class="container pb-5">
                <div class="text-center titular-modelos-1 ">
                    <img src="{{ asset('img/titular.svg') }}" class="img-fluid" loading="lazy"
                        alt="Bienvenido a tu nuevo hogar">
                </div>
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
                                                <img src="{{ asset('img/index/modelos/alula-1.png') }}" class="img-fluid"
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
                                <div class="carousel__elemento">
                                    @foreach ($models as $model)
                                        @if ($model->id == 2)
                                            <div class="col">
                                                <img src="{{ asset('img/index/modelos/boreal-1.png') }}" class="img-fluid"
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
                                <div class="carousel__elemento">
                                    @foreach ($models as $model)
                                        @if ($model->id == 3)
                                            <div class="col">
                                                <img src="{{ asset('img/index/modelos/citala-1.png') }}" class="img-fluid"
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
                            <button aria-label="siguiente" class="carousel__siguiente1">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <div role="tabList" class="carousel__indicadores1"></div>
                    </div> <!-- Fint Carousel 1-->
                </div>
            </div>


        </div>
    </header>




@endsection
