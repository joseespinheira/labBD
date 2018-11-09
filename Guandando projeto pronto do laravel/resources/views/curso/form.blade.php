<div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
    <label for="id_curso" class="control-label">{{ 'Id Curso' }}</label>
    <input class="form-control" name="id_curso" type="number" id="id_curso" value="{{ $curso->id_curso or ''}}" required>
    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ $curso->nome or ''}}" required>
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
