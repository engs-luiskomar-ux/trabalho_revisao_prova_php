<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function show($id)
    {
        return 'Mostrando o aluno ' . $id;
    }

    public function create()
    {
        return 'Formulário para cadastrar aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado';
    }

    public function edit($id)
    {
        return 'Formulário para editar o aluno ' . $id;
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