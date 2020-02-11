<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
    //
    public static function alunos(){
        return Aluno::orderBy('nome','ASC')->get();
    }

    public static function turmas(){
        return Turma::orderBy('disciplina','ASC')->get();
    }
}
