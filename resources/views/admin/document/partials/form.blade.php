<div class="form-group">
    {{ Form::label('name', 'Nombre del documento') }}
    {{ Form::text ('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('image', 'Imagen') }}
    {{ Form::file ('image') }}
</div>
<div class="form-group">
    {{ Form::label('entry_date', 'Fecha de ingreso') }}
    {{ Form::date('entry_date', null, ['class' => 'form-control', 'id' => 'date', 'style' => 'width: 160px; margin-bottom: 30px;']) }}
</div>

<div class="form-group">
    <select name='area' id="area" class="form-control" style="width: 200px; margin-bottom: 30px;">
    <option value="area">seleccione el area</option>
    </select>

    <select name='category' id="category" class="form-control" style="width: 220px; margin-bottom: 30px;">
    <option value="category">selecccione la categoria</option>
    </select>

    <select name='subcategory' id="subcategory" class="form-control" style="width: 240px; margin-bottom: 30px;">
    <option value="subcategory">selecccione la subcategoria</option>
    </select>
</div>

<div class="form-group">
    {{ Form::label('comment', 'Comentario') }}
    {{ Form::textarea('comment', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a style= "color: white;" type="submit"
    class="btn btn-sm btn-primary" href="{{ route('documents.index') }}">
        Cancelar
    </a>
</div>
