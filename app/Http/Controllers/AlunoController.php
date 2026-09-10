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
        return Aluno::where('nome', 'like', '%'.$palavra.'%')->get();
    }

    public function alunosRecentes()
    {
        return Aluno::where('created_at', '>=', now()->subDays(7))->get();
    }

    public function quantidadeAlunos()
    {
        return 'Quantidade de alunos: '.Aluno::count();
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        $aluno = new Aluno;

        return view('alunos.create', compact('aluno'));
    }

    public function store(Request $request)
    {
        $dados = $request->only(['nome', 'curso']);

        Aluno::create($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno criado com sucesso!');
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $dados = $request->only(['nome', 'curso']);

        $aluno->update($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno alterado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno excluído com sucesso!');
    }
}
