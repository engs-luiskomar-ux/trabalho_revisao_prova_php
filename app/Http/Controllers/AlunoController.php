<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function alunosPorCurso($curso)
    {
        return Aluno::where('curso', $curso)->get();
    }

    public function alunosPorNome($palavra)
    {
        return Aluno::where('nome', 'like', '%' . $palavra . '%')->get();
    }

    public function alunosRecentes()
    {
        return Aluno::where('created_at', '>=', now()->subDays(7))->get();
    }

    public function quantidadeAlunos()
    {
        return 'Quantidade de alunos: ' . Aluno::count();
    }

    public function show($id)
    {
        return view('alunos.show', compact('id'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado';
    }

    public function edit($id)
    {
        return view('alunos.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return 'Aluno ' . $id . ' atualizado';
    }

    public function destroy($id)
    {
        return 'Aluno ' . $id . ' excluído';
    }
}
