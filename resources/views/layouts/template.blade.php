<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="{{ asset('images/globalpolitcs.png') }}" type="image/x-icon">
    <title>Centro Universitario De Ciencias Sociales Y Humanidades</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="icon" href="{{ asset('images/1-logo_udg.png') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebarsocial.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Enlaces a las bibliotecas de fuentes e iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-nrB5xB47wltb7yTF1l61bNJjiv3kCAOlROVlWs13vgA1uM4lpxoHbKJgQfPAVaxHBYPk2oylsfv2z/2zAJKLUQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"
        integrity="sha512-v1QB+mqbivmIqbtRFA+0o9lCOPT6BqW5xkWTPt5of0G3h5xnNzQp0skVhtZNah54qJ9PdsAqPOcMd5/tP/YlGQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <!--Inicio nav-->
    <nav class="navbar fixed-top navbar-expand-lg container-fluid" id=""
        style="background-color: rgba(243, 205, 182, .9);">
        <div class="container-fluid d-flex align-items-center">
            <div class="col-lg-3 col-md-12 col-sm-12 mx-auto d-flex align-items-center container-fluid">
                <a class="navbar-brand mx-auto d-flex" target="_blank" href="https://www.udg.mx">
                    <img src="{{ asset('images/1-logo_udg.svg') }} " style="height: 65px;">
                </a>

                <a class="navbar-brand mx-auto d-flex" target="_blank" href="http://www.cucsh.udg.mx">
                    <img src="{{ asset('images/cucsh.svg') }} " style="height: 65px; padding: right 10px;">
                </a>
                <a class="navbar-brand mx-auto d-flex" href="{{ route('index') }}">
                    <img src="{{ asset('images/globalpolitics.svg') }} " style="height: 75px;">
                </a>
                <a class="navbar-brand mx-auto d-flex" target="_blank" href="http://www.cucsh.udg.mx">
                    <img src="{{ asset('images/logo1.jpg') }} " style="height: 70px; padding: right 15px;">
                </a>
                <button class="navbar-toggler border border-dark" type="button" data-toggle="collapse"
                    data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    &#9776;
                </button>
            </div>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mx-auto1 d-flex align-items-center text-center">
                    <form id="searchForm" action="{{ route('search') }}" method="POST"
                        class="order-lg-last text-dark mx-auto d-flex align-items-center pt-3">
                        @csrf
                        <div class="buscar">
                            <input id="searchInput" type="text" name="keyword" placeholder="Buscar"
                                style="background-color: rgba(145, 164, 199)" required />

                            <div class="btn1">
                                <button class="btn btn-dark" type="submit" style="background-color: #004777"><i
                                        class="icon-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <li class="nav-item "><a href="{{ route('index') }}" class="nav-link navBar"><b
                                style="color: 2922B04;">Inicio</b></a></li>
                    <li class="nav-item "><a href="{{ route('plan_estudios') }}"
                            class="nav-link color-navBar"><b>Plan de Estudios/LIES</b></a></li>
                    <li class="nav-item "><a href="{{ route('nab') }}" class="nav-link color-navBar"><b>NAB</b></a>
                    </li>
                    <li class="nav-item "><a href="{{ route('requisitos') }}"
                            class="nav-link color-navBar"><b>Requisitos</b></a></li>
                    <li class="nav-item "><a href="{{ route('estudiantes') }}"
                            class="nav-link color-navBar"><b>Estudiantes</b></a></li>
                    </li>
                    <li class="nav-item active"><a href="{{ route('contacto') }}"
                            class="nav-link color-navBar"><b>Contacto</b></a></li>

                    <!--iconos de redes sociales-->
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.facebook.com/gpandtps"
                            target="_blank">
                            <img src="{{ asset('images/icon-facebook.png') }} " alt="Facebook"
                                style="width: 33px; height: 30px;">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.instagram.com/gpandtps/"
                            target="_blank">
                            <img src="{{ asset('images/icon-instagram.png') }}" alt="Instagram"
                                style="width: 33px; height: 30px;">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank"
                            href="https://twitter.com/i/flow/login?redirect_after_login=%2Fgpandtps" target="_blank">
                            <img src="{{ asset('images/icon-twitter.svg') }}" alt="Twitter"
                                style="width: 33px; height: 30px;">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank"
                            href="https://www.youtube.com/channel/UCcxHb3nbSkTEmpFBN9126uA" target="_blank">
                            <img src="{{ asset('images/icon-youtube.svg') }}" alt="YouTube"
                                style="width: 33px; height: 30px;">
                        </a>
                    </li>

                </ul>


            </div>


        </div>

    </nav>


    <div class="container-fluid mt-5" style="min-height: 35vh;">
        @yield('content')
    </div>

    <!--Inicio Footer-->
    <footer class="ftco-footer  ftco-section">
        <div class="container d-flex mx-auto">
            <div class="row mb-5">
                <img src="{{ asset('images/1-logo_udg.svg') }} " style="padding-right: 3%; height: 250px;"
                    class="float-left m-auto">
                <div class="col-md-4 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 text-center">Universidad De Guadalajara</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text-justify">
                                        <p>Centro Universitario De
                                            Ciencias Sociales y Humanidades (Cucsh)</p>
                                        <p>Edificio F4, Primer Piso</p>
                                        <p>Sede Los Belenes. Av. José Parres Arias #150, San José del Bajío, C. P.
                                            45100.</p>
                                        <p>Zapopan, Jalisco, México.</p>
                                    </span></li>

                                <li><span class="icon icon-phone"></span><span class="text-justify">
                                        <p>+52 (33) 3819 3300.
                                        <p>Extensiones 23541 y 23656</p>
                                    </span></li>
                                <li><span class="icon icon-envelope"></span><span class="text-justify">
                                        <p><b>&nbsp;mtria.globalpolitics@academicos.udg.mx</b></p>
                                    </span></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2 text-center">Enlaces</h2>
                        <ul class="list-unstyled text-justify">
                            <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Inicio</a>
                            </li>
                            <li><a href="http://www.cucsh.udg.mx/apoyo-cursos"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Ayuda Cursos
                                    Virtuales</a></li>
                            <li><a href="http://www.udgvirtual.udg.mx/atencion-contacto"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Ayuda Correo
                                    Institucional</a></li>
                            <li><a href="https://outlook.com/alumno.udg.mx"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Outlook
                                    UdeG</a></li>
                            <li><a href="{{ route('avisos-privacidad') }}" target="_BLANK"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Avisos de Privacidad</a>
                            </li>
                            <li><a href="{{ route('contacto') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <p>&nbsp;</p>
                        <h2 class="ftco-heading-2 mb-0 d-flex mx-auto" style="padding-left: 3%;">Redes Sociales</h2>
                        <!-- SM icons -->
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-1">
                            <a href="https://twitter.com/gpandtps" class="fa fa-twitter"
                                style="font-size: 50px; background: #1da1f2;  /* fallback for old browsers */						
						-webkit-background-clip: text;
						color: transparent;"
                                target="_blank"></a>
                            <a href="https://www.youtube.com/channel/UCcxHb3nbSkTEmpFBN9126uA"
                                class="fa fa-youtube fa-xl"
                                style="font-size: 50px; background: #e52d27; /* fallback for old browsers */
						background: -webkit-linear-gradient(to right, #e52d27, #b31217); /* Chrome 10-25, Safari 5.1-6 */
						background: linear-gradient(to right, #e52d27, #b31217); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
						-webkit-background-clip: text;
						color: transparent;"
                                target="_blank"></a>
                            <!--<a href="#" class="fa fa-linkedin"></a>-->
                            <a href="https://www.instagram.com/gpandtps/" class="fa fa-instagram"
                                style="font-size: 50px; background: #833ab4;  /* fallback for old browsers */
							background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);  /* Chrome 10-25, Safari 5.1-6 */
							background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
							-webkit-background-clip: text;
							color: transparent;"
                                target="_blank"></a>
                            <a href="https://www.facebook.com/gpandtps" class="fa fa-facebook"
                                style="font-size: 50px; background: #3b5998;  /* fallback for old browsers */						
						-webkit-background-clip: text;
						color: transparent;"
                                target="_blank"></a>
                            <!--<a href="#" class="fa fa-vimeo"></a>-->
                        </ul>
                        <button type="button" class="btn btn-light" data-toggle="modal"
                            data-target="#exampleModalLong">
                            Aviso de privacidad
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--Final Footer-->
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="padding: 10px; margin: 20px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Aviso de privacidad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: justify; padding: 10px;">




                    La Universidad de Guadalajara (en adelante UdeG),
                    con domicilio en Avenida Juárez 976, colonia Centro, código postal 44100,
                    en Guadalajara, Jalisco, hace de su conocimiento que se considerará como
                    información confidencial aquella que se encuentre contemplada
                    en los artículos 3, fracciones IX y X de la LPDPPSOEJM; 21 de la LTAIPEJM;
                    Lineamientos Cuadragésimo Octavo y Cuadragésimo Noveno de los Lineamientos de Clasificación;
                    Lineamientos Décimo Sexto, Décimo Séptimo y Quincuagésimo Octavo de los Lineamientos de Protección,
                    así como aquellos datos de una persona física identificada o identificable y la inherente a las
                    personas jurídicas, los cuales podrán ser sometidos a tratamiento y serán única y exclusivamente
                    utilizados para los fines que fueron proporcionados, de acuerdo con las finalidades y atribuciones
                    establecidas en los artículos 1, 5 y 6 de la Ley Orgánica, así como 2 y 3 del Estatuto General,
                    ambas legislaciones de la UdeG, de igual forma, para la prestación de los servicios que la misma
                    ofrece conforme a las facultades y prerrogativas de la entidad universitaria correspondiente y
                    estarán a resguardo y protección de la misma.
                </div>
                <div class="modal-footer">

                    <a href="https://transparencia.udg.mx/aviso-confidencialidad-simple"target="_blank"><button
                            type="button" class="btn btn-primary">Aviso de privacidad completo</button></a>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="{{ asset('js/index-utils.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scrollax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <!-- Archivo de jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Archivo de Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
