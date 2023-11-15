<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
    <!--Plantila con NavBar, Footer, Css y Js-->
    <section class="hero-wrap hero-wrap-2">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h5 class="font-weight-bold text-uppercase">{{ $noticia->titulo }}</h5>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            @if (isset($noticia->imagen))
                <div class="col-sm-12 col-md-4 shadow-sm">
                    <img src="{{ asset($noticia->imagen) }}" class="w-100" alt="">
                </div>
            @endif

            <div class="col-sm-12 col-md-8 text-end">
                <p class="text-left">{{ $noticia->descripcion }}</p>
                <b>Fecha:</b> {{ $noticia->fecha }}
            </div>

        </div>

    </div>
@endsection
