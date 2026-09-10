<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" value="{{ old('nome', $aluno->nome) }}" required>
@error('nome')
    <p style="color: red">{{ $message }}</p>
@enderror

<label for="curso_id">Curso:</label>
<select id="curso_id" name="curso_id" required>
    @foreach ($cursos as $curso)
        <option value="{{ $curso->id }}" @selected($curso->id == old('curso_id', $aluno->curso_id))>
            {{ $curso->nome }}
        </option>
    @endforeach
</select>
@error('curso_id')
    <p style="color: red">{{ $message }}</p>
@enderror
