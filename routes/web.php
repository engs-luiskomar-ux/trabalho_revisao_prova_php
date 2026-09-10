<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function() {
    return view('home');
});

Route::get('/sobre', function() {
    return 'pagina sobre';
});

Route::get('/contato', function(){
    return 'pagina contato';
});

Route::get('/produto/{$id}', function($id){
    return "Produto escolhido: " . $id;
});

Route::get('/categoria/{$id}', function($id){
    return "Categoria escolhida: " . $id;
});

Route::get('/usuario/{$id}', function($id){
    return "Usuario escolhido: " . $id;
});

Route::get('/alunos/curso/{curso}', [AlunoController::class, 'alunosPorCurso']);
Route::get('/alunos/buscar/{palavra}', [AlunoController::class, 'alunosPorNome']);
Route::get('/alunos/recentes', [AlunoController::class, 'alunosRecentes']);
Route::get('/alunos/quantidade', [AlunoController::class, 'quantidadeAlunos']);

Route::resource('alunos', AlunoController::class);
