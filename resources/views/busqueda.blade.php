<!--Plantila con NavBar, Footer, Css y Js-->
@extends('layouts.template')
@section('content')
    <!--Plantila con NavBar, Footer, Css y Js-->
    <section class="hero-wrap hero-wrap-2">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h3 class=" font-weight-bold text-uppercase" style="color:#000;">Resultados de la búsqueda</h3>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <div class="container ">
        @foreach ($collection as $key => $value)
            <a href="{{ $value['route'] }}">
                {{ $value['titulo'] }}
            </a>
            <p><b>Tipo:</b> {{ $value['tipo'] }}
                @if (isset($value['fecha']))
                    <b>Fecha:</b> {{ $value['fecha'] }}
                @endif

                <hr>
            </p>
        @endforeach
        @if (count($collection->all()) == 0)
            <h4 class="text-center font-weight-bold mb-4">La búsqueda no produjo resultados</h4>
        @endif
    </div>
@endsection
