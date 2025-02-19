<?php

namespace App\Enum;

enum MedicamentEnum: string
{
    case DOLIPRANE = 'Doliprane';
    case ASPIRINE = 'Aspirine';
    case IBUPROFENE = 'Ibuprofène';

    public static function getChoices(): array
    {
        return [
            'Doliprane' => self::DOLIPRANE,
            'Aspirine' => self::ASPIRINE,
            'Ibuprofène' => self::IBUPROFENE,
        ];
    }
}
