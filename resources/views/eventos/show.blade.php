<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
    <!--Plantila con NavBar, Footer, Css y Js-->
    <section class="hero-wrap hero-wrap-2">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h4 class="font-weight-bold text-uppercase">{{ $evento->titulo }}</h4>
                    <hr>
                    <h6>{{ $evento->subtitulo }}</h6>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            @if (isset($evento->imagen))
                <div class="col-sm-12 col-md-4 shadow-sm">
                    <img src="{{ asset($evento->imagen) }}" class="w-100" alt="">
                </div>
            @endif

            <div class="col-sm-12 col-md-8 text-end">
                <p class="text-left">{{ $evento->descripcion }}</p>
                <b>Fecha:</b> {{ $evento->fecha }}
            </div>

        </div>

    </div>
@endsection
