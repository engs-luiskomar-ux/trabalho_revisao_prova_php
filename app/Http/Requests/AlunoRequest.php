<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'curso_id' => 'required|integer|exists:cursos,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do aluno é obrigatório.',
            'nome.string' => 'O nome deve ser um texto.',
            'nome.max' => 'O nome deve ter no máximo 255 caracteres.',
            'curso_id.required' => 'O curso é obrigatório.',
            'curso_id.integer' => 'O curso selecionado é inválido.',
            'curso_id.exists' => 'O curso selecionado não existe.',
        ];
    }
}
