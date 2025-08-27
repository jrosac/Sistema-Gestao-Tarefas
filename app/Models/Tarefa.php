<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = "tarefas";

    protected $guarded = [
        'id',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class,"status_id");
    }

    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class, 'funcionarios_has_tarefas', 'tarefa_id', 'funcionario_id');
    }

}
