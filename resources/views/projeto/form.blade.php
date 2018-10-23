<div class="form-group {{ $errors->has('id_projeto') ? 'has-error' : ''}}">
    <label for="id_projeto" class="control-label">{{ 'Id Projeto' }}</label>
    <input class="form-control" name="id_projeto" type="number" id="id_projeto" value="{{ $projeto->id_projeto or ''}}" required>
    {!! $errors->first('id_projeto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ $projeto->titulo or ''}}" required>
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('conceito') ? 'has-error' : ''}}">
    <label for="conceito" class="control-label">{{ 'Conceito' }}</label>
    <select name="conceito" class="form-control" id="conceito" >
    @foreach (json_decode('{"bom": "Bom", "ruim": "Ruim", "regular": "Regular"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($projeto->conceito) && $projeto->conceito == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('conceito', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
