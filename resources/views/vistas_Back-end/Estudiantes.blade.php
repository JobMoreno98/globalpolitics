@extends('layouts.app')
<!-- validaciones de usuario autenticado -->
@if (Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                <div class="home-section">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            @if (session('danger1'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('danger1') }}
                                </div>
                            @endif
                            @if (session('success1'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success1') }}
                                </div>
                            @endif
                            <div style="display:flex; justify-content: center;">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Tutorías Areas</h3>
                            </div>
                            <button type="button" id="mi-boton" class="btn btn-success"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                </svg></button>
                            <!-- tabla que contiene los datos de la consulta a la tabla de Requisitos -->
                            <div class="flex justify-content">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="estuidantes">
                                        <br>
                                        <thead>
                                            <tr>

                                                <th>Especialización</th>
                                                <th>Tutor / Director</th>
                                                <th>Estudiante</th>
                                                <th>proyecto</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($estudiantes as $es)
                                                <tr class="fila-requisito">

                                                    <td>{{ substr($es->especializacion, 0, 45) }}</td>
                                                    <td>{{ substr($es->tutor, 0, 10) }}</td>
                                                    <td>{{ substr($es->estudiante, 0, 10) }}</td>
                                                    <td>{{ substr($es->proyecto, 0, 10) }}</td>


                                                    <td>
                                                        <a href="{{ route('EstudiantesEdicion', ['id' => $es->id]) }}">
                                                            <button id="boton-editar" type="button"
                                                                class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                </svg> </button>
                                                        </a>

                                                        <button class="boton-eliminar btn btn-danger" data-toggle="modal"
                                                            data-target="#modalEliminar{{ $es->id }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-trash"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                <path
                                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                            </svg></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- fin de la consulta tabla Requisitos -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @foreach ($estudiantes as $es)
            <!-- Modal de advertencia tutorias -->
            <div class="modal fade" id="modalEliminar{{ $es->id }}" tabindex="-1" role="dialog"
                aria-labelledby="modalEliminarLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEliminarLabel">Eliminar Datos datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>¿Estás seguro de que deseas eliminar Datos?</p>


                            <p><strong>Especialización :{{ $es->especializacion }}</strong></p>
                            <p><strong>Tutor: {{ $es->tutor }}</strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <a href="{{ route('eliminarEstudiantes', ['id' => $es->id]) }}"
                                class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <script>
            $(document).ready(function() {
                $('.boton-eliminar').on('click', function() {
                    var targetModalId = $(this).data('target');
                    $(targetModalId).modal('show');
                });

                // Cerrar el modal y restablecer la pantalla después de cerrar o cancelar
                $('.modal').on('hidden.bs.modal', function() {
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                });
            });
        </script>

        <!-- fin del container de la tabla NAB -->

        <script>
            // método para abrir el modal con javascript y la acción del botton Agregar
            $(document).ready(function() {
                $('#mi-modal').iziModal();
            });
            $('#mi-boton').on('click', function() {
                $('#mi-modal').iziModal('open');
            });
        </script>
        <script>
            //método para hacer responsiva la tabla para dispositivos moviles o tablets
            $('#estuidantes').DataTable({
                responsive: true,
                autoWidth: false,
                // darle estilo a los encabezados de las tablas
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Registro de tutorias",
                    "zeroRecords": "Esta información no se encuentra en la base de datos",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrando _MAX_ total de coincidencias)",
                    'search': 'Buscar:',
                    'paginate': {
                        'next': 'Siguiente',
                        'previous': 'Anterior'
                    }
                }
            });
        </script>

        <div id="mi-modal">
            <form class="form-group col-md-12" method="POST"action="{{ route('guardarEstudiantes') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group ">
                    <br>
                    <label for="inputAddress">Especialización</label>
                    <input type="text" class="form-control @error('especializacion') is-invalid @enderror"
                        id="especializacion" name="especializacion" placeholder="Area de Especialización">
                    @error('especializacion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="inputAddress">Tutor/Director</label>
                    <input type="text" class="form-control @error('tutor') is-invalid @enderror" id="tutor"
                        name="tutor" placeholder="Tutor o Director">
                    @error('tutor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="inputAddress">Estudiante</label>
                    <input type="text" class="form-control @error('estudiante') is-invalid @enderror" id="estudiante"
                        name="estudiante" placeholder="Tutor o Director">
                    @error('estudiante')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Proyecto</label>

                    <input type="text" class="form-control @error('proyecto') is-invalid @enderror" id="proyecto"
                        name="proyecto" placeholder="Proyecto">
                    @error('proyecto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary  flex justify-content">Agregar</button>
            </form>

        </div>


        <!-- tabla de Conhorte -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="home-section">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            @if (session('danger'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div style="display:flex; justify-content: center;">
                                <h3 class="text-lg font-medium text-gray-800 mb-4">Conhorte Estudiantes</h3>
                            </div>
                            <button type="button" id="mi-boton2" class="btn btn-success"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                </svg></button>
                            <!-- tabla que contiene los datos de la consulta a la tabla de Requisitos -->
                            <div class="flex justify-content">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="conhorte">
                                        <br>
                                        <thead>
                                            <tr>

                                                <th>Generación</th>
                                                <th>Ingreso</th>
                                                <th>Tasa</th>
                                                <th>Eficiencia</th>
                                                <th>Egresados</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($requisitosconhortes as $con)
                                                <tr class="fila-conhorte">

                                                    <td>{{ substr($con->generacion, 0, 45) }}</td>
                                                    <td>{{ substr($con->ingreso, 0, 45) }}</td>
                                                    <td>% {{ substr($con->tasa, 0, 10) }}</td>
                                                    <td>% {{ substr($con->eficiencia, 0, 10) }}</td>
                                                    <td>
                                                        {{$con->graduados}}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('conEdicion', ['id' => $con->id]) }}">
                                                            <button id="boton-editar" type="button"
                                                                class="btn btn-info"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                </svg> </button>
                                                        </a>

                                                        <button class="boton-eliminar btn btn-danger" data-toggle="modal"
                                                            data-target="#modalEliminar2{{ $con->id }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-trash"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                <path
                                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                            </svg></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <!-- fin de la consulta tabla Requisitos -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($requisitosconhortes as $con)
            <!-- Modal de advertencia cohorte estudiantes -->
            <div class="modal fade" id="modalEliminar2{{ $con->id }}" tabindex="-1" role="dialog"
                aria-labelledby="modalEliminarLabel2" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEliminarLabel2">Eliminar datos conhorte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>¿Estás seguro de que deseas eliminar?</p>


                            <p><strong>Generación: {{ $con->generacion }}</strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <a href="{{ route('eliminarcon', ['id' => $con->id]) }}" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <script>
            // método para abrir el modal con javascript y la acción del botton Agregar
            $(document).ready(function() {
                $('#mi-modal2').iziModal();
            });
            $('#mi-boton2').on('click', function() {
                $('#mi-modal2').iziModal('open');
            });
        </script>
        <script>
            //método para hacer responsiva la tabla para dispositivos moviles o tablets
            $('#conhorte').DataTable({
                responsive: true,
                autoWidth: false,
                // darle estilo a los encabezados de las tablas
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Registro de Conhorte",
                    "zeroRecords": "Esta información no se encuentra en la base de datos",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrando _MAX_ total de coincidencias)",
                    'search': 'Buscar:',
                    'paginate': {
                        'next': 'Siguiente',
                        'previous': 'Anterior'
                    }
                }
            });
        </script>

        <div id="mi-modal2">
            <form class="form-group col-md-12" method="POST"action="{{ route('guardarConhorte') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="form-group ">
                    <br>
                    <label for="inputAddress">Generación</label>
                    <input type="text" class="form-control  @error('generacion') is-invalid @enderror" id="generacion"
                        name="generacion" placeholder="Generacion">
                    @error('generacion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="inputAddress">Ingreso</label>
                    <input type="number" step=".01" class="form-control  @error('ingreso') is-invalid @enderror"
                        id="ingreso" name="ingreso" placeholder="Ingreso">
                    @error('ingreso')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="inputAddress">Tasa Graduación</label>
                    <input type="number" step=".01" class="form-control  @error('tasa') is-invalid @enderror"
                        id="tasa" name="tasa" placeholder="%">
                    @error('tasa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="inputAddress">Eficiencia Terminal</label>
                    <input type="number" step=".01" class="form-control  @error('eficiencia') is-invalid @enderror"
                        id="eficiencia" name="eficiencia" placeholder="%">
                    @error('eficiencia')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="inputAddress">Total de Egresados</label>
                    <input type="number" step="1" class="form-control  @error('graduados') is-invalid @enderror"
                        id="graduados" name="graduados">
                    @error('graduados')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary  flex justify-content">Agregar</button>
            </form>

        </div>



        <script>
            $(document).ready(function() {
                $('.boton-eliminar2').on('click', function() {
                    var targetModalId = $(this).data('target');
                    $(targetModalId).modal('show');
                });

                // Cerrar el modal y restablecer la pantalla después de cerrar o cancelar
                $('.modal').on('hidden.bs.modal', function() {
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                });
            });
        </script>
    @endsection
@endif
