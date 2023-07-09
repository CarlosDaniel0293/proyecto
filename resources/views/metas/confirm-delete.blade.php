@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Confirmar Eliminación de Meta') }}</div>

                    <div class="card-body">
                        <p>{{ __('¿Estás seguro de que deseas eliminar esta meta?') }}</p>

                        <form action="{{ route('empleados.metas.destroy', ['meta' => $meta]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">{{ __('Eliminar') }}</button>
                            <a href="{{ route('metas.index') }}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
