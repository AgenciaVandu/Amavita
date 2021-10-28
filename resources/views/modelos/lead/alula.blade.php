@extends('layouts.lead')
@section('content')

    <header id="leads" class="bg-amavita">
        <div class="container">
            <div class="text-center pt-4 pb-4">
                <img src="{{ asset('img/modelos/lead/amavita-bco.svg') }}" class="img-fluid" alt="">
            </div>
            <div class="row pt-4">
                <div class="col-md-6 text-center">
                    <h5 class="hurmebold" style="color: #fff">Estás por cotizar tu nuevo hogar</h5>
                    <img src="{{ asset('img/modelos/lead/1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 detalle-mdo pt-5">
                    <ul>
                        <h4 class="hurmebold" style="color: #fff">Modelo {{ $model->name }}</h4> <br>
                        <li class="hurmeregular" style="color: #fff">Construcción: 50.93 m2</li>
                        <li class="hurmeregular" style="color: #fff">Terreno desde: 5 x 20 m</li> <br>

                        <li class="hurmebold" style="color: #fff"><b>Planta arquitectónica</b></li> <br>

                        <li class="hurmeregular" style="color: #fff">Sala/comedor</li>
                        <li class="hurmeregular" style="color: #fff">Cocina con barra desayunadora</li>
                        <li class="hurmeregular" style="color: #fff">Baño completo</li>
                        <li class="hurmeregular" style="color: #fff">Espacio para jardín interior</li>
                        <li class="hurmeregular" style="color: #fff">Recámara 1 con área para clóset</li>
                        <li class="hurmeregular" style="color: #fff">Recámara 2 con área para clóset</li>
                        <li class="hurmeregular" style="color: #fff">Patio</li> <br>
                        <li><script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                            <script data-hubspot-rendered="true">
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5510950",
                                    formId: "4f8b9726-8345-4f16-b902-556d0b33072a"
                                });
                            </script></li>

                    </ul>
                </div>
            </div>
            <div class="text-center pb-5">
                <h4 class="hurmebold pt-5" style="color: #fff">Aceptamos todo tipo de crédito <br> ¡Precalifícate!</h4>
                <img src="{{ asset('img/modelos/lead/creditos-2.svg') }}" class="img-fluid" alt="">
            </div>
        </div>
    </header>
@endsection
