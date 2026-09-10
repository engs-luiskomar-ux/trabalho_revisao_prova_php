@extends('layouts.app')

@section('title', 'Lista de alunos')

@section('content')
    <h2>Lista de alunos</h2>

    @if (count($alunos) > 0)
        <ul>
            @foreach ($alunos as $aluno)
                <li>{{ $aluno->nome }} - {{ $aluno->curso->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado.</p>
    @endif
@endsection
