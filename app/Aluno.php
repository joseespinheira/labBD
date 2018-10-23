<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alunos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'matricula_aluno';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricula_aluno', 'id_curso', 'matricula_pessoa'];

    
}
