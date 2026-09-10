<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" value="{{ old('nome', $aluno->nome) }}" required>

<label for="curso">Curso:</label>
<input type="text" id="curso" name="curso" value="{{ old('curso', $aluno->curso) }}" required>
