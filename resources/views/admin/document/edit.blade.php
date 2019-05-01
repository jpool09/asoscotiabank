@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        Editar documento
                </div>
            
                <div class="card-body">
                    {!! Form::model($document, ['route' => ['documents.update', $document->id], 'method' => 'PUT', 'files' => true]) !!}
                        
                        @include('admin.document.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection