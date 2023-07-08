@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Lista de Empleados') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Nombres') }}</th>
                                <th>{{ __('Apellidos') }}</th>
                                <th>{{ __('Correo') }}</th>
                                <th>{{ __('Celular') }}</th>
                                <th>{{ __('Acciones') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>
                                    <td>{{ $empleado->nombres }}</td>
                                    <td>{{ $empleado->apellidos }}</td>
                                    <td>{{ $empleado->correo }}</td>
                                    <td>{{ $empleado->celular }}</td>
                                    <td>
                                        <a href="{{ route('empleados.metas.create', $empleado) }}" class="btn btn-primary">{{ __('Metas') }}</a>
                                        <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-primary">{{ __('Editar') }}</a>
                                        <a href="{{ route('empleados.delete', $empleado) }}" class="btn btn-danger">{{ __('Eliminar') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registrar Empleado') }}</div>

                <div class="card-body">
                    @if (session('register-success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('register-success') }}
                        </div>
                    @endif

                    <form action="{{ route('empleados.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nombres">{{ __('Nombres') }}</label>
                            <input type="text" name="nombres" id="nombres" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="apellidos">{{ __('Apellidos') }}</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="correo">{{ __('Correo') }}</label>
                            <input type="email" name="correo" id="correo" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="celular">{{ __('Celular') }}</label>
                            <input type="text" name="celular" id="celular" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Registrar Empleado') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
