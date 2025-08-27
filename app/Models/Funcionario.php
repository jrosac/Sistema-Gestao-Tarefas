<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "funcionarios";

    protected $guarded = [
        "id",

    ];

    public function firstname(){
        return explode(" ", $this->nome)[0];
    }

    public function endereco(){
        return $this->hasOne(Endereco::class, "funcionario_id");
    }

    public function tarefas(){
        return $this->belongsToMany(Tarefa::class,'funcionarios_has_tarefas', 'funcionario_id', 'tarefa_id');
    }


}
