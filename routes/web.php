<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/funcionarios/cadastro');
});

Route::get('/listagem', function () {
    return view('/funcionarios/listagem');
});
