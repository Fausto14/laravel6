<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    public function alunos()
    {
        return $this->belongsToMany('App\Aluno', 'notas', 'id_turma', 'id_aluno');
    }
}
