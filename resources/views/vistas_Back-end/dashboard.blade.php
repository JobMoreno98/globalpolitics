@extends('layouts.app')
<!-- validaciones de usuario autenticado -->
@section('content')
    @if (Auth::check() && Auth::user()->tipo == 'estandar')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="home-section">
                    <div class="alert alert-info">
                        Gracias por registrarte. Es necesario comunicarte con tu Administrador para que puedas utilizar la
                        página web.
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="home-section">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="page-heading">
                                <h3 class="text-center">Registros Activos</h3>
                                <hr class="my-3 py-3">
                            </div>
                            <div class="page-content">
                                <section class="row">
                                    <div class="col-12 col-lg-9">
                                        <div class="row">
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-body px-3 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="stats-icon blue">
                                                                    <i class='bx bx-user display-4'></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h6 class="text-muted font-semibold">NAB</h6>
                                                                <h6 class="font-extrabold mb-0">{{ $inv }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- comentario -->
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-body px-3 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="stats-icon blue">
                                                                    <i class='bx bx-calendar-event display-4'></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h6 class="text-muted font-semibold">Eventos</h6>
                                                                <h6 class="font-extrabold mb-0">{{ $eventos }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-body px-3 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="stats-icon green">
                                                                    <i class='bx bx-news display-4'></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <h6 class="text-muted font-semibold">Noticias</h6>
                                                                <h6 class="font-extrabold mb-0">{{ $noticias }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-body px-3 py-4-5">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="stats-icon red">
                                                                    <i class='bx bx-image display-4'></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 ">
                                                                <h6 class="text-muted font-semibold">Galeria</h6>
                                                                <h6 class="font-extrabold mb-0">{{ $galerias }}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        @if (Auth::user()->tipo == 'Administrador')
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Publicaciones</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div id="chart-profile-visit"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <br>
                                        <div class="row">
                                            <div class="col-12 col-xl-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Últimos visitantes</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center">
                                                                    <svg class="bi text-primary" width="32"
                                                                        height="32" fill="blue" style="width:10px">
                                                                        <use
                                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                                    </svg>
                                                                    <h5 class="mb-0 ms-3">Estandar {{ $usuarios3 }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div id="chart-europe"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center">
                                                                    <svg class="bi text-success" width="32"
                                                                        height="32" fill="blue" style="width:10px">
                                                                        <use
                                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                                    </svg>
                                                                    <h5 class="mb-0 ms-3 text-nowrap">Administradores {{ $usuarios1 }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div id="chart-america"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="d-flex align-items-center">
                                                                    <svg class="bi text-danger" width="32"
                                                                        height="32" fill="blue" style="width:10px">
                                                                        <use
                                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                                    </svg>
                                                                    <h5 class="mb-0 ms-3">Editores {{ $usuarios2 }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div id="chart-indonesia"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Últimas actualizaciones</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-lg">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Apartado</th>
                                                                        <th>Descripción</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($inv2 as $inv2)
                                                                        <tr>
                                                                            <td class="col-3">
                                                                                <div class="d-flex align-items-center">

                                                                                    <p class="font-bold ms-3 mb-0">NAB</p>
                                                                                </div>
                                                                            </td>
                                                                            <td class="col-auto">
                                                                                <p class=" mb-0">Puesto
                                                                                    :{{ $inv2->puesto }}</p>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    @foreach ($noticias2 as $noti2)
                                                                        <tr>
                                                                            <td class="col-3">
                                                                                <div class="d-flex align-items-center">

                                                                                    <p class="font-bold ms-3 mb-0">Noticias
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td class="col-auto">
                                                                                <p class=" mb-0">Descripción:
                                                                                    {{ substr($inv2->descripcion, 0, 20) }}
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    @foreach ($eventos2 as $event2)
                                                                        <tr>
                                                                            <td class="col-3">
                                                                                <div class="d-flex align-items-center">

                                                                                    <p class="font-bold ms-3 mb-0">Eventos
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td class="col-auto">
                                                                                <p class=" mb-0">Descripción:
                                                                                    {{ substr($event2->descripcion, 0, 20) }}
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    @foreach ($galerias2 as $gale2)
                                                                        <tr>
                                                                            <td class="col-3">
                                                                                <div class="d-flex align-items-center">

                                                                                    <p class="font-bold ms-3 mb-0">Galerias
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td class="col-auto">
                                                                                <p class=" mb-0">Página situada:
                                                                                    {{ substr($gale2->tipo, 0, 20) }}</p>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3">
                                        <div class="card">
                                            <div class="card-body py-4 px-10">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 name">
                                                        <h5 class="font-bold"><i class="bx bx-user display-4"></i> {{ substr(Auth::user()->name, 0, 50) }}</h5>
                                                        <h6 class="text-muted mb-0">{{ substr(Auth::user()->email, 0, 20) }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Usuarios Activos</h4>
                                            </div>
                                            <div class="card-content pb-4">
                                                @foreach ($usuarios4 as $user1)
                                                    <div class="recent-message d-flex px-4 py-3">
                                                        <div class="avatar avatar-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                                                height="30" fill="currentColor"
                                                                class="bi bi-person-check" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                                                <path
                                                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                                            </svg>
                                                            <h6>{{ substr($user1->name, 0, 20) }}</h6>
                                                            <h6>{{ substr($user1->email, 0, 20) }}</h6>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>


                                        <br>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Tipos de usuarios</h4>
                                            </div>
                                            <div class="card-body">
                                                <div id="chart-visitors-profile"></div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Pasa los valores de las consultas a tu archivo JavaScript
            var noticias = {{ $noticias }};
            var eventos = {{ $eventos }};
            var galerias = {{ $galerias }};
            var inv = {{ $inv }};

            // Pasa los valores de las consultas a tu archivo JavaScript
            var usuarios1 = {{ $usuarios1 }};
            var usuarios2 = {{ $usuarios2 }};
            var usuarios3 = {{ $usuarios3 }};

            var categories = @json($categories); // Convertir el arreglo PHP a un arreglo JavaScript
        </script>
    @endif
@endsection
