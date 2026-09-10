<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" value="{{ old('nome', $aluno->nome) }}" required>
@error('nome')
    <p style="color: red">{{ $message }}</p>
@enderror

<label for="curso">Curso:</label>
<input type="text" id="curso" name="curso" value="{{ old('curso', $aluno->curso) }}" required>
@error('curso')
    <p style="color: red">{{ $message }}</p>
@enderror
