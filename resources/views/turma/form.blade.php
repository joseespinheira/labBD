<div class="form-group {{ $errors->has('id_disciplina') ? 'has-error' : ''}}">
    <label for="id_disciplina" class="control-label">{{ 'Id Disciplina' }}</label>
    <input class="form-control" name="id_disciplina" type="number" id="id_disciplina" value="{{ $turma->id_disciplina or ''}}" required>
    {!! $errors->first('id_disciplina', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
    <label for="id_curso" class="control-label">{{ 'Id Curso' }}</label>
    <input class="form-control" name="id_curso" type="number" id="id_curso" value="{{ $turma->id_curso or ''}}" required>
    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ano_semestre') ? 'has-error' : ''}}">
    <label for="ano_semestre" class="control-label">{{ 'Ano Semestre' }}</label>
    <input class="form-control" name="ano_semestre" type="text" id="ano_semestre" value="{{ $turma->ano_semestre or ''}}" required>
    {!! $errors->first('ano_semestre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ $turma->nome or ''}}" required>
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
