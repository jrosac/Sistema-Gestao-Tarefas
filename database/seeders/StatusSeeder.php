<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){

    DB::table("status")->insert([
            "nome" => "A fazer",

    ]);
    DB::table("status")->insert([
        "nome"=> "Fazendo",
    ]);

    DB::table("status")->insert([
        "nome"=> "Feito",
    ]);
 }
}
