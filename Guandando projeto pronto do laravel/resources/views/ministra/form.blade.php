<div class="form-group {{ $errors->has('id_disciplina') ? 'has-error' : ''}}">
    <label for="id_disciplina" class="control-label">{{ 'Id Disciplina' }}</label>
    <input class="form-control" name="id_disciplina" type="number" id="id_disciplina" value="{{ $ministra->id_disciplina or ''}}" required>
    {!! $errors->first('id_disciplina', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
    <label for="id_curso" class="control-label">{{ 'Id Curso' }}</label>
    <input class="form-control" name="id_curso" type="number" id="id_curso" value="{{ $ministra->id_curso or ''}}" required>
    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ano_semestre') ? 'has-error' : ''}}">
    <label for="ano_semestre" class="control-label">{{ 'Ano Semestre' }}</label>
    <input class="form-control" name="ano_semestre" type="text" id="ano_semestre" value="{{ $ministra->ano_semestre or ''}}" required>
    {!! $errors->first('ano_semestre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula_professor') ? 'has-error' : ''}}">
    <label for="matricula_professor" class="control-label">{{ 'Matricula Professor' }}</label>
    <input class="form-control" name="matricula_professor" type="number" id="matricula_professor" value="{{ $ministra->matricula_professor or ''}}" required>
    {!! $errors->first('matricula_professor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
