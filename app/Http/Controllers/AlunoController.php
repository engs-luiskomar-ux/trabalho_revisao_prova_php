<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Aluno::class);

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
        Gate::authorize('view', $aluno);

        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        Gate::authorize('create', Aluno::class);

        $aluno = new Aluno;
        $cursos = Curso::all();

        return view('alunos.create', compact('aluno', 'cursos'));
    }

    public function store(AlunoRequest $request)
    {
        Gate::authorize('create', Aluno::class);

        $dados = $request->validated();
        $dados['user_id'] = auth()->id();

        Aluno::create($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno criado com sucesso!');
    }

    public function edit(Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        $cursos = Curso::all();

        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        $dados = $request->validated();

        $aluno->update($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno alterado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        Gate::authorize('delete', $aluno);

        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno excluído com sucesso!');
    }
}
