@extends('layouts.app')

@section('title', 'Detalhes do aluno')

@section('content')
    <h2>Detalhes do aluno</h2>
    <p>Nome: {{ $aluno->nome }}</p>
    <p>Curso: {{ $aluno->curso }}</p>
@endsection
