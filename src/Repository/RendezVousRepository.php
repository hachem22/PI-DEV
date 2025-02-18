<?php

namespace App\Repository;

use App\Entity\RendezVous;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<RendezVous>
 */
class RendezVousRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RendezVous::class);
    }

    /**
     * Récupère les rendez-vous en attente d'une sélection d'heure
     *
     * @return RendezVous[]
     */
    public function findRendezVousEnAttenteSelectionHeure(): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.rendezVousStatus = :status')
            ->setParameter('status', 'En attente de sélection de l\'heure')
            ->orderBy('r.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les heures disponibles pour un jour donné
     *
     * @param \DateTimeInterface $date
     * @return array Liste des heures disponibles (format H:i)
     */
    public function findHeuresDisponibles(\DateTimeInterface $date): array
{
    // Liste des heures possibles entre 08h00 et 17h00
    $heuresPossibles = [];
    for ($i = 8; $i <= 17; $i++) {
        $heuresPossibles[] = sprintf('%02d:00', $i);
    }

    // Récupérer les heures déjà réservées pour cette date
    $qb = $this->createQueryBuilder('r')
        ->select('p.tempsReserver')
        ->join('r.planning', 'p')
        ->where('r.date = :date')
        ->setParameter('date', $date->format('Y-m-d'))
        ->getQuery()
        ->getResult();

    // Transformer le résultat en tableau simple
    $heuresReservees = array_map(fn($row) => $row['tempsReserver'], $qb);

    // Retourner uniquement les heures disponibles
    return array_diff($heuresPossibles, $heuresReservees);
}
}
