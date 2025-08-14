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
    }
}
