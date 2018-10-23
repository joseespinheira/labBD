<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'turmas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_disciplina,id_curso,ano_semestre';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_disciplina', 'id_curso', 'ano_semestre', 'nome'];

    
}
