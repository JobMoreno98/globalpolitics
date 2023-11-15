<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!-- Inicio Carrousel -->
<header class="hero-wrap hero-wrap-2" style="background-image: url('images/lgc_carrusel.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Plan de Estudios</h1>
      </div>
    </div>
  </div>
</header>
<!-- Final Carrousel -->

<!--Inicio Texto Plan de Estudios-->
<br>
<section class="ftco-section ftco-no-pt ftc-no-pb">
<div class="container-fluid col-md-10">
    <div class="row d-flex">
        <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch ml-auto">
            <img class="img" src="{{asset('images/requisitos_carrusel.jpg')}}" alt="Requisitos Carrusel">
        </div>
      <div class="col-md-7 wrap-about  pr-md-4 ftco-animate">
        <p class="text-justify">La Maestría en Global Politics and Transpacific Studies, basa la estructura de su Plan
          de Estudios a las necesidades de adecuar los futuros conocimientos y habilidades de sus estudiantes en las
          demandas de la sociedad actual y de los mercados laborales. Para ello se establecen cuatro áreas de
          Formación: el Área de Formación Básica Común Obligatoria que incluye las materias vinculadas con los
          aspectos teóricos globales y de relaciones internacionales y de metodología; por su parte, el Área de
          Formación Básica Particular Obligatoria se conforma con las materias relacionadas con los Estudios
          Transpacíficos.</p>
        <p class="text-justify">El Área de Formación Especializante se dividirá en tres áreas regionales: América del
          Norte, Japón y China.
          Las tres destacan por contar con las mayores interacciones y dinámicas políticas, económicas y comerciales
          de la región transpacífica y que a su vez son fundamentales no solo para México, sino para los países del
          Pacífico Latinoamericano. (Esto porque no sólo se está pensando en estudiantes mexicanos, sino de otros
          países). Finalmente, el Área de Formación Optativa Abierta engloba los cursos sobre el aprendizaje de
          lenguas extranjeras de la región de Asia-Pacífico e incluye un curso sobre los países de la Alianza del
          Pacífico; este último se incorporó a fin de dar a los estudiantes cuyos temas de investigación se vinculen a
          cualquiera de estos países un panorama más amplio a partir del conocimiento de su Historia, Cultura y
          Sociedad.</p>
        <p class="text-justify"> Los estudiantes que opten por la Especialización en China tendrán la opción de cursar
          las materias
          especializantes de tercer semestre en la Universidad de Xi’an Jiaotong-Liverpool (XJTLU) en
          Suzhou, Jiangsu, China.</p>
        <br>
        <br>

        <!-- <a href="https://www.xjtlu.edu.cn/en/"
              class="btn btn-outline-warning font-size-responsive-boton" style="font-size: 15px;">Xi’an Jiaotong-Liverpool (XJTLU)en Suzhou, Jiangsu, China.</a>-->
        <button class="button1">
          <a href="https://www.xjtlu.edu.cn/en/" target="_blank">
            <!-- <span ></span> -->
              <p class="sbt" style="font-size: 15px; color: white;">Xi’an Jiaotong-Liverpool (XJTLU)en Suzhou, Jiangsu, China.</p>
            <div class="liquid1"></div>
          </a>
        </button>

      </div>
    </div>
</section>
<!--Final Texto Plan de Estudios-->



<!-- SECCION DE CARDS DE PLAN DE ESTUDIOS -->
<!--Titulo-->
<div class="text-center mt-5 mb-3">
  <h2 class="display-4 font-weight-bold" style="color: #004777;">
    Áreas del Plan de Estudio
  </h2>
</div>
<!--Titulo FIN-->

<!--Modals-->
<div class="row pea-cards">
  <!-- Área de Formación Básica Común Obligatoria-->
  <div class="row sub sub-1">
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/basica-comun.jpg');"
      data-toggle="modal" 
      data-target="#basica"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
          Área de Formación Básica Común Obligatoria
        </h3>
      </div>
    </div>
    <!-- Área de Formación Básica Común Obligatoria FIN-->
    <!--Área de Formación Básica Particular-->
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/basica-particular.jpg');"
      data-toggle="modal" 
      data-target="#particular"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center">
          Área de Formación Básica Particular
        </h3>
      </div>
    </div>
    <!--Área de Formación Básica Particular FIN-->
  </div>
  
  <div class="row sub sub-2">
    <!--Área de Formación Especializante-->
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/card-especializante.jpg');"
      data-toggle="modal" 
      data-target="#contenido-modal"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
          Área de Formación Especializante
        </h3>
      </div>
    </div>
    <!--Área de Formación Especializante FIN-->
  </div>
  
  <div class="row sub sub-3">
    <!--Área de Formación Optativa Abierta-->
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/card-optativa-abierta.jpg');"
      data-toggle="modal" 
      data-target="#optativa"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
          Área de Formación Optativa Abierta
        </h3>
      </div>
    </div>
    <!--Área de Formación Optativa Abierta FIN-->
    <!--Mapa Curricular-->
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/mapa_head.jpg');"
      data-toggle="modal" 
      data-target="#mapa_curricular"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
          Mapa Curricular
        </h3>
      </div>
    </div>
    <!--Mapa Curricular FIN-->
  </div>
