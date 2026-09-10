<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aluno::create(['nome' => 'Ana Souza', 'curso_id' => 1]);
        Aluno::create(['nome' => 'Bruno Lima', 'curso_id' => 2]);
        Aluno::create(['nome' => 'Carlos Silva', 'curso_id' => 1]);
        Aluno::create(['nome' => 'Daniela Alves', 'curso_id' => 3]);
        Aluno::create(['nome' => 'Eduardo Santos', 'curso_id' => 2]);
        Aluno::create(['nome' => 'Fernanda Costa', 'curso_id' => 1]);
        Aluno::create(['nome' => 'Gabriel Rocha', 'curso_id' => 3]);
        Aluno::create(['nome' => 'Helena Martins', 'curso_id' => 2]);
        Aluno::create(['nome' => 'Igor Pereira', 'curso_id' => 1]);
        Aluno::create(['nome' => 'Juliana Oliveira', 'curso_id' => 3]);
    }
}
