@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    <h2>Bienvenido, {{ Auth::user()->name }}!</h2>

                    <p>Elige una de las opciones para empezar a trabajar</p>

                    <form action="{{ route('empleados.index') }}" method="GET" class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Administrar Empleados') }}</button>
                    </form>

                    <form action="{{ route('metas.index') }}" method="GET" class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Administrar Metas') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
