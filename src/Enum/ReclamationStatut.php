<?php
namespace App\Enum;

enum ReclamationStatut: string {
    case EN_ATTENTE = 'en attente';
    case EN_COURS = 'en cours';
    case RESOLUE = 'résolue';
    case REJETE = 'rejeté';
    public static function fromString(string $value): self
    {
        return match ($value) {
            'En cours' => self::EN_COURS,
            'Résolu' => self::RESOLU,
            'Rejeté' => self::REJETE,
            default => throw new \InvalidArgumentException("Statut invalide : $value"),
        };
    }
}
