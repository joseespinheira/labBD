<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'professors';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'matricula_professor';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricula_professor', 'data_admissao', 'matricula_pessoa'];

    
}
