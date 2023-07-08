@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirmar Eliminación') }}</div>

                <div class="card-body">
                    <p>{{ __('¿Estás seguro de que deseas eliminar al empleado: ') }} <strong>{{ $empleado->nombres }} {{ $empleado->apellidos }}</strong>?</p>
                    <form method="POST" action="{{ route('empleados.destroy', $empleado) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('Eliminar') }}</button>
                        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
