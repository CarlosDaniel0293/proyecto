@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Editar Meta') }}</div>

                    <div class="card-body">
                        <form action="{{ route('empleados.metas.update', $meta) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="meta">{{ __('Meta') }}</label>
                                <input type="text" name="meta" id="meta" class="form-control" value="{{ $meta->meta }}">
                            </div>

                            <div class="form-group">
                                <label for="duracion">{{ __('Duración') }}</label>
                                <input type="text" name="duracion" id="duracion" class="form-control" value="{{ $meta->duracion }}">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Actualizar Meta') }}</button>
                            <a href="{{ route('metas.avances.create', $meta) }}" class="btn btn-primary">{{ __('Registrar Avance') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
