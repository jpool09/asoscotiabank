@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1 style="color: white;">
                    Busqueda de asociados
                    {{ Form::open(['route' => 'buscar_aso', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                        </div>
                        <div class="form-group" style="margin-left: 10px;">
                            {{ Form::text('identification', null, ['class' => 'form-control', 'placeholder' => 'Cedula'])}}
                        </div>
                        <a style="margin-left: 10px;" type="submit"
                            class="btn btn-sm btn-secondary float-right">
                            Buscar
                        </a>
                    {{ Form::close() }}
                </h1>
            </div>
        </div>
        
        <div class="col-md-8">
                <table class="table table-hover " style="background-color: white;">
                <div class="card-body">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Cedula</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($associateds as $associated)
                        <tr>
                            <td>{{ $associated->id }}</td>
                            <td>{{ $associated->name }}</td>
                            <td>{{ $associated->identification }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            {{ $associateds->render() }}
        </div>
    </div>
</div>
@endsection