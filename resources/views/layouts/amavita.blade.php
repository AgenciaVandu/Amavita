<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7Z17NR4HD9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7Z17NR4HD9');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amavita Caucel</title>
    <meta name="author" content="https://agenciavandu.com" />
    <script src="{{ asset('js/scrollreveal.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('css/style-amavita.css') }}" rel="stylesheet">
    <!--Bootstrap 4.6-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KJVX4HS');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2821273661220502');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2821273661220502&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

</head>


<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJVX4HS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-nav fixed-top patron">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/amavita-logo.svg') }}" width="200" alt="logotipo Amavita Caucel">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active hurmeregular">
                        <a class="nav-link" href="{{ url('/') }}">Inicio <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active hurmeregular">
                        <a class="nav-link" href="{{ route('amavita.index') }}"">Amavita <span class="
                            sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active hurmeregular">
                        <a class="nav-link" href="{{ url('/modelos-amavita') }}">Modelos</a>
                    </li>
                    <li class="nav-item active hurmeregular">
                        <a class="nav-link" href="{{ route('galery.index') }}">Galeria</a>
                    </li>


                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active hurmeregular">
                        <a class="nav-link btn btn-primary" href="{{ url('/contacto') }}">PRECALIFICATE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-4 col-sm-12">
                    <h4 class="hurmebold" style="color: #fff">Visita nuestro <br>punto de venta</h4>
                    <div class="mapa">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.398826371192!2d-89.72779978506757!3d21.016722186004877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDAxJzAwLjIiTiA4OcKwNDMnMzIuMiJX!5e0!3m2!1ses-419!2smx!4v1632937582481!5m2!1ses-419!2smx"
                            width="" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <p style="color: #fff">Plaza 55: C 59A Local 11 Cd. Caucel
                        <br>Informes: Tel: <a href="tel:999949952" style="color: #fff">(999) 944 9952</a>
                    </p>
                </div>
                <div class="col-md-5 col-sm-12">
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script data-hubspot-rendered="true">
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "5510950",
                            formId: "4f8b9726-8345-4f16-b902-556d0b33072a"
                        });
                    </script>
                </div>
                <div class="col-md-3 col-sm-12 text-center pt-5">
                    <img src="{{ asset('img/casitas.svg') }}" width="140" alt="Logo grupo casitas">
                    <div class="row">
                        <div class="col-12 pt-3">
                            <p>
                                <a href="">
                                    <i class="icono fab fa-facebook-square pr-2 redes" style="color: #fff"></i>
                                </a>
                                <a href="">
                                    <i class=" icono fab fa-instagram pr-2 redes" style="color: #fff"></i>
                                </a>
                                <a href="">
                                    <i class=" icono fab fa-linkedin pr-2 redes" style="color: #fff"></i>
                                </a> <br>
                                <a href="" target="blanK_" style="color: #fff">www.grupocasitas.mx</a>
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/animacion.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5510950.js"></script>
    <!-- End of HubSpot Embed Code -->
</body>

</html>
