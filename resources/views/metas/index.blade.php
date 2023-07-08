@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Lista de Metas') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{ __('Meta') }}</th>
                                <th>{{ __('Duración') }}</th>
                                <th>{{ __('ID Empleado') }}</th>
                                <th>{{ __('Acciones') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($metas as $meta)
                                <tr>
                                    <td>{{ $meta->meta }}</td>
                                    <td>{{ $meta->duracion }}</td>
                                    <td>{{ $meta->id_empleado }}</td>
                                    <td>
                                        <a href="{{ route('metas.edit', $meta) }}" class="btn btn-primary">{{ __('Editar') }}</a>
                                        <a href="{{ route('metas.delete', $meta) }}" class="btn btn-danger">{{ __('Eliminar') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
