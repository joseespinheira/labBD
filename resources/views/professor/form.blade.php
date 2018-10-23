<div class="form-group {{ $errors->has('matricula_professor') ? 'has-error' : ''}}">
    <label for="matricula_professor" class="control-label">{{ 'Matricula Professor' }}</label>
    <input class="form-control" name="matricula_professor" type="number" id="matricula_professor" value="{{ $professor->matricula_professor or ''}}" required>
    {!! $errors->first('matricula_professor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('data_admissao') ? 'has-error' : ''}}">
    <label for="data_admissao" class="control-label">{{ 'Data Admissao' }}</label>
    <input class="form-control" name="data_admissao" type="date" id="data_admissao" value="{{ $professor->data_admissao or ''}}" required>
    {!! $errors->first('data_admissao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula_pessoa') ? 'has-error' : ''}}">
    <label for="matricula_pessoa" class="control-label">{{ 'Matricula Pessoa' }}</label>
    <input class="form-control" name="matricula_pessoa" type="number" id="matricula_pessoa" value="{{ $professor->matricula_pessoa or ''}}" required>
    {!! $errors->first('matricula_pessoa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
