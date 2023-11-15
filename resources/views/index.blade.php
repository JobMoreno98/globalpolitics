<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
    <!--Plantila con NavBar, Footer, Css y Js-->


    <!--Inicio Carrusel-->

    <section class="home-slider owl-carousel">
        @foreach ($noticias as $noti)
            @if (isset($noti->imagen) && $noti->imagen != 'no disponible por el momento' && !empty($noti->imagen))
                <div class="slider-item" style="background-image:url({{ asset($noti->imagen) }});">
                @elseif($noti->imagen == 'no disponible por el momento')
                    <div class="img align-self-stretch"
                        style="background-image: ; display: flex; justify-content: center; align-items: center;">
                        <p style="text-align: center;">Imagen no disponible</p>
                    </div>
            @endif
            <br>
            <br>
            <div class="overlay container d-flex flex-column justify-content-center align-items-start ftco-animate">
                <h1 class="w-100 mb-4">{{ $noti->titulo }}</h1>
                <p class="w-100">{{ $noti->descripcion }}</p>
                <p>{{ date('d F, Y', strtotime($noti->fecha)) }}</p>

                <button class="carr-btn button1" onclick="hrefContacto()">
                    <p class="sbt">Contáctanos</p>
                    <div class="liquid1"></div>
                </button>

            </div>
            </div>
        @endforeach
    </section>

    <!--Final Carrusel-->


    <!--Cuadros Informativos-->
    <section class="ftco-services ftco-animate">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 services align-self-stretch py-5 px-5 ftco-animate" style="background-color:#d92b04;">
                    <div class="media block-6 d-block text-center">
                        <a href="{{ route('plan_estudios') }}">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('images/lapiz.png	') }}" alt="icono ">
                            </div>
                            <div class="media-body p-2 mt-3 ">
                                <h3 class="heading">Plan de Estudios</h3>
                            </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 services align-self-stretch py-5 px-4 ftco-animate" style="background-color:#004777;">
                    <div class="media block-6 d-block text-center">
                        <a href="{{ route('nab') }}">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('images/profesor.png') }}" alt="icono ">
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Núcleo Académico Basico</h3>
                            </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 services align-self-stretch py-5 px-4 ftco-animate" style="background-color:#d92b04;">
                    <div class="media block-6 d-block text-center">
                        <a href="{{ route('estudiantes') }}">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('images/estudiar.png	') }}" alt="icono ">
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Estudiantes</h3>
                            </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 services align-self-stretch py-5 px-4 ftco-animate pointer"
                    style="background-color: #004777;" data-toggle="modal" data-target="#ligas_interes">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/estudiante.png	') }}" alt="icono ">
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Ligas de Interés y Vinculación</h3>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <div class="container">
        <div class="modal fade" id="ligas_interes">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <!-- cuerpo del diálogo -->
                    <div class="modal-body col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="close p-2 float-right" data-dismiss="modal">
                                    <p style="color: #000;">&times;</p>
                                </button>
                                <br>
                                <h1 class="display-5 font-weight-bold text-center pt-2" style="color: #004777;">LIGAS DE
                                    INTERÉS</h1>
                                <p class="display-5 text-center">Los centros de investigación y el Departamento ya tienen
                                    ligas para sitios que casi no tienen información.</p>
                                <ul class="text-justify">
                                    <p><a href="http://www.mexicoylacuencadelpacifico.cucsh.udg.mx/index.php/mc"
                                            target="_blank">
                                            <li><b>Revista México y La Cuenca del Pacífico</b></li>
                                        </a></p>
                                    <p><a href="http://www.cucsh.udg.mx/presentacioncs/centro_estudios_sobre_america_norte"
                                            target="_blank">
                                            <li><b>Centro de Estudios sobre América del Norte</b></li>
                                        </a></p>
                                    <p><a href="http://www.cucsh.udg.mx/presentacioncs/centro_de_estudios_japoneses"
                                            target="_blank">
                                            <li><b>Centro de Estudios Japoneses</b></li>
                                        </a></p>
                                    <p><a href="http://www.cucsh.udg.mx/presentaciondeptos/departamento_estudios_pacifico"
                                            target="_blank">
                                            <li><b>Departamento de Estudios del Pacífico (DEP)</b></li>
                                        </a></p>

                                </ul>


                                <h1 class="display-5 font-weight-bold text-center pt-2" style="color: #004777;">Vinculación
                                </h1>

                                <p> Desde su fundación, el Departamento del Pacífico (DEP) ha construido una red de
                                    relaciones con varias instituciones académicas de la región Asia-Pacífico,
                                    particularmente con Japón, China, Corea del Sur, Australia, Nueva Zelanda y Tailandia,
                                    entre otras. Así, se han firmado una serie de convenios con universidades, entre las que
                                    destacan:</p>

                                <ul class=" nav nav-tabs text-center background-pills" id="myTab" role="tablist">
                                    <li class="nav-item col-md-2 col-sm-12 nav-link-pills" role="presentation">
                                        <a class="nav-link active a-pills" id="home-tab" data-toggle="tab"
                                            href="#japonpills" role="tab" aria-controls="home"
                                            aria-selected="true"><b>Japón</b></a>
                                    </li>

                                    <li class="nav-item col-md-3 col-sm-12" role="presentation">
                                        <a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab"
                                            href="#chinapills" role="tab" aria-controls="profile"
                                            aria-selected="false"><b>China</b></a>
                                    </li>

                                    <li class="nav-item col-md-3 col-sm-12" role="presentation">
                                        <a class="nav-link nav-link-pills a-pills" id="contact-tab" data-toggle="tab"
                                            href="#coreadelsurpills" role="tab" aria-controls="contact"
                                            aria-selected="false"><b>Corea del Sur</b></a>
                                    </li>

                                    <li class="nav-item col-md-2 col-sm-12" role="presentation">
                                        <a class="nav-link nav-link-pills a-pills" id="contact-tab" data-toggle="tab"
                                            href="#australiapills" role="tab" aria-controls="contact"
                                            aria-selected="false"><b>Australia</b></a>
                                    </li>
                                    <li class="nav-item col-md-2 col-sm-12" role="presentation">
                                        <a class="nav-link nav-link-pills a-pills" id="contact-tab" data-toggle="tab"
                                            href="#tailandiapills" role="tab" aria-controls="contact"
                                            aria-selected="false"><b>Tailandia</b></a>
                                    </li>
                                </ul>
                                <div class="tab-content text-dark pt-3" id="myTabContent">
                                    <div class="tab-pane active" id="japonpills" role="tab"
                                        aria-labelledby="home-tab">
                                        <p><b>Universidad de Estudios Internacionales de Kanda <a
                                                    href="https://www.kandagaigo.ac.jp/kuis/"
                                                    target="_blank">https://www.kandagaigo.ac.jp/kuis/</a></b></p>
                                        <p><b>Universidad de la Prefectura de Aichi (APU) <a
                                                    href="https://www.aichi-pu.ac.jp/eng/"
                                                    target="_blank">https://www.aichi-pu.ac.jp/eng/</a></b></p>
                                        <p><b>Universidad Hosei <a
                                                    href="https://www.hosei.ac.jp/english/?auth=9abbb458a78210eb174f4bdd385bcf54"
                                                    target="_blank">https://www.hosei.ac.jp/english/?auth=9abbb458a78210eb174f4bdd385bcf54</a></b>
                                        </p>
                                        <p><b>Universidad de Chiba <a href="https://www.chiba-u.ac.jp/e/"
                                                    target="_blank">https://www.chiba-u.ac.jp/e/</a></b></p>
                                    </div>

                                    <div class="tab-pane fade" id="chinapills" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <p><b>Universidad de Estudios Internacionales de Shanghái (SISU) <a
                                                    href="http://es.shisu.edu.cn/"
                                                    target="_blank">http://es.shisu.edu.cn/</a></b></p>
                                        <p><b>Universidad Xi’an Jiaotong-Liverpool (XJTLU) <a
                                                    href="https://www.khu.ac.kr/eng/main/index.do"
                                                    target="_blank">https://www.xjtlu.edu.cn/en/</a></b></p>
                                    </div>

                                    <div class="tab-pane fade" id="coreadelsurpills" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <p><b>Universidad Kyung-Hee <a href="https://www.khu.ac.kr/eng/main/index.do"
                                                    target="_blank">https://www.khu.ac.kr/eng/main/index.do </a></b></p>
                                    </div>

                                    <div class="tab-pane fade" id="australiapills" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <p><b>Universidad de Tecnología de Sídney <a href="https://www.uts.edu.au/"
                                                    target="_blank">https://www.uts.edu.au/</a></p></b>
                                    </div>

                                    <div class="tab-pane fade" id="tailandiapills" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <p><b> Universidad Thammasat <a href="https://tu.ac.th/en"
                                                    target="_blank">https://tu.ac.th/en </a></p></b>
                                    </div>
                                </div>

                                <h1 class="display-5 font-weight-bold text-center pt-2" style="color: #004777;">Redes de
                                    Investigación</h1>


                                <ul>
                                    <li> Red de Investigación Internacional; Relaciones Internacionales y Desarrollo Global
                                        (RI&DG), México.</li>
                                    <li> Asociación Mexicana de Estudios Internacionales (AMEI)</li>
                                    <li> International Studies Association (ISA)</li>
                                    <li> Asociación Latinoamericana de Estudios de Asia y Africa [ALADAA]</li>
                                    <li> Grupo Interinstitucional de Estudios de Estados Unidos (GIEEU)</li>
                                    <li> Red Honduras Global, Honduras.</li>
                                    <li> Consejo Nacional de Universitarios, México.</li>
                                    <li> Comité Editorial de la revista Estudios de Asia y África, México.</li>
                                    <li> Red Iberoamericana de Estudios sobre Japón.</li>
                                    <li> Grupo Académico de Trabajo del Programa Universitario de Estudios de Asia y África
                                        de la UNAM.</li>
                                    <li> Consejo de Estudios Latinoamericanos de Asia y Oceanía</li>
                                    <li> Asociación Hispanista de Humanidades</li>
                                    <li> Asociación Internacional de Hispanistas</li>
                                    <li> Red Nacional de Investigadores de la Cuenca del Pacífico</li>
                                </ul>
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cuadros Informativos FIN-->


    <!--Presentacion-->
    <section class="ftco-section ftco-no-pt ftc-no-pb text-justify">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-sm-12  col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <br>
                    <div class="img">
                        <img src="images/presentacion.jpg" class="h-100 w-100" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 wrap-about pr-md-4 ftco-animate ">
                    <h2 class=" textamb-4" style="color: #004777;">
                        <p>
                        <p>
                        <p>
                        <p>
                        <p> Presentación
                    </h2>
                    <p>La Maestría en Global Politics and Trans-Pacific Studies (GP&TPS) es un programa de posgrado
                        ofrecido en México por la Universidad
                        de Guadalajara con una perspectiva global que se centra en los estudios transpacíficos. El
                        programa ofrece tres <b>Líneas de Generación
                            y/o Aplicación del Conocimiento (LGAC)</b> o especializaciones centradas en los actores más
                        relevantes en la región de Asia-Pacífico:
                        China, Japón and Norte América. El principal objetivo es la formación de recursos humanos
                        globales con habilidades para interactuar
                        y comunicarse en sociedades multiculturales y que contribuyan al conocimiento de las complejas
                        relaciones políticas, sociales y
                        económicas del entorno global, así como a la solución de problemas locales desde una perspectiva
                        global.</p>

                    <p>La incertidumbre económica y política internacional desde la crisis financiera global de 2008
                        hasta la pandemia de 2020 ha dejado
                        a México, al igual que a muchas otras naciones, expuesta a desafíos económicos complejos. Una
                        mayor diversificación económica y
                        diplomática, para mejorar las relaciones más allá del enfoque tradicional de México en sus
                        vínculos con los Estados Unidos, podría
                        ayudar a fortalecer la economía del país y a aumentar su influencia internacional, sobre todo
                        frente a la actual ola proteccionista
                        que está surgiendo en los Estados Unidos.</p>

                    <p>En este sentido, la política global y sus instituciones formales e informales, como las Naciones
                        Unidas y el Grupo de los Veinte (G20),
                        constituyen un contexto multilateral más amplio para potenciar la influencia de México en la
                        diplomacia internacional y la gobernanza
                        económica. Los contextos globales y transpacíficos involucran a muchos de los mismos actores y
                        procesos internacionales, en áreas como la
                        inversión extranjera directa, los mercados de divisas y el comercio. El contexto económico y
                        político de las relaciones internacionales del
                        siglo XXI se ha caracterizado por la creciente influencia de las naciones de Asia-Pacífico. Esto
                        ha sido impulsado principalmente por el
                        crecimiento de las capacidades económicas, políticas, sociales, culturales y migratorias de la
                        región, especialmente en China y Corea del
                        Sur en el este de Asia, así como también en los países que conforman la Asociación de Naciones
                        del Sudeste Asiático (ASEAN por sus siglas en inglés);
                        Estados que siguieron el surgimiento de Japón a finales del siglo XX en el escenario mundial.
                    </p>

                    <p>La creación de nuevos foros regionales transpacíficos en las últimas décadas, especialmente el
                        grupo de Cooperación Económica Asia-Pacífico
                        (APEC por sus siglas en inglés), el Acuerdo Comprehensivo y Progresivo de Asociación
                        Transpacífica (CPTPP, por sus siglas en inglés) y el
                        Acuerdo Regional de Cooperación Económica (RCEP, por sus siglas en inglés), se han desarrollado
                        como consecuencia de la creciente
                        conciencia de los beneficios de la cooperación económica multilateral, enfocada en el Pacífico.
                    </p>

                    <p>En la región de Asia-Pacífico, las relaciones económicas regionales han crecido sustancialmente,
                        lo que lleva a México a mejorar sus relaciones
                        económicas con las economías de la región. Así, las instituciones privadas y públicas en México,
                        desde pequeñas, medianas y grandes empresas
                        hasta los gobiernos nacionales, regionales y municipales, tienen ahora una creciente necesidad
                        de recursos humanos globales, con la pertinente
                        educación, capacitación y conocimientos especializados, para fortalecer sus relaciones a través
                        de la "mega-región" del Pacífico. Este es
                        especialmente el caso, tanto de Guadalajara como de Jalisco, al ser un centro económico y
                        educativo clave en la costa del Pacífico mexicano.</p>

                    <p>Por lo anterior, surge la necesidad de crear un posgrado en inglés y con una visión global,
                        enfocado en los estudios transpacíficos y con
                        especialidades en: América del Norte, China y Japón; la Maestría en Global Politics and
                        Transpacific Studies (GP&TPS). El programa de la
                        maestría permitirá a los estudiantes profundizar el conocimiento sobre la relevancia de las
                        actuales tendencias que involucran a nuevos
                        actores y a nuevos procesos de gobernanza en las relaciones internacionales. Además de cumplir
                        con los objetivos de la Universidad de
                        Guadalajara en la búsqueda de la ampliación y diversificación del posgrado con altos estándares
                        de calidad y de relevancia nacional e
                        internacional, en que las estrategias imprescindibles son: el aumento y diversificación de la
                        matrícula en programas de posgrado de calidad.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Presentacion FIN-->


    <!--Video y Contadores Inicio-->
    <section class="ftco-section ftco-counter img-ftco-consult-overlay" id="section-counter"
        style="background-image: url(images/carrusel2.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="row align-items-center w-100">
                        <div class="col-sm-12">
                            <video controls class="w-100">
                                <source src="" type="video/mp4">
                                <source src="{{ asset('storage/videos/cucsh_video.mp4') }}"type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5 text-justify">
                    <h2 class="mb-4">OBJETIVOS Y METAS</h2>

                    <p>Dentro de los objetivos que se propone cumplir la Maestría en Global Politics and Transpacific
                        Studies (GP&TPS),
                        a partir de un desempeño de excelencia y con valores éticos y profesionales, se encuentran la
                        formación de:</p>
                    <ol style="padding-left: 30px;" class="text-white">
                        <li type="disc">Estudiantes dispuestos a explorar los diferentes ámbitos globales y de estudios
                            transpacíficos.</li>
                        <li type="disc">Profesionales con las herramientas para enfrentar el ámbito laboral, público y
                            privado, y capaces de aportar,
                            desde una perspectiva global, sus conocimientos en beneficio de la sociedad.</li>
                        <li type="disc">Académicos dispuestos a perseguir un desarrollo laboral en la docencia y la
                            investigación, con la finalidad
                            de contribuir en la educación de futuras generaciones.</li>
                    </ol>

                    <p>Así mismo se buscará:</p>
                    <ol style="padding-left: 30px;" class="text-white">
                        <li type="disc">Consolidar la vinculación internacional de la Universidad de Guadalajara a
                            través de un programa de posgrado impartido en inglés, y</li>
                        <li type="disc">la relación con otros centros de enseñanza en Asia-Pacífico y en particular, con
                            China.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number={{ $investigadores2 }}>0</strong>
                                <span>Profesores Certificados</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="{{ $calculo }}">0</strong>
                                <span>Estudiantes Egresados</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="29"></strong>
                                <span>Cursos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="1">0</strong>
                                <span>Reconocimientos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Video y Contadores Final-->
    <br>
    <br>
    <br>


    <!--Carrusel de Profesores Inicio-->
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4" style="color: #004777;">Núcleo Académico Básico</h2>
                <h3><b style="color: #004777;">(NAB)</b></h3>
            </div>
        </div>
        <div class="color-slide-teachers" style="background-color: #004777;">
            <a href="{{ route('nab') }}" class="nav-link color-navBar">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000"
                    style="padding: 15px;">
                    <div class="carousel-inner">
                        @php
                            $chunkedInvestigadores = $investigadores->chunk(4);
                            $active = 'active';
                        @endphp
                        @foreach ($chunkedInvestigadores as $investigadorChunk)
                            <div class="carousel-item {{ $active }}">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($investigadorChunk as $investigador)
                                            <div class="col-md-6 col-lg-3 ftco-animate">
                                                <div class="staff">
                                                    <div class="img-wrap d-flex align-items-stretch">
                                                        @if (isset($investigador->imagen) &&
                                                                $investigador->imagen != 'no disponible por el momento' &&
                                                                !empty($investigador->imagen))
                                                            <div class="img align-self-stretch"
                                                                style="background-image: url({{ asset($investigador->imagen) }});">
                                                            </div>
                                                        @elseif($investigador->imagen == 'no disponible por el momento')
                                                            <div class="img align-self-stretch"
                                                                style="background-image: ; display: flex; justify-content: center; align-items: center;">
                                                                <p style="text-align: center;">Imagen no disponible</p>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="text pt-3 text-center">
                                                        <h3 style="color: #fff;">{{ $investigador->nombre }}</h3>
                                                        <span class="position mb-2"
                                                            style="color: #F3CDB6;"><b>{{ $investigador->orientacion }}</b></span>
                                                        <div class="faded" style="color: #fff;">
                                                            <p>{!! nl2br(e($investigador->descripcion)) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @php
                                $active = '';
                            @endphp
                        @endforeach
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
            </a>
        </div>
    </div>

    </section>
    </a>
    <br>
    <br>
    <br>
    <br>
    <!--Carrusel de Profesores Final-->


    <!--Titulo de Eventos-->
    <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4" style="color: #004777;">Eventos</h2>
    </div>
    <!--Titulo de Eventos-->
    <br>
    <br>

    <!-- Seccion de Eventos -->
    <div class="col-lg-4"></div>
    <div class="wrapper2">
        <!-- <div class="row"> -->
        @foreach ($eventos as $events)
            <!-- <div class="col-lg-4"> -->
            <div class="card2">
                @if (isset($events->imagen) && $events->imagen != 'no disponible por el momento' && !empty($events->imagen))
                    <img src="{{ $events->imagen }}" alt="">
                @elseif($events->imagen == 'no disponible por el momento')
                    <p style="text-align: center;">Imagen no disponible</p>
                @endif
                <div class="descriptions">
                    <h3>
                        <p><b>{{ $events->titulo }}</b></p>
                    </h3>
                    <h5>
                        <ul>
                            <li>
                                <p><b>{{ $events->subtitulo }}</b></p>
                            </li>
                        </ul>
                    </h5>
                    <h5>
                        <p>{{ $events->descripcion }}</p>
                    </h5>
                    @if (isset($events->fecha) && $events->fecha != 'no disponible' && !empty($events->fecha))
                        <h5>
                            <p>{{ date('d F, Y', strtotime($events->fecha)) }}</p>
                        </h5>
                    @elseif($events->fecha == '2023-01-01')
                        <p></p>
                    @endif
                    <br>
                    <br>
                    @if (isset($events->enlace) && $events->enlace != 'no disponible' && !empty($events->enlace))
                        <p>
                            <button class="button1">
                                <a href="{{ $events->enlace }}">
                                    <span class="sbt" style="font-size: 20px;">Ver Más</span>
                                    <div class="liquid1"></div>
                                </a>
                            </button>
                        </p>
                    @elseif($events->enlace == 'no disponible')
                        <p></p>
                    @endif
                </div>
            </div>
            <!-- </div> -->
        @endforeach


        <!-- </div> -->
    </div>
    <br>
    <br>
    <br>

    <!--Formulario Inicio-->
    @include('sweetalert::alert')
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/carrusel3.jpg);"
        data-stellar>
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 py-5 px-md-5 d-flex align-items-center">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5" id="contactanos">
                            <h2 class="mb-4" style="color: white; text-align: left;">Contáctanos</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                        </div>
                        <form action="{{ route('enviar.comentarios') }}" method="POST"
                            class="appointment-form ftco-animate">
                            @csrf
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" name="nombre[]" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" name="nombre[]" class="form-control" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="especialidad" id="" class="form-control">
                                                <option value="Seleccionar especialidad">Seleccionar especialidad</option>
                                                <option value="Especialización en América del Norte">Especialización en
                                                    América del Norte</option>
                                                <option value="Especialización en China">Especialización en China</option>
                                                <option value="Especialización en Japón">Especialización en Japón</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Correo electrónico" required>
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="mensaje" id="" cols="30" rows="2" class="form-control" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Enviar Correo" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>
    <br>
    <br>

    <!--Formulario Final-->

    <!--Titulo Galeria-->
    <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4" style="color: #004777;">Galería</h2>
    </div>
    <!--Titulo Galeria-->


    <!--Galeria de Imagenes Inicio-->

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                @foreach ($galerias1 as $galery)
                    <div class="col-md-3 ftco-animate">
                        <a href="{{ asset($galery->imagen) }}" class="gallery image-popup img d-flex align-items-center"
                            style="background-image: url({{ asset($galery->imagen) }});">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-camera"></span>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--Galeria de Imagenes Final-->
@endsection
