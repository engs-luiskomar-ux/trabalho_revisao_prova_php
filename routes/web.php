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

Route::get('/produto/$id', function($id){
    return "Produto escolhido: " . $id;
});

Route::get('/categoria/id', function($id){
    return "Categoria escolhida: " . $id;
});

Route::get('/usuario/$id', function($id){
    return "Usuario escolhido: " . $id;
});

