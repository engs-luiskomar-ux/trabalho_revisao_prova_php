<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::create(['nome' => 'Informática']);
        Curso::create(['nome' => 'Administração']);
        Curso::create(['nome' => 'Enfermagem']);
    }
}
