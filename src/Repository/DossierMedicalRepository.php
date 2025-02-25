<?php

namespace App\Repository;

use App\Entity\DossierMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DossierMedical>
 */
class DossierMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DossierMedical::class);
    }
    public function findWithVisites(int $id): ?DossierMedical
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.visites', 'v')
            ->addSelect('v')
            ->where('d.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
    
}
