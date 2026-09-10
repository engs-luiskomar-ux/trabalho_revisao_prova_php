<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case PROFESSOR = 'professor';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrador',
            self::PROFESSOR => 'Professor',
        };
    }
}
