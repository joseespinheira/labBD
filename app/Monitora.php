<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitora extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'monitoras';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_disciplina,id_curso,ano_semestre,matricula_aluno';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_disciplina', 'id_curso', 'ano_semestre', 'matricula_aluno', 'matricula_professor'];

    
}
