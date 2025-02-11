<?php

namespace App\Enum;

enum RendezVousStatus: string
{
    case EnAttente = 'En Attente';
    case Accepter = 'Accepter';
    case refuser = 'refuser';
    
}