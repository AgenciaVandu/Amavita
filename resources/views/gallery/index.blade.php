@extends('layouts.amavita')
@section('content')

    <header>
        <div class="container">
            <div class="col-12 text-center">
                <h4 class="hurmebold color-rose slider-header-1">Ama nuestras mejores fotos,
                    <br>selecciona un album
                </h4>
            </div>
            <div class="row pb-5">
                @foreach ($albumes as $album)
                    <div class="col-md-4 col-sm-6 pt-4">
                        <div
                            style="background-image: url({{ Storage::url($album->image) }}); min-height: 362px; background-repeat: no-repeat; background-position: center;">
                            <div class="btn-avances text-center">
                                <a href="{{ route('galery.show', $album) }}" class="hurmeregular btn btn-primary ">Ver
                                    {{ $album->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </header>
    <section>
        <div class="container-fluid pt-2 mb-5">
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
