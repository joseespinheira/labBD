<div class="form-group {{ $errors->has('id_disciplina') ? 'has-error' : ''}}">
    <label for="id_disciplina" class="control-label">{{ 'Id Disciplina' }}</label>
    <input class="form-control" name="id_disciplina" type="number" id="id_disciplina" value="{{ $disciplina->id_disciplina or ''}}" required>
    {!! $errors->first('id_disciplina', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ $disciplina->nome or ''}}" required>
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ementa') ? 'has-error' : ''}}">
    <label for="ementa" class="control-label">{{ 'Ementa' }}</label>
    <textarea class="form-control" rows="5" name="ementa" type="textarea" id="ementa" required>{{ $disciplina->ementa or ''}}</textarea>
    {!! $errors->first('ementa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('matricula_professor') ? 'has-error' : ''}}">
    <label for="matricula_professor" class="control-label">{{ 'Matricula Professor' }}</label>
    <input class="form-control" name="matricula_professor" type="number" id="matricula_professor" value="{{ $disciplina->matricula_professor or ''}}" required>
    {!! $errors->first('matricula_professor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
