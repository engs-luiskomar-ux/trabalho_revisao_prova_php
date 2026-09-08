<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function() {
    return 'pagina sobre';
});

Route::get('/alunos', function(){
    return 'lista alunos';
});

Route::get('/contato', function(){
    return 'pagina contato';
});

