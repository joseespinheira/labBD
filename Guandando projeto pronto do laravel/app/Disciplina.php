<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'disciplinas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id_disciplina';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_disciplina', 'nome', 'ementa', 'matricula_professor'];

    
}
