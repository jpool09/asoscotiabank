@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Información del asociado: {{ $associated->name }}
                        <a   href="{{ route('associateds.index') }}"
                             class="btn btn-sm btn-secondary float-right">
                            Atras
                        </a>
                    </div>

                    <div class="card-body">
                        <p><strong>Nombre:</strong> {{ $associated->name }} </p>
                        <p><strong>Identificación:</strong> {{ $associated->identification }} </p>
                        <p><strong>Fecha de Ingreso:</strong> {{ $associated->entry_date }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
