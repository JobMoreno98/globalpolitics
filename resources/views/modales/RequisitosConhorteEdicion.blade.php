@extends('layouts.app')
@if (Auth::user()->tipo == 'Administrador' || Auth::user()->tipo == 'Editor')

    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="home-section">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form class="form-group col-md-12" method="POST"
                                action="{{ route('actualizarRequisitosConhorte', ['id' => $requisitosconhortes->id]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="generacion">Generación</label>
                                    <input type="text" name="generacion"
                                        class="form-control @error('generacion') is-invalid @enderror" id="generacion"
                                        value="{{ $requisitosconhortes->generacion }}">
                                    @error('generacion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="ingreso">Ingreso</label>
                                    <input type="text" name="ingreso"
                                        class="form-control @error('ingreso') is-invalid @enderror" id="ingreso"
                                        value="{{ $requisitosconhortes->ingreso }}">
                                    @error('ingreso')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tasa">Tasa</label>
                                    <input type="text" name="tasa"
                                        class="form-control @error('tasa') is-invalid @enderror" id="tasa"
                                        value="{{ $requisitosconhortes->tasa }}">
                                    @error('tasa')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="eficiencia">Eficiencia</label>
                                    <input type="text" name="eficiencia"
                                        class="form-control @error('eficiencia') is-invalid @enderror" id="eficiencia"
                                        value="{{ $requisitosconhortes->eficiencia }}">
                                    @error('eficiencia')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="graduados">Graduados</label>
                                    <input type="text" name="graduados"
                                        class="form-control @error('graduados') is-invalid @enderror" id="graduados"
                                        value="{{ $requisitosconhortes->graduados }}">
                                    @error('graduados')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="ml-auto">
                                        <button type="submit" class="btn btn-secondary flex justify-content">Guardar
                                            Cambios</button>
                                    </div>
                                </div>
                            </form>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('danger'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning" role="alert">
                                    {{ session('warning') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@endif
