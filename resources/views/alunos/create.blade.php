@extends('layouts.app')

@section('title', 'Cadastrar aluno')

@section('content')
    <h2>Cadastrar aluno</h2>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        @include('alunos._form')

        <button type="submit">Cadastrar aluno</button>
    </form>
@endsection
