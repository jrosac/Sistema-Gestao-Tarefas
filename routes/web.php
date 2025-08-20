<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
})->name("home");

//--------------------------------------------------------

Route::get('/cadastro-funcionario',[FuncionarioController::class,'create'])->name("funcionario.create");

Route::get('/index-funcionario',[FuncionarioController::class,'index'])->name('funcionario.index');

Route::get('funcionario/{id}',[FuncionarioController::class,'show'])->name('funcionario.show');


Route::get('/atualiza_funcionario', function () {
    return view('/funcionarios/atualizacao');
})->name("funcionario.atualizacao");

Route::post('/atualiza_funcionario', function () {

    return redirect('/pagina_funcionario');
});

// -----------------------------------------------------------



Route::get('/cadastro-tarefa',[ TarefaController::class,'create'])->name("tarefa.create");

Route::get('/index-tarefa',[TarefaController::class,'index'] )->name("tarefa.index");

Route::post('/cadastro-tarefa', [TarefaController::class, 'store'])->name('tarefa.store');

Route::get('/tarefa/{id}',[TarefaController::class,'show'])->name('tarefa.show');

Route::get('/atualiza_tarefa', function () {
    return view('/tarefas/atualizacao');
})->name("tarefa.atualizacao");
