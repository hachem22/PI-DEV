<?php

namespace App\Enum;

enum MedecinSpecialite: string
{
    case Generaliste = 'Généraliste';
    case Ophtalmologue = 'Ophtalmologue';
    case Cardiologue = 'Cardiologue';
    case Pneumologue = 'Pneumologue';
    case Gastroenterologue = 'Gastro-entérologue';
    case Neurologue = 'Neurologue';
    case Psychiatre = 'Psychiatre';
}