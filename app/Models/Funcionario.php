<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "funcionarios";

    public function endereco(){
        return $this->hasOne(Endereco::class, "funcionario_id");
    }

    public function tarefas(){
        return $this->belongsToMany(Tarefa::class,'funcionarios_has_tarefas', 'funcionario_id', 'tarefa_id');
    }
}
