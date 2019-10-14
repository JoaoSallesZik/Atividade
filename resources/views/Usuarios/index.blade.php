@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>RA</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th>Periodo</th>
                                <th>Endereço</th>
                                <th>E-mail</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            @foreach($usuarios as $p)
                            <tr>
                                <td>{{ $p->id }}</td>    
                                <td>{{ $p->RA }}</td> 
                                <td>{{ $p->nome }}</td>    
                                <td>{{ $p->curso }}</td>
                                <td>{{ $p->periodo }}</td>
                                <td>{{ $p->endereco }}</td>
                                <td>{{ $p->email }}</td>
                                <td>
                                    <a href="{{ route('usuarios.edit', $p->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i>Editar</a>
                                    
                                    <form method="POST" action="{{ route('usuarios.destroy', $p->id) }}"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i>Excluir</button>
                                    </form>
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                        
                    </table>
                    <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('usuarios.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo Usuario
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
@endsection