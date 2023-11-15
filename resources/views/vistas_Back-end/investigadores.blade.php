@extends('layouts.app')
<!-- validaciones de usuario autenticado -->
@if(Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor') 
    @section('content')
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
 
            <div class="home-section">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('danger1'))
            <div class="alert alert-danger" role="alert">
                {{session('danger1')}}
                </div>
                @endif
                @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
                </div>
                @endif
                <div style="display:flex; justify-content: center;">
                    <h3 class="text-lg font-medium text-gray-800 mb-4">Investigadores</h3>
                    </div>
                    <div class="row">
                    <button type="button" id="mi-boton" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg></button>
                    </div>
                    <br>
                    <!-- tabla que contiene los datos de la consulta a la tabla de NAB -->
                        <div class="flex justify-content">
                            <div class="table-responsive">
                                <table class="table table-striped" id="inv">
                                    <thead>
                                        <tr>
                                           
                                            <th>Nombre</th>
                                            <th>Especialidad</th>
                                            <th>Correo</th>
                                            <th>Puesto</th>
                                            <th>Biografia</th>
                                            <th>Linea</th>
                                            <th>Proyecto</th>
                                            <th>Publicacion</th>
                                            <th>descripcion</th>
                                            <th>orientacion</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ($investigadores as $investigador)
                                        <tr class="fila-investigador">
                                      
                                            <td>{{ $investigador->nombre }}</td>
                                            <td>{{ substr($investigador->especialidad,0,10) }}</td>
                                            <td>{{ $investigador->correo }}</td>
                                            <td>{{ substr($investigador->puesto,0,20) }}</td>
                                            <td>{{ substr($investigador->biografia,0,20) }}</td>
                                            <td>{{ substr($investigador->linea,0,20) }}</td>
                                            <td>{{ substr($investigador->proyectos,0,20) }}</td>
                                            <td>{{ substr($investigador->publicaciones,0,20) }}</td>
                                            <td>{{ substr($investigador->descripcion,0,20) }}</td>
                                            <td>{{ substr($investigador->orientacion,0,20) }}</td>
                                            <td>
                                                      <div class="ml-auto">
                                            <a href="{{ route('EdicionNab', ['id' => $investigador->id]) }}">
                                            <button id="boton-editar" type="button" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> </button>
                                                    </a>
                                                    
                                                    <button class="boton-eliminar btn btn-danger" data-toggle="modal" data-target="#modalEliminar{{ $investigador->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg></button>
    </tr>

 @endforeach
                                    </tbody>
                                    
                                </table>
                                <!-- fin de la consulta tabla NAB -->
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
      $('#inv').DataTable({
        responsive: true,
        autoWidth: false,
        // darle estilo a los encabezados de las tablas
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registro de NAB",
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
  <!-- inicio modal de registro NAB -->
<div id="mi-modal">
  <div class="modal-content">
  <form class="form-group col-md-12"  method="POST"action="{{route('guardar')}}" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group ">
    <br>
    <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
   
  </div>
  <div class="form-group ">
    <label for="inputAddress">Especialidad</label>
    <input type="text" class="form-control " id="especialidad" name="especialidad" placeholder="Especialidad">
  
  </div>
  <div class="form-group">
    <label for="inputAddress2">Correo</label>
    <input type="email" class="form-control" id="correo"name="correo" placeholder="Correo Electronico">

  </div>
  <div class="form-group">
    <label for="inputAddress2">Puesto</label> 
    <textarea name="puesto" id="puesto" cols="30" rows="10"class="form-control @error('puesto') is-invalid @enderror"></textarea>
    @error('puesto')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="inputAddress2">Linea</label>
    
    <textarea name="linea" id="linea" cols="50" rows="10" class="form-control @error('linea') is-invalid @enderror" placeholder="Línea de investigación"></textarea>
    @error('linea')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="inputAddress2">Proyecto</label>
    <textarea name="proyectos" id="proyectos" cols="50" rows="10"class="form-control @error('proyectos') is-invalid @enderror" placeholder=" proyectos involucrados"></textarea>
    @error('proyectos')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="inputAddress2">Publicaciones</label>
    <textarea name="publicaciones" id="publicaciones" cols="50" rows="10" class="form-control @error('publicaciones') is-invalid @enderror" placeholder="Detalles Adicionales"></textarea>
    @error('publicaciones')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="inputAddress2">Biografia</label>
    <textarea name="biografia" id="biografia" cols="50" rows="10" class="form-control @error('biografia') is-invalid @enderror" placeholder="Detalles Adicionales"></textarea>
    @error('biografia')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
  </div>
  <br>
  <div class="form-group">
    <label for="inputAddress2">Decripción</label>
    <textarea name="descripcion" id="descripcion" cols="50" rows="10" class="form-control @error('descripcion') is-invalid @enderror" placeholder="información previa a la vista"></textarea>
    @error('descripcion')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
  </div>
  <div class="form-group">
    <label for="inputAddress2">Orientación</label>
    <input type="text"name="orientacion" id="orientacion"placeholder="orientacion" class="form-control ">
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="imagen">Fotografía</label>
        <input accept="image/png,image/jpeg" type="file" id="imagen" name="imagen">
    </div>
  </div>
  <button type="submit" class="btn btn-primary  flex justify-content">Agregar</button>
</form>
    
  </div> 
  </div>
  @foreach($investigadores as $investigador)
<!-- Modal de advertencia -->
<div class="modal fade" id="modalEliminar{{ $investigador->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarLabel">Eliminar NAB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <p>¿Estás seguro de que deseas eliminar a <strong>{{ $investigador->nombre }}</strong>?</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="{{ route('eliminarNab', ['id' => $investigador->id]) }}" class="btn btn-danger">Eliminar</a>
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
  <!-- Fin del modal registro NAB -->