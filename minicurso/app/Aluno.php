<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    
    public function notas()
    {
        return $this->hasMany('App\Nota','id_aluno');
    }

    public function turmas()
    {
        return $this->belongsToMany('App\Turma', 'notas', 'id_aluno', 'id_turma');
    }
    
}
