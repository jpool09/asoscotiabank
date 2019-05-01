@extends('layouts.app')

@section('logo')
<a class="navbar-brand" href="{{ url('/') }}">
    <span> <img style="height: 30px; margin-right: 10px; margin-left: 5px;" class="img" src="img/Logo.png"> </span>{{ config('app.name', 'Laravel') }}
</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Crear Asociado
                </div>
            
                <div class="card-body">
                    {!! Form::open(['route' => 'associateds.store']) !!}
                        
                        @include('admin.associated.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection