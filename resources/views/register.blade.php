@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Empleados') }}</div>

                <div class="card-body">
                    <!-- Tabla de empleados -->
                    <h4>Lista de Empleados</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                                <th>Celular</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí puedes recorrer los empleados y mostrarlos en filas de la tabla -->
                            {{-- @foreach($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->nombres }}</td>
                                <td>{{ $empleado->apellidos }}</td>
                                <td>{{ $empleado->correo }}</td>
                                <td>{{ $empleado->celular }}</td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>

                    <!-- Formulario para registrar empleado -->
                    <h4>Registrar Nuevo Empleado</h4>
                    <form method="POST" action="{{ route('empleados.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input type="text" name="nombres" id="nombres" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo electrónico:</label>
                            <input type="email" name="correo" id="correo" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input type="text" name="celular" id="celular" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
