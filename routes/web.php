<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return 'pagina sobre';
});

Route::get('/contato', function () {
    return 'pagina contato';
});

Route::get('/produto/{$id}', function ($id) {
    return 'Produto escolhido: '.$id;
});

Route::get('/categoria/{$id}', function ($id) {
    return 'Categoria escolhida: '.$id;
});

Route::get('/usuario/{$id}', function ($id) {
    return 'Usuario escolhido: '.$id;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return 'Area do administrador';
    })->middleware('admin')->name('admin');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/alunos/curso/{curso}', [AlunoController::class, 'alunosPorCurso']);
    Route::get('/alunos/buscar/{palavra}', [AlunoController::class, 'alunosPorNome']);
    Route::get('/alunos/recentes', [AlunoController::class, 'alunosRecentes']);
    Route::get('/alunos/quantidade', [AlunoController::class, 'quantidadeAlunos']);

    Route::resource('alunos', AlunoController::class);
});

require __DIR__.'/auth.php';
