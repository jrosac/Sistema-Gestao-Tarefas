<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
})->name("home");

//--------------------------------------------------------

Route::get('/cadastro-funcionario', function () {
    return view('/funcionarios/create');
})->name("funcionario.create");

Route::post('/cadastro', function () {

    return redirect('/listagem');
});

Route::get('/index-funcionario',[FuncionarioController::class,'index'])->name('funcionario.index');

Route::get('/pagina_funcionario', function () {
    return view('/funcionarios/pagina_individual');
});

Route::get('/atualiza_funcionario', function () {
    return view('/funcionarios/atualizacao');
})->name("funcionario.atualizacao");

Route::post('/atualiza_funcionario', function () {

    return redirect('/pagina_funcionario');
});

// -----------------------------------------------------------



Route::get('/cadastro-tarefa', function () {
    return view('/tarefas/create');
})->name("tarefa.create");

Route::post('/cadastro_tarefa', function () {

    return redirect('/listagem_tarefa');
});

Route::get('/index-tarefa',[TarefaController::class,'index'] )->name("tarefa.index");

Route::get('/pagina_individual_tarefa', function () {
    return view('/tarefas/pagina_individual');
})->name("tarefa.pagina_individual");

Route::get('/atualiza_tarefa', function () {
    return view('/tarefas/atualizacao');
})->name("tarefa.atualizacao");
