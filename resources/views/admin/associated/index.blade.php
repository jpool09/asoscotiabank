@extends('layouts.app')

@section('logo')
    <a class="navbar-brand" href="{{ url('/') }}">
        <span> <img style="height: 30px; margin-right: 10px; margin-left: 5px;" class="img" src="img/Logo.png"> </span>{{ config('app.name', 'Laravel') }}
    </a>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ Form::open(['route' => 'buscar_aso', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                        <h4>Lista de asociados</h4>
                        <div class="form-group" style="margin-left: 190px;">
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                        </div>
                        <div class="form-group" style="margin-left: 10px;">
                            {{ Form::text('identification', null, ['class' => 'form-control', 'placeholder' => 'Identificación'])}}
                        </div>
                        <button style="margin-left: 10px;" type="submit"
                                class="btn btn-sm btn-secondary float-right">
                            <i class="fas fa-search"></i>
                        </button>
                        <a style="margin-left: 10px;"  href="{{ route('associateds.create') }}"
                           class="btn btn-sm btn-secondary float-right">
                            <i class="fas fa-folder-plus"></i>
                        </a>
                        <a style="margin-left: 10px;" href="{{ route('associateds.index') }}" class="btn btn-sm btn-secondary float-right">
                            <i class="fas fa-sync"></i>
                        </a>
                        {{ Form::close() }}
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Identificación</th>
                                <th>Fecha de ingreso</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($associateds as $associated)
                                <tr>

                                    <td>{{ $associated->name }}</td>
                                    <td>{{ $associated->identification }}</td>
                                    <td>{{ $associated->entry_date }}</td>
                                    <td width="10px">
                                        <a href="{{ route('associateds.show', $associated->id) }}" class="btn btn-sm btn-secondary">
                                            Ver
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('associateds.edit', $associated->id) }}" class="btn btn-sm btn-secondary">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['associateds.destroy', $associated->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                        {!! Form::close() !!}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $associateds->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
