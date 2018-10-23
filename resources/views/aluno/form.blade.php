<div class="form-group {{ $errors->has('matricula_aluno') ? 'has-error' : ''}}">
    <label for="matricula_aluno" class="control-label">{{ 'Matricula Aluno' }}</label>
    <input class="form-control" name="matricula_aluno" type="number" id="matricula_aluno" value="{{ $aluno->matricula_aluno or ''}}" required>
    {!! $errors->first('matricula_aluno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
    <label for="id_curso" class="control-label">{{ 'Id Curso' }}</label>
    <input class="form-control" name="id_curso" type="number" id="id_curso" value="{{ $aluno->id_curso or ''}}" required>
    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula_pessoa') ? 'has-error' : ''}}">
    <label for="matricula_pessoa" class="control-label">{{ 'Matricula Pessoa' }}</label>
    <input class="form-control" name="matricula_pessoa" type="number" id="matricula_pessoa" value="{{ $aluno->matricula_pessoa or ''}}" required>
    {!! $errors->first('matricula_pessoa', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
