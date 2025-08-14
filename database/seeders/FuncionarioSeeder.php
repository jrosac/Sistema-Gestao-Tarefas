<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB ::table("funcionarios")->insert([
            "nome" => "Claudio Santos Menezes",
            "cpf" => "018.123.456-78",
            "cargo" => "Gerente de Projetos",
            "data_nascimento" => Carbon::create(2000,5,20)
        ]);

        DB ::table("funcionarios")->insert([
            "nome" => "Robertinho da Silva",
            "cpf" => "023.456.789-10",
            "cargo" => "Assessor de TI",
            "data_nascimento" => Carbon::create(1980,5,20)
        ]);

        DB ::table("funcionarios")->insert([
            "nome" => "João Rosa",
            "cpf" => "018.181.055-72",
            "cargo" => "Estagiario",
            "data_nascimento" => Carbon::create(2002,11,10)
        ]);
    }
}
