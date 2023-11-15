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
           
                <form class="form-group col-md-12"  method="POST"action="{{ route('ActualizarImagen', ['id' => $galerias->id]) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                <div class="form-group col-md-4">
    <label for="inputAddress">Imagen a Editar</label>
    @if(isset($galerias->imagen) && $galerias->imagen != 'no disponible por el momento' && !empty($galerias->imagen))
        <img src="{{ asset($galerias->imagen) }}" class="img-fluid img-thumbnail" alt="{{ $galerias->nombre }}" width="100px">
    @elseif($galerias->imagen == 'no disponible por el momento')
        <p>No hay imagen disponible</p>
    @endif
    <label for="inputAddress2">Fotografía</label>
    <input accept="image/png,image/jpeg" type="file" id="imagen" name="imagen">
</div>
</div>
  <div class="form-group ">
    <label for="inputAddress">Nombre de la imagen</label>
    <input type="text" class="form-control" id="nombre" name="nombre"value="{{ $galerias->nombre }}" >
  </div>

        <div class="form-group">  
                        <select name="tipo" class="form-select" aria-label="Default select example">
                          <label for="inputAddress">Selecciona la sección</label>
                            <option value="inicio">Pagina Principal</option>
                            <option value="plan">Plan de estudios</option>
                            <option value="requisitos">Requisitos</option>
                            <option value="estudiantes">Estudiantes</option>
                        </select>
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