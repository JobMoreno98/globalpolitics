@extends('layouts.app')
@if(Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
    @section('content') 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="home-section">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if(session('success'))
            <div class="alert alert-primary" role="alert">
                {{session('success')}}
                </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                <form class="form-group col-md-12"  method="POST"action="{{ route('actualizareventos', ['id' => $eventos->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                <div class="form-group col-md-4">
    <label for="inputAddress">Imagen a Editar</label>
    @if(isset($eventos->imagen) && $eventos->imagen != 'no disponible por el momento' && !empty($eventos->imagen))
        <img src="{{ asset($eventos->imagen) }}" class="img-fluid img-thumbnail" alt="{{ $eventos->titulo }}" width="100px">
    @elseif($eventos->imagen == 'no disponible por el momento')
        <p>No hay imagen disponible</p>
    @endif
    <label for="inputAddress2">Fotografía</label>
    <input accept="image/png,image/jpeg" type="file" id="imagen" name="imagen">
</div>
</div>
  <div class="form-group ">
    <label for="inputAddress">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo"value="{{ $eventos->titulo }}" placeholder="titulo Completo">
  </div>

  <div class="form-group ">
    <label for="inputAddress">Subtitulo</label>
    <input type="text" class="form-control" id="subtitulo" name="subtitulo"value="{{ $eventos->subtitulo }}" placeholder="Subtitulo Completo">
  </div>

  <div class="form-group ">
    <label for="inputAddress">Descripción</label>
    <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10" >{{ $eventos->descripcion }}</textarea>
  </div>

<div class="form-group ">
    <label for="inputAddress">Enlace</label>
    <input type="text" class="form-control" id="enlace" name="enlace"value="{{ $eventos->enlace }}" placeholder="Enlace del sitio">
  </div>

  <div class="row">
  <div class="form-group">
    <label for="inputAddress">Fecha a modificar</label>
    <input type="date" class="form-control"  name="fecha" id="fecha"value="{{$eventos->fecha}}">
  </div>
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
</div>
    @endsection
    @endif