</div>

<!--MODAL BODY-->
<!-- Area de Formacion Basica Comun Obligatoria Inicio-->
<div class="container">
  <div class="modal fade" id="basica">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h1 class="display-5 font-weight-bold text-center" style="color: #004777;">Área de Formación Básica
                Común Obligatoria</h1>
              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6" style="color: #000;">
                <thead>
                  <tr>
                    <th scope="col">UNIDAD DE APRENDIZAJE</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">HORAS B.C.A.</th>
                    <th scope="col">HORAS A.M.I.</th>
                    <th scope="col">HORAS TOTALES</th>
                    <th scope="col">CRÉDITOS</th>
                    <th scope="col">PREREQUISITOS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Theories of International Relations and Global Politics</th>
                    <td>C</td>
                    <td>64</td>
                    <td>64</td>
                    <td>128</td>
                    <td>8</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Global Political Economy</th>
                    <td>C</td>
                    <td>64</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Global Governance</th>
                    <td>C</td>
                    <td>64</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Theories of International Relations and Global Politics</td>
                  </tr>
                  <tr>
                    <th scope="row">Global Politics and Society</th>
                    <td>C</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Research Design and Method I</th>
                    <td>C</td>
                    <td>64</td>
                    <td>32</td>
                    <td>128</td>
                    <td>8</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Research Design and Method II</th>
                    <td>S</td>
                    <td>32</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Research Design and Method I</td>
                  </tr>
                  <tr>
                    <th scope="row">Research Design and Method III</th>
                    <td>T</td>
                    <td>32</td>
                    <td>64</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Research Design and Method II</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Area de Formacion Basica Comun Obligatoria FIN-->


<!--Area de Formacion Basica Particular Inicio-->
<div class="container">
  <div class="modal fade" id="particular">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h3 class="display-6 font-weight-bold text-center" style="color: #004777;">
                Área de Formación Básica Particular
              </h3>
              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                <thead>
                  <tr>
                    <th scope="col">UNIDAD DE APRENDIZAJE</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">HORAS B.C.A.</th>
                    <th scope="col">HORAS A.M.I.</th>
                    <th scope="col">HORAS TOTALES</th>
                    <th scope="col">CRÉDITOS</th>
                    <th scope="col">PREREQUISITOS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Transpacific Politics and Society</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>128</td>
                    <td>6</td>
                    <td>Global Politics and Society</td>
                  </tr>
                  <tr>
                    <th scope="row">Transpacific Security Relations</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Transpacific Economic Relations</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Global Political Economy</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Area de Formacion Basica Particular Final-->


<!--Area de Formacion Optativa Abierta Inicio-->
<div class="container">
  <div class="modal fade" id="optativa">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h1 class="display-5 font-weight-bold text-center" style="color: #004777;">Área de Formación Optativa
                Abierta</h1>
              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                <thead>
                  <tr>
                    <th scope="col">UNIDAD DE APRENDIZAJE</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">HORAS B.C.A.</th>
                    <th scope="col">HORAS A.M.I.</th>
                    <th scope="col">HORAS TOTALES</th>
                    <th scope="col">CRÉDITOS</th>
                    <th scope="col">PREREQUISITOS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Language Specialization Seminar I</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>128</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Language Specialization Seminar I</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>Language Specialization Seminar I</td>
                  </tr>
                  <tr>
                    <th scope="row">Pacif Alliance Countries History, Culture, and Society</th>
                    <td>S</td>
                    <td>64</td>
                    <td>32</td>
                    <td>96</td>
                    <td>6</td>
                    <td>-</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Area de Formacion Optativa Abierta Final-->


