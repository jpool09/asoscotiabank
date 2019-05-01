@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1 style="color: white;">
                    Busqueda de documentos
                    {{ Form::open(['route' => 'buscar_doc', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                        </div>
                        <div class="form-group" style="margin-left: 10px;">
                            {{ Form::date('entry_date', null, ['class' => 'form-control', 'placeholder' => 'Fecha'])}}
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
                <table class="table table-hover table-striped" style="background-color: white;">
                    <tbody>
                        @foreach($documents as $document)
                        <tr>
                            <td>{{ $document->id }}</td>
                            <td>{{ $document->name }}</td>
                            <td>{{ $document->image }}</td>
                            <td>{{ $document->comment }}</td>
                            <td>{{ $document->entry_date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            {{ $documents->render() }}
        </div>
    </div>
</div>
@endsection