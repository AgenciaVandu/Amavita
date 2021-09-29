@extends('layouts.amavita')
@section('content')
    
    <header>
        <div class="container slider-header-1 text-center">
            <img src="{{asset('img/vivir-en.svg')}}" class="img-fluid" alt="">
            <div class="row text-center pt-3 pb-4">
                <div class="col-md-4 pt-4 pb-4">
                    <img src="{{asset('img/galeria.jpg')}}" class="img-fluid" alt="avances de obra | Amavita Caucel">
                </div>
                <div class="col-md-4 pt-3 pb-3">
                    <img src="{{asset('img/galeria.jpg')}}" class="img-fluid" alt="avances de obra | Amavita Caucel">
                </div>
                <div class="col-md-4 pt-3 pb-3">
                    <img src="{{asset('img/galeria.jpg')}}" class="img-fluid" alt="avances de obra | Amavita Caucel">
                </div>
                <div class="col-md-4 pt-3 pb-3">
                    <img src="{{asset('img/galeria.jpg')}}" class="img-fluid" alt="avances de obra | Amavita Caucel">
                </div>
                <div class="col-md-4 pt-3 pb-3">
                    <img src="{{asset('img/galeria.jpg')}}" class="img-fluid" alt="avances de obra | Amavita Caucel">
                </div>
                <div class="col-md-4 pt-3 pb-3">
                    <img src="{{asset('img/galeria.jpg')}}" class="img-fluid" alt="avances de obra | Amavita Caucel">
                </div>
                
            </div>
            <div class="regresar pb-4">
                <a href="{{ URL::previous() }}" class="hurmebold btn btn-secondary">Regresar</a>
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
                        <a href="{{url('/amavita')}}" class="btn btn-secondary hurmebold">Conócelo ahora</a>
                    </div>
                </div>
               </div>
               
               
            </div>
        </div>
    </section>

@endsection