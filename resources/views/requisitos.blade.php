@extends ('layouts.template')
@section('content')



<!--Titulo-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/requisitos_carrusel.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
			<h1 class="display-3 font-weight-bold text-uppercase"  style="color:#fff;">Requisitos</h1>
			</div>
		</div>
</section>
<!--Titulo-->
<!-- MODALES DE REQUISITOS -->

<br>
<!--Modals-->
<div class="row pea-cards">
  <!-- Área de Formación Básica Común Obligatoria-->
  <div class="row sub sub-1">
    <!--Área de Formación Especializante-->
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/peso.jpg');"
      data-toggle="modal" 
      data-target="#requisitos-1"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
		Duración y costos
        </h3>
      </div>
    </div>
    <!--Área de Formación Especializante FIN-->
  </div>
  
  <div class="row sub sub-3">
    <!--Área de Formación Optativa Abierta-->
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/ingreso.jpg');"
      data-toggle="modal" 
      data-target="#requisitos-2"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
		Requisitos de Admisión y Proceso de Ingreso
        </h3>
      </div>
    </div>
    <!--Área de Formación Optativa Abierta FIN-->
    <!--Mapa Curricular-->
    <div 
      class="hover hover-2 text-white rounded col pea-card"
      style="background-image: url('images/graduation.jpg');"
      data-toggle="modal" 
      data-target="#requisitos-3"
    >
      <div class="hover-overlay row">
        <h3 class="hover-2-title text-uppercase mb-0 font-weight-light text-white align-self-center"> 
		Requisitos de Titulación
        </h3>
      </div>
    </div>
    <!--Mapa Curricular FIN-->
  </div>
</div>

<!-- MODALES DE REQUISITOS FIN-->


<!--DURACION Y COSTOS-->
<!--MODAL BODY-->
@foreach($requisitos as $req1)
@if($req1->tipo=='DURACIÓN Y COSTOS')
<div class="modal fade" id="requisitos-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background-color:#fff; margin: 20px;">
			<div class="modal-header" style="background-color: #004777;">
				 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-2 text-justify" style="color: #000;">
			{!! nl2br(e($req1->descripcion)) !!}
			</div>
		</div>
	</div>
</div>


<!--DURACION Y COSTOS FIN-->


<!--ADMISION-->
<!--MODAL BODY-->
@elseif($req1->tipo=='REQUISITOS DE ADMICIÓN Y PROCESO DE INGRESO')
<div class="modal fade" id="requisitos-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content" style="background-color: #fff;">
			<div class="modal-header text-center" style="background-color: #004777;">
				<h5 class="modal-title text-light text-center" id="exampleModalLongTitle">
					
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-2 text-justify" style="color: #000;">
			{!! nl2br(e($req1->descripcion)) !!}
				<div class="modal-footer">
					<small><sup>1</sup>No es necesario el apostillado de documentos oficiales para el proceso de
						selección, aunque será necesario en caso de ser admitido al posgrado.</small>
				</div>
			</div>
		</div>
	</div>
</div>
<!--ADMISION FIN-->

<!--TITULACION-->
<!--MODAL BODY -->
@elseif($req1->tipo=='REQUISITOS DE TITULACIÓN')
<div class="modal fade" id="requisitos-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style="background-color: #fff;">
			<div class="modal-header text-center" style="background-color: #004777;">
				<h5 class="modal-title text-light text-center" id="exampleModalLongTitle">
					
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #ffffff;">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-2 text-justify" style="color: #000;">

				<!-- cabecera del diálogo -->

				<!-- cuerpo del diálogo -->
				<div class="modal-body p-2">
				{!! nl2br(e($req1->descripcion)) !!}
				</div>
				<!-- pie del diálogo -->
			</div>
		</div>
	</div>
</div>
@endif
@endforeach
<!--TITULACION FIN-->
<br>
<br>


<!--Titulo Galeria-->
<div class="col-md-8 text-center heading-section ftco-animate">
	<h2 class="mb-4" style="color: #004777;">Galería</h2>
</div> 
<!--Inicio Galeria-->



<!--GALERIA DE IMAGENES-->
<section class="ftco-gallery">
	<div class="container-wrap">
		<div class="row no-gutters">
		@foreach($galerias3 as $galery)

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
<!--GALERIA DE IMAGENES FIN-->
@endsection