<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
<!--Plantila con NavBar, Footer, Css y Js-->


<!--Carrusel Profesores-->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/teacher_carrusel.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="display-3 font-weight-bold text-uppercase" style="color:#fff;">Núcleo Académico Básico</h1>
			</div>
		</div>
	</div>
</section>
<!--Carrusel Profesores-->


<!--Modales Profesores-->

<section class="ftco-section" style="color: #000;">
    <div class="container-fluid">
        <div class="row">
            @foreach($investigadores as $investigador1) 
            <div class="col-md-6 col-lg-3 ftco-animate" data-toggle="modal" id="{{$investigador1->id}}" data-target="#modal{{$investigador1->id}}">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                    @if(isset($investigador1->imagen) && $investigador1->imagen != 'no disponible por el momento' && !empty($investigador1->imagen))             
                   <div class="img align-self-stretch" style="background-image: url({{ asset($investigador1->imagen) }}); "></div>
                    @elseif($investigador1->imagen == 'no disponible por el momento')
                    <div class="img align-self-stretch" style="background-image: ; display: flex; justify-content: center; align-items: center;">
                 <p style="text-align: center;">Imagen no disponible</p>
                    </div>

                   
                    @endif
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>{{$investigador1->nombre}}</h3>
                        <span class="position mb-2">{{$investigador1->orientacion}}</span>
                      <br>
                        <div class="faded" >
						{!! nl2br(e($investigador1->descripcion)) !!}
                        </div>
                    </div>	
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



@foreach($investigadores as $investigador)
<div class="modal fade" id="modal{{$investigador->id}}">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <!-- cabecera del diálogo -->
            <!-- cuerpo del diálogo -->
            <div class="modal-body text-justify" style="background-color:#F3CDB6; padding: 20px;">
                <div class="row pt-2">
                    <div class="flex-profesores">
                        <div class="ftco-animate col-5">
                        @if(isset($investigador->imagen) && $investigador->imagen != 'no disponible por el momento' && !empty($investigador->imagen))
                            <span class="gallery img align-items-center" style="background-image: url({{asset($investigador->imagen)}}); height: 500px;
    width: 325px;"></span>
                      
                        @elseif($investigador->imagen == 'no disponible por el momento')
                        <span class="gallery img align-items-center" style="background-image: height: 340px; width: 325px; display: flex; justify-content: center; align-items: center;">
                          <p style="text-align: center;">Imagen no disponible</p>
                            </span>

                        
                        @endif
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <p><b>{{$investigador->nombre}}</b></p>
                                <p><b>{{$investigador->especialidad}}</b></p>
                                <hr>
                                <b><i class="ion-ios-mail" style="font-size: 25px;"></i><a href="mailto:{{$investigador->correo}}" target="_blank" style="color:#048A81;">{{$investigador->correo}}</a></b>
                                <hr>
                                <p><b>{!! nl2br(e($investigador->puesto)) !!}</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col pt-3">
                        <ul class="nav nav-tabs text-center background-pills" id="myTab" role="tablist">
                            <li class="nav-item col-6 nav-link-pills" role="presentation">
                                <a class="nav-link active a-pills" id="home-tab" data-toggle="tab" href="#biografia{{$investigador->id}}" role="tab" aria-controls="home" aria-selected="true"><b>Biografía y Educación</b></a>
                            </li>
                            <li class="nav-item col-6" role="presentation">
                                <a class="nav-link nav-link-pills a-pills" id="profile-tab" data-toggle="tab" href="#produccion{{$investigador->id}}" role="tab" aria-controls="profile" aria-selected="false"><b>Líneas de Investigación</b></a>
                            </li>
                            <li class="nav-item col-6" role="presentation">
                                <a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#proyecto{{$investigador->id}}" role="tab" aria-controls="contact" aria-selected="false"><b>Proyectos Actuales</b></a>
                            </li>
                            <li class="nav-item col-6" role="presentation">
                                <a class="nav-link a-pills" id="contact-tab" data-toggle="tab" href="#contacto{{$investigador->id}}" role="tab" aria-controls="contact" aria-selected="false"><b>Publicaciones</b></a>
                            </li>
                        </ul>
                        <div class="tab-content text-dark pt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="biografia{{$investigador->id}}" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Biografia -->
                                {!! nl2br(e($investigador->biografia)) !!}
                            </div>
                            <div class="tab-pane fade" id="produccion{{$investigador->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- lineas de investigacion -->
                                {!! nl2br(e($investigador->linea)) !!}
                            </div>
                            <div class="tab-pane fade" id="proyecto{{$investigador->id}}" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- proyectos Actuales -->
                                {!! nl2br(e($investigador->proyectos)) !!}
                            </div>
                            <div class="tab-pane fade" id="contacto{{$investigador->id}}" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- publicaciones -->
                                {!! nl2br(e($investigador->publicaciones)) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" style="position: absolute; top: 20px; right: 20px; background: none; border: none; font-size: 24px; color: #000; opacity: 0.5;">
   					 <span aria-hidden="true">&times;</span>
					</button>

            </div>
        </div>
    </div>
</div>
@endforeach


<!--Modales Profesores-->

@endsection