@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Registrar Avance') }}</div>

                    <div class="card-body">
                        <form action="{{ route('metas.avances.store', $meta->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="avance">{{ __('Avance') }}</label>
                                <input type="text" name="avance" id="avance" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Registrar Avance') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
