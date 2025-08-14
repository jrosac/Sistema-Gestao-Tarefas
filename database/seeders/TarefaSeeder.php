<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::TABLE("tarefas")->insert([
            "titulo" => "implementar o sistema de autenticação",
            "descricao" => "implementar o sistema de autenticação utilizando o laravel breeze",
            "data_entrega" => Carbon::create(2025, 10, 15),
            "status_id" => 1,

        ]);

        DB::TABLE("tarefas")->insert([
            "titulo" => "Implementar sistema de navegação de páginas",
            "descricao" => "implementar o sistema de navegação de páginas utilizando o laravel pagination",
            "data_entrega" => Carbon::create(2025, 11, 15),
            "status_id" => 2,

        ]);

        DB::TABLE("tarefas")->insert([
            "titulo" => "Atualizar a navbar da landing page",
            "descricao" => "Atualizar a navbar da landing page para incluir links para as páginas de login e registro",
            "data_entrega" => Carbon::create(2025, 11, 15),
            "status_id" => 3,

        ]);
    }
}
