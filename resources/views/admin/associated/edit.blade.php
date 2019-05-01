@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        Editar asociado
                </div>
            
                <div class="card-body">
                    {!! Form::model($associated, ['route' => ['associateds.update', $associated->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.associated.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection