@extends('layouts.app')
@if(Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
    @section('content') 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              
                <div class="p-6 bg-white border-b border-gray-200">
                @if(session('primary'))
            <div class="alert alert-primary" role="alert">
                {{session('primary')}}
                </div>
            @endif
                <form class="form-group col-md-12"  method="POST"action="{{ route('actualizarRequisitos', ['id' => $requisitos->id]) }}" enctype="multipart/form-data">
                @csrf
  <div class="form-group ">
    <label for="inputAddress">Descripción</label>
    <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10" >{{ $requisitos->descripcion }}</textarea>  
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