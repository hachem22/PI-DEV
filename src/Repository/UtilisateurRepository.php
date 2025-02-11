<?php
namespace App\Repository;
use App\Enum\UtilisateurRole;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    /**
     * Récupère les médecins appartenant à un service spécifique.
     *
     * @param mixed $service L'entité Service ou son identifiant.
     * @return Utilisateur[] Liste des médecins associés à ce service.
     */
    // UtilisateurRepository.php
    public function findMedecinsByService(int $serviceId): array
{
    return $this->createQueryBuilder('u')
        ->andWhere('u.service = :serviceId')
        ->andWhere('u.utilisateurRole = :role')
        ->setParameter('serviceId', $serviceId)
        ->setParameter('role', UtilisateurRole::Medecin)
        ->getQuery()
        ->getResult();
}
}
