@extends('layouts.app')

@section('title', 'Editar aluno')

@section('content')
    <h2>Editar aluno</h2>
    <p>Editando o aluno {{ $aluno->nome }}.</p>
@endsection
