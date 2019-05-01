@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Ver documento
                </div>
            
                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $document->name }} </p>
                    <p><strong>Imagen</strong><img class="img-thumbnail" src="{{ Storage::disk('public')->url($document->image) }}" alt="imagenprueba"> </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection