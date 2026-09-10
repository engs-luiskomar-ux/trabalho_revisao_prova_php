<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aluno::create(['nome' => 'Ana Souza', 'curso' => 'Informática']);
        Aluno::create(['nome' => 'Bruno Lima', 'curso' => 'Administração']);
        Aluno::create(['nome' => 'Carlos Silva', 'curso' => 'Informática']);
        Aluno::create(['nome' => 'Daniela Alves', 'curso' => 'Enfermagem']);
        Aluno::create(['nome' => 'Eduardo Santos', 'curso' => 'Administração']);
        Aluno::create(['nome' => 'Fernanda Costa', 'curso' => 'Informática']);
        Aluno::create(['nome' => 'Gabriel Rocha', 'curso' => 'Enfermagem']);
        Aluno::create(['nome' => 'Helena Martins', 'curso' => 'Administração']);
        Aluno::create(['nome' => 'Igor Pereira', 'curso' => 'Informática']);
        Aluno::create(['nome' => 'Juliana Oliveira', 'curso' => 'Enfermagem']);
    }
}
