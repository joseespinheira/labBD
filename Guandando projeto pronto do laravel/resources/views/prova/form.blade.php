<div class="form-group {{ $errors->has('id_disciplina') ? 'has-error' : ''}}">
    <label for="id_disciplina" class="control-label">{{ 'Id Disciplina' }}</label>
    <input class="form-control" name="id_disciplina" type="number" id="id_disciplina" value="{{ $prova->id_disciplina or ''}}" required>
    {!! $errors->first('id_disciplina', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
    <label for="id_curso" class="control-label">{{ 'Id Curso' }}</label>
    <input class="form-control" name="id_curso" type="number" id="id_curso" value="{{ $prova->id_curso or ''}}" required>
    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ano_semestre') ? 'has-error' : ''}}">
    <label for="ano_semestre" class="control-label">{{ 'Ano Semestre' }}</label>
    <input class="form-control" name="ano_semestre" type="text" id="ano_semestre" value="{{ $prova->ano_semestre or ''}}" required>
    {!! $errors->first('ano_semestre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula_aluno') ? 'has-error' : ''}}">
    <label for="matricula_aluno" class="control-label">{{ 'Matricula Aluno' }}</label>
    <input class="form-control" name="matricula_aluno" type="number" id="matricula_aluno" value="{{ $prova->matricula_aluno or ''}}" required>
    {!! $errors->first('matricula_aluno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
    <label for="descricao" class="control-label">{{ 'Descricao' }}</label>
    <input class="form-control" name="descricao" type="text" id="descricao" value="{{ $prova->descricao or ''}}" required>
    {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nota') ? 'has-error' : ''}}">
    <label for="nota" class="control-label">{{ 'Nota' }}</label>
    <input class="form-control" name="nota" type="number" id="nota" value="{{ $prova->nota or ''}}" required>
    {!! $errors->first('nota', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
