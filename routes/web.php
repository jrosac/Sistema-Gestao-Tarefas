<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastro', function () {
    return view('/funcionarios/cadastro');
});

Route::post('/cadastro', function () {

    return redirect('/listagem');
});

Route::get('/listagem', function () {
    return view('/funcionarios/listagem');
});