<!--Mapa Curricular Body Inicio-->
<div class="container">
  <div class="modal fade" id="mapa_curricular">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <!-- cuerpo del diálogo -->
        <div class="modal-body py-4">
          <div class="row">
            <div class="col-md-12">
              <button class="close p-2 float-right" data-dismiss="modal">
                <p style="color: #000;">&times;</p>
              </button>
              <h1 class="display-5 font-weight-bold text-center" style="color: #004777;">Mapa Curricular</h1>
              <img src="images/mapa_curricular.png" alt="" style="max-width: 100%; height: auto;">
              <br>
              <br>

              <article>
                <section>
                  <button class="button1">
                    <a href="{{asset('storage/pdf/pdf_de_mapa.pdf')}}" download="Mapa Curricular">
                      <!-- <span ></span> -->
                      <p class="sbt" style="font-size: 15px; color: white;">Descargar</p>
                      <div class="liquid1" style="top:-70;"></div>
                    </a>
                  </button>
                </section>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Mapa Curricular Body FIN-->

<!--Modales de especializaciones-->
<div class="row d-flex mx-auto">
  <div class="modal fade" id="contenido-modal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content" style="background-color:#004777;">
        <div class="p-2">
          <button class="close p-2 float-right" data-dismiss="modal">
            <p style="color: #ffffff;">&times;</p>
          </button>

          <!--Modales de especializaciones-->
          <div class="d-flex flex-column align-items-center" style="gap: 1rem;">

          <!--Especialización en América del Norte-->
            <div 
			class="w-100 hover hover-2 rounded pea-card"
			style="background-image: url('images/card-usa.jpg'); min-height: 15rem;"
			data-toggle="modal" 
			data-target="#americadelnorte"
			>
				<div class="hover-overlay row">
					<h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
						Especialización en América del Norte
					</h3>
				</div>
			</div>
            <!--Especialización en América del Norte FIN-->


            <!--Inicio Modal Body de América Del Norte-->
            <!-- Modal -->
            <div class="modal fade" id="americadelnorte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#fff;">
                  <div class="modal-header text-center" style="background-color: #004777;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:#fff;"><b>América del
                        Norte</b>
                    </h5>
                    <button class="close p-2 float-right" data-dismiss="modal">
                      <p style="color: #ffffff;">&times;</p>
                    </button>
                    <!--Agregaremos el botón si la maestría nos lo pide
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            -->
                  </div>
                  <div class="modal-body text-justify col-xl-12" style="color:#000; ">

                    <p>La Línea de Generación y/o Aplicación Conocimiento (LGAC) sobre América del Norte se apoya en
                      el personal y recursos del Centro de estudios de América del Norte (CESAN). Debido a que
                      México
                      forma parte de la región, se vuelve evidente la necesidad de estudiar y comprender los
                      diversos
                      procesos de integración que han tenido lugar en la región desde la década de los años noventa
                      del siglo XX. La relevancia de la región, como una de las zonas de libre comercio más grandes
                      y
                      diversas del mundo, así como la importancia de cada uno de sus integrantes a nivel global, ha
                      convertido a América del Norte en una región central para comprender las dinámicas del Sistema
                      Internacional, así como la realidad actual y la prospectiva de las Relaciones Internacionales.
                    </p>

                    <p>Los estudiantes de esta especialidad podrán beneficiarse del trabajo del CESAN, a fin de
                      lograr
                      una mejor comprensión de las particularidades de nuestros socios y vecinos norteamericanos, su
                      relación con México y los fenómenos multidimensionales que definen y configuran a
                      Norteamérica.
                      En particular, el CESAN ha enfatizado tres áreas de investigación: política comparada,
                      integración regional y seguridad.</p>

                    <p><b>Proyectos de Investigación en la LGAC de América del Norte</b></p>
                    <p><button class="button1">
                        <a data-toggle="modal" data-target=#usa>
                          <span class="sbt" style="font-size: 20px;">Leer más</span>
                          <div class="liquid1"></div>
                        </a>
                      </button></p>
                    <!--Final Modal Body de América Del Norte-->


                    <!-- Modal body "tablas" America del Norte-->
                    <div class="modal fade bd-example-modal-lg" id="usa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-body">

                            <button class="close p-2 float-right" data-dismiss="modal">
                              <p style="color: #000;">&times;</p>
                            </button>
                            <h1 class="display-4 text-center font-weight-bold" style="color: #004777">
                              Especialización En
                              América del Norte</h1>
                            <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                              <div class="text-center">
                                <thead>
                                  <tr>
                                    <th scope="col">Unidad de aprendizaje </th>
                                    <th scope="col"> TIPO </th>
                                    <th scope="col">TOTAL HORAS B.C.A.*</th>
                                    <th scope="col">TOTAL HORAS A.M.I.**</th>
                                    <th scope="col">HORAS TOTALES</th>
                                    <th scope="col">CRÉDITOS</th>
                                    <th scope="col">PREREQUISITOS</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">North American History, Culture, and Society</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">North American Foreign Policy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Politics and Society</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">North American Contemporary Politics</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">North American Economy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Economic Relations</td>
                                  </tr>
                                </tbody>
                              </div>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal body "tablas" America del Norte-->


            <!--Especialización en China-->
            <div 
			class="w-100 hover hover-2 rounded pea-card"
			style="background-image: url('images/card_china.jpg'); min-height: 15rem;"
			data-toggle="modal" 
			data-target="#china"
			>
				<div class="hover-overlay row">
					<h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
						Especialización en China
					</h3>
				</div>
			</div>
            <!--Especialización en China FIN-->


            <!--Inicio modal body China-->
            <!-- Modal -->
            <div class="modal fade" id="china" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#fff;">
                  <div class="modal-header text-center" style="background-color: #004777;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b>China</b></h5>
                    <button class="close p-2 float-right" data-dismiss="modal">
                      <p style="color: #ffffff;">&times;</p>
                    </button>
                  </div>
                  <div class="modal-body text-justify col-xl-12" style="color:#000;">
                    <p>La Línea de Generación y/o Aplicación Conocimiento (LGAC) sobre China se sustenta en el papel
                      histórico, económico, político, social y cultural que ha desarrollado como nación durante los
                      últimos siglos. Desde las dinastías que contribuyeron a conquistar la imaginación de
                      Occidente,
                      caminando por la Revolución Cultural y culminando con la potencia económica y política actual,
                      China es un actor que influye, modifica y define dinámicas globales. Ningún país, región u
                      organismo se puede abstraer de sus decisiones, como no lo hace Asia-Pacífico y tampoco el
                      continente americano.</p>

                    <p>El liderazgo global del gobierno de Beijing lo convierte en un actor a estudiar e investigar
                      para intentar comprender la trascendencia de sus políticas; al mismo tiempo, su desarrollo y
                      crecimiento económico, influyen en los mercados internacionales y sus posturas en política
                      exterior y de seguridad afectan al mundo entero. Lo anterior hace que una nación como China se
                      conciba como parte primordial para los estudiantes interesados en la especialidad y que buscan
                      comprender sus intereses y capacidades y las consecuencias de sus acciones.</p>

                    <p><b>Proyectos de Investigación en la LGAC de China</b></p>
                    <p><button class="button1">
                        <a data-toggle="modal" data-target=#china1>
                          <span class="sbt" style="font-size: 20px;">Leer más</span>
                          <div class="liquid1"></div>
                        </a>
                      </button></p>
                    <!--Final modal body China-->


                    <!--Inicio "Tablas" modal body China-->
                    <div class="modal fade bd-example-modal-lg" id="china1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <button class="close p-2 float-right" data-dismiss="modal">
                              <p style="color: #000;">&times;</p>
                            </button>
                            <div class="text-center">
                              <h1 class="display-4 font-weight-bold" style="color: #004777;">Especialización En China
                              </h1>
                              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                                <thead style="color: #000;">
                                  <tr>
                                    <th scope="col">Unidad de aprendizaje </th>
                                    <th scope="col"> TIPO </th>
                                    <th scope="col">TOTAL HORAS B.C.A.*</th>
                                    <th scope="col">TOTAL HORAS A.M.I.**</th>
                                    <th scope="col">HORAS TOTALES</th>
                                    <th scope="col">CRÉDITOS</th>
                                    <th scope="col">PREREQUISITOS</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Chinese History, Culture, and Society</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Chinese Foreign Policy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Politics and Society</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Chinese Contemporary Politics</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Chinese Economy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Economic Relations</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Final "Tablas" modal body China-->


            <!--Especialización en Japón-->
            <div 
              class="w-100 hover hover-2 rounded pea-card"
              style="background-image: url('images/card-japan.jpg'); min-height: 15rem;"
              data-toggle="modal" 
              data-target="#japon"
              >
                <div class="hover-overlay row">
                  <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
                    Especialización en Japón
                  </h3>
                </div>
              </div>
            <!--Inicio de modal de Japón-->


            <!-- Modal -->
            <div class="modal fade" id="japon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#fff;">
                  <div class="modal-header text-center" style="background-color: #004777;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b>Japón</b></h5>
                    <button class="close p-2 float-right" data-dismiss="modal">
                      <p style="color: #ffffff;">&times;</p>
                    </button>
                  </div>
                  <div class="modal-body text-justify col-xl-12" style="color:#000;">
                    <p>Japón, fue el primer país asiático industrializado en el siglo XX y ha jugado, después de la
                      Segunda Guerra Mundial, un papel clave en la integración de la región, a través de la
                      inversión
                      y de la presencia de sus filiales, no solo en Asia, sino en América. Su papel de liderazgo
                      económico, comercial y de estabilidad en la región durante la segunda parte del siglo XX y en
                      los primeros años del siglo actual, ha capturado el interés de los investigadores en la
                      Universidad de Guadalajara, que desde hace más de dos décadas se refleja en el trabajo de
                      investigación que se realiza sobre Japón, su historia, cultura, relaciones, desarrollo y
                      crecimiento en el Departamento de estudios del Pacífico (DEP).</p>

                    <p>Desde las relaciones históricas transpacíficas y migración japonesa a la Nueva Galicia, Japón
                      se quedó en el imaginario de los mexicanos, sus culturas y tradiciones han acercado a las dos
                      naciones. Además, Japón, en los ámbitos comercial y económico, representa para México el único
                      socio con un acuerdo formal en Asia y el auge de la inversión japonesa en nuestro país ha
                      contribuido al desarrollo en sectores clave de la economía mexicana. Así, los estudiantes de
                      la
                      especialidad se verán favorecidos con la experiencia de los investigadores que ahora forman
                      parte del Centro de Estudios Japoneses (CEJA), creado para consolidar las investigaciones
                      sobre
                      la nación nipona y el aprendizaje de la lengua japonesa, y que se convertirá en el norte de
                      los
                      nuevos temas de investigación que cada uno de ellos desarrollará.</p>

                    <p><b>Proyectos de Investigación en la LGAC de Japón</b></p>
                    <p><button class="button1">
                        <a data-toggle="modal" data-target=#japan1>
                          <span class="sbt" style="font-size: 20px;">Leer más</span>
                          <div class="liquid1"></div>
                        </a>
                      </button></p>
                    <!--Final de modal de Japón-->

                    <!--Inicio "Tablas" modal body Japon-->
                    <div class="modal fade bd-example-modal-lg" id="japan1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <!--<div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>-->
                          <div class="modal-body">
                            <button class="close p-2 float-right" data-dismiss="modal">
                              <p style="color: #000;">&times;</p>
                            </button>
                            <div class="text-center">
                              <h1 class="display-4 font-weight-bold" style="color: #004777;">Especialización En Japón
                              </h1>
                              <table class="table container table-responsive rounded" style="height: fit-content; background-color: #F3CDB6">
                                <thead>
                                  <tr>
                                    <th scope="col">Unidad de aprendizaje </th>
                                    <th scope="col"> TIPO </th>
                                    <th scope="col">TOTAL HORAS B.C.A.*</th>
                                    <th scope="col">TOTAL HORAS A.M.I.**</th>
                                    <th scope="col">HORAS TOTALES</th>
                                    <th scope="col">CRÉDITOS</th>
                                    <th scope="col">PREREQUISITOS</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Japanese History, Culture, and Society</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>-</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Japanese Foreign Policy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Politics and Society</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Japanese Contemporary Politics</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Japanese Economy</th>
                                    <td>C</td>
                                    <td>64</td>
                                    <td>32</td>
                                    <td>96</td>
                                    <td>6</td>
                                    <td>Transpacific Economic Relations</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Inicio "Tablas" modal body Japon-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!--MODAL BODY-->
<!--Mapa Curricular-->

<!--Mapa Curricular FIN-->
<br>
<div class="col-md-8 text-center heading-section ftco-animate">
	<h2 class="mb-4" style="color: #004777;">Galería</h2>
</div> 

<!--Galeria de Imagenes Inicio-->

<section class="ftco-gallery">
	<div class="container-wrap">
		<div class="row no-gutters">
		@foreach($galerias2 as $galery)
    
    <div class="col-md-3 ftco-animate">
        <a href="{{ asset($galery->imagen) }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset($galery->imagen) }});">
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