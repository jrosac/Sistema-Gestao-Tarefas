<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FuncionarioHasTarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("funcionarios_has_tarefas")->insert([
            "funcionario_id" => 1,
            "tarefa_id" => 1,
        ]);

        DB::table("funcionarios_has_tarefas")->insert([
            "funcionario_id" => 1,
            "tarefa_id" => 2,
        ]);

        DB::table("funcionarios_has_tarefas")->insert([
            "funcionario_id" => 1,
            "tarefa_id" => 3,
        ]);

        DB::table("funcionarios_has_tarefas")->insert([
            "funcionario_id" => 2,
            "tarefa_id" => 3,
        ]);

        DB::table("funcionarios_has_tarefas")->insert([
            "funcionario_id" => 3,
            "tarefa_id" => 3,
        ]);
    }
}
