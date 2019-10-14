@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $user_nick }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('alunos.update', $usuario->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="RA" class="col-md-2 col-form-label text-md-right">{{ __('RA') }}</label>
                                <div class="col-md-6">
                                    <input id="RA" type="text" class="form-control" name="RA" value="{{ $usuario->RA }}" required>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="nome" class="col-md-2 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ $usuario->nome }}" required>
                                </div>
                            </div>
    

                            <div class="form-group row">
                                <label for="curso" class="col-md-2 col-form-label text-md-right">{{ __('Curso') }}</label>
                                <div class="col-md-6">
                                    <input id="curso" type="text" class="form-control" name="curso" value="{{ $usuario->curso }}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="periodo" class="col-md-2 col-form-label text-md-right">{{ __('Periodo') }}</label>
                                <div class="col-md-6">
                                    <input id="periodo" type="text" class="form-control" name="periodo" value="{{ $usuario->periodo }}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="endereco" class="col-md-2 col-form-label text-md-right">{{ __('Endereço') }}</label>
                                <div class="col-md-6">
                                    <input id="endereco" type="text" class="form-control" name="endereco" value="{{ $usuario->endereco }}" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ $usuario->email }}" required>
                                </div>
                            </div>
        

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection