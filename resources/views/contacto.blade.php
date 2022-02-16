@extends('layouts.amavita')

@section('content')
    <header class="bg-azul">
        <div class="container slider-header">
            <div class="text-center pb-5">
                <h4 class="hurmebold pt-5 color-rose">Aceptamos todo tipo de crédito <br> ¡Precalifícate!</h4>
                <img src="{{ asset('img/modelos/lead/creditos-2.svg') }}" class="img-fluid" alt="">
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                    <img src="{{ asset('img/pareja-3.png') }}" class="img-fluid" alt="Pareja mudandose">
                </div>
                <div class="col-md-6 col-sm-12">
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script>
                    hbspt.forms.create({
                    region: "na1",
                    portalId: "5510950",
                    formId: "560d4ffa-856b-43e6-a182-d73be5aafea6"
                    });
                    </script>
                </div>
            </div>
        </div>
    </header>
@endsection
