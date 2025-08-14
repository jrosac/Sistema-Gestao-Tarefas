<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("enderecos")->insert([
            "logradouro" => "Rua do carvalho dourado",
            "numero" => "123",
            "cidade" => "Porto de galinhas",
            "estado" => "Pernambuco",
            "funcionario_id" => 1,

        ]);
    }
}
