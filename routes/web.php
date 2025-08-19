<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
})->name("home");



Route::get('/cadastro', function () {
    return view('/funcionarios/cadastro');
})->name("funcionario.cadastro");

Route::post('/cadastro', function () {

    return redirect('/listagem');
});

Route::get('/listagem', function () {
    return view('/funcionarios/listagem');
})->name('funcionario.listagem');

Route::get('/pagina_funcionario', function () {
    return view('/funcionarios/pagina_individual');
});

Route::get('/atualiza_funcionario', function () {
    return view('/funcionarios/atualizacao');
})->name("funcionario.atualizacao");

Route::post('/atualiza_funcionario', function () {

    return redirect('/pagina_funcionario');
});



Route::get('/cadastro_tarefa', function () {
    return view('/tarefas/cadastro');
})->name("tarefa.cadastro");

Route::post('/cadastro_tarefa', function () {

    return redirect('/listagem_tarefa');
});

Route::get('/listagem_tarefa', function () {
    return view('/tarefas/listagem');
})->name("tarefa.listagem");

Route::get('/pagina_individual_tarefa', function () {
    return view('/tarefas/pagina_individual');
})->name("tarefa.pagina_individual");

Route::get('/atualiza_tarefa', function () {
    return view('/tarefas/atualizacao');
})->name("tarefa.atualizacao");
