@extends('layouts.app')

@section('content')
    <div class="panel panel-default" style=>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ Form::open(['route' => 'buscar_doc', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                        <h4>Lista de documentos</h4>
                        <div class="form-group" style="margin-left: 240px;">
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                        </div>
                        <div class="form-group" style="margin-left: 10px;">
                            {{ Form::text('area', null, ['class' => 'form-control', 'placeholder' => 'Área', 'style' => 'width: 140px;'])}}
                        </div>
                        <button style="margin-left: 10px;" type="submit"
                                class="btn btn-sm btn-secondary float-right">
                            <i class="fas fa-search"></i>
                        </button>
                        <a style="margin-left: 10px;"  href="{{ route('documents.create') }}"
                           class="btn btn-sm btn-secondary float-right">
                            <i class="fas fa-folder-plus"></i>
                        </a>
                        <a style="margin-left: 10px;" href="{{ route('documents.index') }}" class="btn btn-sm btn-secondary float-right">
                            <i class="fas fa-sync"></i>
                        </a>
                        {{ Form::close() }}
                    </div>

                    <div class="panel panel-default" >
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Área</th>
                                <th>Categoría</th>
                                <th>SubCategoría</th>
                                <th colspan="5">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($documents as $document)
                                <tr>

                                    <td>{{ $document->name }}</td>
                                    <td>{{ $document->area }}</td>
                                    <td>{{ $document->category }}</td>
                                    <td>{{ $document->subcategory }}</td>
                                <!-- <td width="10px">
                                    <a href="{{ route('documents.show', $document->id) }}" class="btn btn-sm btn-secondary">
                                        Ver
                                    </a>
                                </td> -->
                                    <td width="10px">
                                        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-sm btn-secondary">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['documents.destroy', $document->id], 'method' => 'DELETE']) !!}
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
                        {{ $documents->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
