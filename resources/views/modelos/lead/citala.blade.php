@extends('layouts.lead')
@section('content')
    <header id="leads" class="bg-amavita">
        <div class="container">
            <div class="text-center pt-4 pb-4">
                <a href="https://amavitacaucel.mx/">
                    <img src="{{ asset('img/modelos/lead/amavita-bco.svg') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="row pt-4">
                <div class="col-md-6 text-center">
                    <h5 class="hurmebold" style="color: #fff">Estás por cotizar tu nuevo hogar</h5>
                    <img src="{{ asset('img/modelos/lead/2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 detalle-mdo pt-5" style="color: #fff">
                    <ul>
                        <h4 class="hurmebold" style="color: #fff">Modelo {{ $model->name }}</h4> <br>
                        <li class="hurmeregular">Construcción: 61.86 m2</li>
                        <li class="hurmeregular">Terreno desde: 6 x 20 m</li> <br>

                        <li class="hurmebold"><b>Planta arquitectónica</b></li> <br>
                        <li class="hurmebold"><b>Planta baja</b></li>
                        <li class="hurmeregular">Sala/comedor</li>
                        <li class="hurmeregular">Cocina con barra desayunadora</li>
                        <li class="hurmeregular">Área para alacena</li>
                        <li class="hurmeregular">1/2 baño</li>
                        <li class="hurmeregular">El patio más amplio de caucel de 39 m2 aprox</li> <br>
                        <li class="hurmebold"><b>Planta alta</b></li>
                        <li class="hurmeregular">Recámara 1 con área para clóset</li>
                        <li class="hurmeregular">Recámara 2 con área para clóset</li>
                        <li class="hurmeregular">Baño completo</li> <br>
                        <li>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                            <script>
                            hbspt.forms.create({
                            region: "na1",
                            portalId: "5510950",
                            formId: "2840c19a-a90b-4779-8920-0c9dfb107f7a"
                            });
                            </script>
                        </li>
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
