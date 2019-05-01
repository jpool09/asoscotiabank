<div class="form-group">
    {{ Form::label('name', 'Nombre del asociado') }}
    {{ Form::text ('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('identification', 'Identificación') }}
    {{ Form::text ('identification', null, ['class' => 'form-control', 'id' => 'identification']) }}
</div>
<div class="form-group">
    {{ Form::label('entry_date', 'Fecha de ingreso') }}
    {{ Form::date('entry_date', null, ['class' => 'form-control', 'id' => 'date', 'style' => 'width: 140px;']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a style= "color: white;" type="submit"
       class="btn btn-sm btn-primary" href="{{ route('associateds.index') }}">
        Cancelar
    </a>
</div>

