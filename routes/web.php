<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
})->name("home");

//--------------------------------------------------------

Route::get('/cadastro-funcionario',[FuncionarioController::class,'create'])->name("funcionario.create");

Route::post('/cadastro-funcionario',[FuncionarioController::class,'store'])->name('funcionario.store');

Route::get('/index-funcionario',[FuncionarioController::class,'index'])->name('funcionario.index');

Route::get('funcionario/{id}',[FuncionarioController::class,'show'])->name('funcionario.show');

Route::get('funcionario/{id}/edit',[FuncionarioController::class,'edit'])->name('funcionario.edit');

Route::put('funcionario/{id}',[FuncionarioController::class,'update'])->name('funcionario.update');

// -----------------------------------------------------------



Route::get('/cadastro-tarefa',[ TarefaController::class,'create'])->name("tarefa.create");

Route::get('/index-tarefa',[TarefaController::class,'index'] )->name("tarefa.index");

Route::post('/cadastro-tarefa', [TarefaController::class, 'store'])->name('tarefa.store');

Route::get('/tarefa/{id}',[TarefaController::class,'show'])->name('tarefa.show');

Route::get('tarefa/{id}/edit',[TarefaController::class,'edit'])->name('tarefa.edit');

Route::put('tarefa/{id}',[TarefaController::class,'update'])->name('tarefa.update');
