<?php

namespace App\Enum;

enum UtilisateurRole: string
{
    case Patient = 'Patient';
    case Medecin = 'Medecin';
    case Infirmier = 'Infirmier';
    case Pharmacien = 'Pharmacien';
    case Responsable = 'Responsable';
    case Administrateur = 'Administrateur';
    case FemmeDeMenage = 'Femme de menage';
    case ADMIN = 'admin';
    case USER = 'user';
    case DOCTOR = 'doctor';
}