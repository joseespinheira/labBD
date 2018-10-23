<div class="form-group {{ $errors->has('id_disciplina') ? 'has-error' : ''}}">
    <label for="id_disciplina" class="control-label">{{ 'Id Disciplina' }}</label>
    <input class="form-control" name="id_disciplina" type="number" id="id_disciplina" value="{{ $monitorium->id_disciplina or ''}}" required>
    {!! $errors->first('id_disciplina', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
    <label for="id_curso" class="control-label">{{ 'Id Curso' }}</label>
    <input class="form-control" name="id_curso" type="number" id="id_curso" value="{{ $monitorium->id_curso or ''}}" required>
    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ano_semestre') ? 'has-error' : ''}}">
    <label for="ano_semestre" class="control-label">{{ 'Ano Semestre' }}</label>
    <input class="form-control" name="ano_semestre" type="text" id="ano_semestre" value="{{ $monitorium->ano_semestre or ''}}" required>
    {!! $errors->first('ano_semestre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula_aluno') ? 'has-error' : ''}}">
    <label for="matricula_aluno" class="control-label">{{ 'Matricula Aluno' }}</label>
    <input class="form-control" name="matricula_aluno" type="number" id="matricula_aluno" value="{{ $monitorium->matricula_aluno or ''}}" required>
    {!! $errors->first('matricula_aluno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula_professor') ? 'has-error' : ''}}">
    <label for="matricula_professor" class="control-label">{{ 'Matricula Professor' }}</label>
    <input class="form-control" name="matricula_professor" type="number" id="matricula_professor" value="{{ $monitorium->matricula_professor or ''}}" required>
    {!! $errors->first('matricula_professor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
