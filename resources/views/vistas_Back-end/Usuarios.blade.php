<!-- validaciones de usuario autenticado -->
@if(Auth::user()->tipo == 'Administrador')
    @section('content')
    <div class="py-12">
    @extends('layouts.app')
   
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="home-section">
          
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('danger'))
            <div class="alert alert-danger" role="alert">
                {{session('danger')}}
                </div>
            @endif
            <div style="display:flex; justify-content: center;">
                    <h3 class="text-lg font-medium text-gray-800 mb-4">Usuarios</h3>
                    </div>
                    <!-- tabla que contiene los datos de la consulta a la tabla de Usuario -->
                        <div class="flex justify-content">
                            <div class="table-responsive">
                                <table class="table table-striped" id="usuarios">
                                    <br>
                                    <thead>
                                        <tr>
                                           <th></th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Tipo de Usuario</th>
                                           
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ($usuarios as $user)
                                    @if($user->id !=Auth::user()->id)
                                        <tr class="fila-Usuarios">
                                          <td>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                          </td>
                                            <td>{{ substr($user->name,0,10) }}</td>
                                            <td>{{ substr($user->email,0,10) }}</td>
                                            <td>{{ substr($user->tipo,0,45) }}</td>          
                                            <td>
                                                            <a href="{{ route('UsuarioEditar', ['id' => $user->id]) }}">
                                                        <button id="boton-editar" type="button" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> </button>
                                                    </a>
                                                    
                                                    <button class="boton-eliminar btn btn-danger" data-toggle="modal" data-target="#modalEliminar{{ $user->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></button>
                                        </td>   
        
                                </tr>
                                @endif
                        @endforeach

                                    </tbody>
                                </table>
                                <!-- fin de la consulta tabla Usuario -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
  <script>
    //método para hacer responsiva la tabla para dispositivos moviles o tablets
      $('#usuarios').DataTable({
        responsive: true,
        autoWidth: false,
        // darle estilo a los encabezados de las tablas
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registro de Usuarios",
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
  @foreach($usuarios as $user)
    <!-- Modal de advertencia -->
    <div class="modal fade" id="modalEliminar{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Estás seguro de que deseas eliminar a <strong>{{ $user->name }}</strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a href="{{ route('eliminarUsuario', ['id' => $user->id]) }}" class="btn btn-danger">Eliminar</a>
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
$('.modal').on('hidden.bs.modal', function () {
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
});
});
</script>
@endsection
@endif