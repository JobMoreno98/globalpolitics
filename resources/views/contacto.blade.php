<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!--Carrusel Contacto-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/contacto_carrusel.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Contacto</h1>
      </div>
    </div>
  </div>
</section>

<br>
<br>
<br>

<section class="wrapper">
  <div class="container-fostrap">
    <div class="content">
      <div class="container">
        <div class="row">
          
          <div class="col-xs-12 col-sm-4">
            
            <div class="card pointer">
              <a href="mailto:mtria.globalpolitics@academicos.udg.mx"> 
              <span class="img-card"><br>
                <img src="images/gmail.png" >
              </span>
              
              <div class="card-content">
                <h4 class="card-title text-center" style="color:#fd5f00;">
                  Envía un correo
                </h4>
              </div>
              </a>
            </div>
          </div>
          
          <div class="col-xs-12 col-sm-4" >
            <div class="card pointer">
              
              <a class="img-card" href="https://www.google.com/maps/place/Centro+Universitario+de+Ciencias+Sociales+y+Humanidades/@20.741099,-103.377576,16z/data=!4m6!3m5!1s0x8428af097b88abe3:0xbb90e158805bcd46!8m2!3d20.7410992!4d-103.3775765!16s%2Fg%2F122h697k?hl=es&entry=ttu"target="_blank" ><br>
                <img src="images/mapa.png" >
              </a>
              <div class="card-content">
                <h4 class="card-title text-center" style="color:#fd5f00;" >
                <a>
                  Dirección</a>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="card pointer">
              <a href="tel://3338193300" target="_blank">
                
              <span class="img-card">
                <br>
                <img src="images/llamada-telefonica.png" >
              </span>
              <div class="card-content">
                <h4 class="card-title text-center" style="color:#fd5f00;">
                  Llámanos
                </h4>
              </div>
              </a>
            </div>
          </div>
        </div>
        <br>
	<div class="row">
          <div class="col-12 d-flex mx-auto justify-content-center">
		<h3 class="display-3 font-weight-bold" style="color: #004777;">
			M&#225;s Informes
		</h3>
          </div>
        </div>
	<div class="row">
          <div class="col-12 d-flex mx-auto justify-content-center">
		<p>
			Coordinadora: Mtra. Ligia Ibarra Gonz&#225;lez<br>
			Direcci&#243;n: Parres Arias #150, esquina perif&#233;rico. Campus Los Belenes, edificio F4, Primer Piso.<br>
			Tel&#233;fono: (33) 3819-3300 ext. 23541 y 23656<br>
			Correo electr&#243;nico: mtria.globalpolitics@academicos.udg.mx  ligia.ibarra@administrativos.udg.mx
		</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
</section>
<!--MAPA-->



@endsection