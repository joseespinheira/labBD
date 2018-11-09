<div class="form-group {{ $errors->has('matricula_pessoa') ? 'has-error' : ''}}">
    <label for="matricula_pessoa" class="control-label">{{ 'Matricula Pessoa' }}</label>
    <input class="form-control" name="matricula_pessoa" type="number" id="matricula_pessoa" value="{{ $pessoa->matricula_pessoa or ''}}" required>
    {!! $errors->first('matricula_pessoa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ $pessoa->nome or ''}}" required>
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    <label for="sexo" class="control-label">{{ 'Sexo' }}</label>
    <input class="form-control" name="sexo" type="text" id="sexo" value="{{ $pessoa->sexo or ''}}" required>
    {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
