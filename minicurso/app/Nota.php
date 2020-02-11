<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Nota extends Model
{
    //
    
    public function aluno()
    {
        return $this->belongsTo('App\Aluno','id_aluno');
    }

    public function turma()
    {
        return $this->belongsTo('App\Turma', 'id_turma');
    }

    public function media(){
        $media = 0.0;
        if($this->ap1 != NULL && $this->ap2 != NULL && $this->ap3 != NULL){
            $media =  ($this->ap1 + $this->ap2 + $this->ap3)/3.0;
        }

        return number_format($media,2,'.',',');
    }

    public function sit(){
        if($this->ap1 != NULL && $this->ap2 != NULL && $this->ap3 != NULL){
            return ($this->media() >= 5.0) ? "APR" : "REP";
        }
        else{
            return "MAT";
        }
        
    }
    
}
