    @extends('layouts.app')
@if(Auth::user()->tipo == 'Administrador')
    @section('content') 
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="home-section">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form class="form-group col-md-12" method="POST" action="{{ route('ActualizarUsuario', ['id' => $usuarios2->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input name="name" class="form-control" id="name" value="{{ $usuarios2->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input name="email" class="form-control" id="email" value="{{ $usuarios2->email }}">
                    </div>
                    <p>
                    <label for="new_password">Nueva Contraseña</label>
                        <input name="new_password" type="password" class="form-control" id="new_password" placeholder="Dejar en blanco si no se desea cambiar">
                        
                    </p>
                    
                        <label for="tipo">Selecciona el tipo de usuario</label>
                        <br>
                        <select name="tipo" class="form-select" aria-label="Default select example">
                            <option value="Administrador" {{ $usuarios2->tipo == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                            <option value="Editor" {{ $usuarios2->tipo == 'Editor' ? 'selected' : '' }}>Editor</option>
                            <option value="estandar" {{ $usuarios2->tipo == 'estandar' ? 'selected' : '' }}>Estandar</option>
                        </select>
                    
                    <div class="row">
                        <div class="ml-auto">
                            <button type="submit" class="btn btn-primary flex justify-content">Guardar Cambios</button>
                        </div>
                    </div>
                </form>

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                @if(session('warning'))
                    <div class="alert alert-warning" role="alert">
                        {{session('warning')}}
                    </div>
                @endif
                @if(session('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{session('danger')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
  @endsection
  @endif