@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registrar Meta') }}</div>

                <div class="card-body">
                    <form action="{{ route('empleados.metas.store', $empleado) }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="meta">{{ __('Meta') }}</label>
                            <input type="text" name="meta" id="meta" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="duracion">{{ __('Duración') }}</label>
                            <input type="text" name="duracion" id="duracion" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Registrar Meta') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
