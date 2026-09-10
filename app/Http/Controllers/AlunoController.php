<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('curso')->get();

        return view('alunos.index', compact('alunos'));
    }

    public function alunosPorCurso($curso)
    {
        return Aluno::whereHas('curso', function ($query) use ($curso) {
            $query->where('nome', $curso);
        })->get();
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
        $cursos = Curso::all();

        return view('alunos.create', compact('aluno', 'cursos'));
    }

    public function store(AlunoRequest $request)
    {
        $dados = $request->validated();
        $dados['user_id'] = auth()->id();

        Aluno::create($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno criado com sucesso!');
    }

    public function edit(Aluno $aluno)
    {
        $cursos = Curso::all();

        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        $dados = $request->validated();

        $aluno->update($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno alterado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno excluído com sucesso!');
    }
}
