<?php

namespace App\Enum;

enum UtilisateurRole: string
{
    case Patient = 'Patient';
    case Medecin = 'Medecin';
    case DOCTOR = 'doctor';
    case Infirmier = 'Infirmier';
    case Pharmacien = 'Pharmacien';
    case Responsable = 'Responsable';
    case Administrateur = 'Administrateur';
    case FemmeDeMenage = 'Femme de menage';
}