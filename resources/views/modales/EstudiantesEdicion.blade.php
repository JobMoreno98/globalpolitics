@extends('layouts.app')
@if(Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudiantes / Edición') }}
        </h2>
       
    </x-slot>  
    @section('content') 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              
                <div class="p-6 bg-white border-b border-gray-200">
                <form class="form-group col-md-12"  method="POST"action="{{ route('actualizarEstudiantes', ['id' => $estudiantes->id]) }}" enctype="multipart/form-data">
                @csrf
  <div class="form-group ">
    <label for="inputAddress">Especialización</label>
    <input type="text" name="especializacion" class="form-control" id="especializacion" value="{{ $estudiantes->especializacion }}" >  
  </div>
  <div class="form-group ">
    <label for="inputAddress">Tutor</label>
    <input type="text"name="tutor" class="form-control" id="tutor" value="{{ $estudiantes->tutor }}" >  
  </div>
  <div class="form-group ">
    <label for="inputAddress">Estudiante</label>
    <input type="text"name="estudiante" class="form-control" id="estudiante" value="{{ $estudiantes->estudiante }}" >  
  </div>
  <div class="form-group ">
    <label for="inputAddress">Proyecto</label>
    <input type="text"name="proyecto" class="form-control" id="proyecto" value="{{ $estudiantes->proyecto }}" >  
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