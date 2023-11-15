@extends('layouts.app')
@if(Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
   
    @section('content') 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <div class="home-section">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               @if(session('update'))
            <div class="alert alert-primary" role="alert">
                {{session('update')}}
                </div>
            @endif
                <div class="p-6 bg-white border-b border-gray-200">
                <form class="form-group col-md-12"  method="POST"action="{{ route('actualizarNoticias', ['id' => $noticias->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                <div class="form-group col-md-4">
    <label for="inputAddress">Imagen a Editar</label>
    @if(isset($noticias->imagen) && $noticias->imagen != 'no disponible por el momento' && !empty($noticias->imagen))
        <img src="{{ asset($noticias->imagen) }}" class="img-fluid img-thumbnail" alt="{{ $noticias->titulo }}" width="100px">
    @elseif($noticias->imagen == 'no disponible por el momento')
        <p>No hay imagen disponible</p>
    @endif
    <label for="inputAddress2">Fotografía</label>
    <input accept="image/png,image/jpeg" type="file" id="imagen" name="imagen">
</div>
</div>
  <div class="form-group ">
    <br>
    <label for="inputAddress">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo"value="{{ $noticias->titulo }}" placeholder="titulo Completo">
  </div>
  <div class="form-group ">
    <label for="inputAddress">Descripción</label>
    <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10" >{{ $noticias->descripcion }}</textarea>
    
  </div>
  <div class="row">
  <div class="form-group">
    <label for="inputAddress">Fecha a modificar</label>
    <input type="date" class="form-control"  name="fecha" id="fecha"value="{{$noticias->fecha}}">
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