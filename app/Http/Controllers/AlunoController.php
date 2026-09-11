<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('alunos.index');
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