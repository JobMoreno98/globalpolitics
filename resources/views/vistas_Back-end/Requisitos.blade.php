@extends('layouts.app')
<!-- validaciones de usuario autenticado -->
@if(Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
    @section('content')
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="home-section">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <div style="display:flex; justify-content: center;">
                    <h3 class="text-lg font-medium text-gray-800 mb-4">Requisitos</h3>
                    </div>
                    <!-- tabla que contiene los datos de la consulta a la tabla de Requisitos -->
                        <div class="flex justify-content">
                            <div class="table-responsive">
                                <table class="table table-striped" id="requisito">
                                    <br>
                                    <thead>
                                        <tr>
                                           
                                            <th>Tipo</th>
                                            <th>Descripcion</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ($requisitos as $re)
                                        <tr class="fila-requisito">
                                      
                                            <td>{{ substr($re->tipo,0,45) }}</td>
                                            <td>{{ substr($re->descripcion,0,10) }}</td>
                                            
                                        
                                            <td>
                                                            <a href="{{ route('RequisitosE', ['id' => $re->id]) }}">
                                                            <button id="boton-editar" type="button" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> </button>
                                                    </a>
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
</div>

<!-- fin del container de la tabla NAB -->

<script>
  // método para abrir el modal con javascript y la acción del botton Agregar
        $(document).ready(function(){
            $('#mi-modal').iziModal();
        });
        $('#mi-boton').on('click',function(){
            $('#mi-modal').iziModal('open');
        });
    </script>
  <script>
    //método para hacer responsiva la tabla para dispositivos moviles o tablets
      $('#requisito').DataTable({
        responsive: true,
        autoWidth: false,
        // darle estilo a los encabezados de las tablas
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registro de requisito",
            "zeroRecords": "Esta información no se encuentra en la base de datos",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrando _MAX_ total de coincidencias)",
            'search':'Buscar:',
            'paginate':{
              'next':'Siguiente',
              'previous':'Anterior'
            }
        }
      });
  </script>
@endsection
@endif