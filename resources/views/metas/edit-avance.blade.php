@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Editar Avance') }}</div>

                    <div class="card-body">
                        <form action="{{ route('metas.avances.update', ['avance' => $avance->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="avance">{{ __('Avance') }}</label>
                                <input type="text" name="avance" id="avance" class="form-control" value="{{ $avance->avance }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Actualizar Avance') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
