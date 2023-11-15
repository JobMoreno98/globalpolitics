@extends('layouts.app')
@if(Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
    @section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              
                <div class="p-6 bg-white border-b border-gray-200">
                @if(session('update'))
            <div class="alert alert-primary" role="alert">
                {{session('update')}}
                </div>
                @endif
                <form class="form-group col-md-12"  method="POST"action="{{ route('actualizar', ['id' => $investigadores->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                <div class="form-group col-md-4">
    <label for="inputAddress">Imagen a Editar</label>
    @if(isset($investigadores->imagen) && $investigadores->imagen != 'no disponible por el momento' && !empty($investigadores->imagen))
        <img src="{{ asset($investigadores->imagen) }}" class="img-fluid img-thumbnail" alt="{{ $investigadores->nombre }}" width="100px">
    @elseif($investigadores->imagen == 'no disponible por el momento')
        <p>No hay imagen disponible</p>
    @endif
    <label for="inputAddress2">Fotografía</label>
    <input accept="image/png,image/jpeg" type="file" id="imagen" name="imagen">
</div>
</div>
  <div class="form-group ">
    <br>
    <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"value="{{ $investigadores->nombre }}" placeholder="Nombre Completo">
  </div>
  <div class="form-group ">
    <label for="inputAddress">Especialidad</label>
    <input type="text" class="form-control" id="especialidad" name="especialidad"value="{{ $investigadores->especialidad }}" placeholder="Especialidad">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Correo</label>
    <input type="email" class="form-control" id="correo"name="correo"  value="{{ $investigadores->correo }}"placeholder="Correo Electronico">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Puesto</label>
    <textarea name="puesto" id="puesto" cols="30" rows="10" placeholder="puesto desempeñado"class="form-control" >{{ $investigadores->puesto }}</textarea>
    
  </div>
  <div class="form-group">
    <label for="inputAddress2">Linea</label>
    <textarea name="linea" id="linea" cols="30" rows="10" class="form-control"placeholder="Líneas de investigación" >{{ $investigadores->linea }}</textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Proyecto</label>
    <textarea name="proyectos" id="proyectos" cols="30" rows="10" class="form-control" placeholder="proyectos involucrados">{{ $investigadores->proyectos }}</textarea>
    
  </div>
  <div class="form-group">
    <label for="inputAddress2">Publicaciones</label>
    <textarea name="publicaciones" id="publicaciones" cols="50" rows="10" class="form-control" placeholder="Detalles publicaciones">{{ $investigadores->publicaciones }}</textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Biografia</label>
    <textarea name="biografia" id="biografia" cols="50" rows="10" class="form-control" placeholder="Detalles Adicionales">{{ $investigadores->biografia }}</textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Decripción</label>
    <textarea name="descripcion" id="descripcion" cols="50" rows="10" class="form-control" placeholder="información previa a la vista">{{ $investigadores->descripcion }}</textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Orientación</label>
    <input type="text"name="orientacion" id="orientacion"class="form-control"placeholder="orientación"value="{{ $investigadores->orientacion}}">
  </div>
  <div class="row">
    <div class="ml-auto">
    <button type="submit" class="btn btn-primary  flex justify-content">Guardar Cambios</button>
    </div>
 
  </div>
 
</form>
            </div>
        </div>
    </div>
</div>

@endsection
@endif