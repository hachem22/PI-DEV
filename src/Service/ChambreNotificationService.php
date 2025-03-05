<?php
namespace App\Service;

use App\Entity\Chambre;
use App\Entity\Lit;
use App\Entity\EntretientChambre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Messenger\MessageBusInterface;

class ChambreNotificationService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private HubInterface $mercureHub,
        private MessageBusInterface $messageBus
    ) {}

    public function notifierChangementStatutChambre(Chambre $chambre)
    {
        $update = new Update(
            "http://hopital.local/chambres/{$chambre->getId()}",
            json_encode([
                'id' => $chambre->getId(),
                'numero' => $chambre->getNum(),
                'statut' => $chambre->getActive(),
                'type' => $chambre->getType(),
                'lits_occupes' => $this->compterLitsOccupes($chambre),
                'timestamp' => (new \DateTime())->format('Y-m-d H:i:s')
            ])
        );

        $this->mercureHub->publish($update);
    }

    public function verifierEntretienUrgent()
    {
        $entretienRepository = $this->entityManager->getRepository(EntretientChambre::class);
        
        $entretiensCritiques = $entretienRepository->createQueryBuilder('e')
            ->where('e.statut = :statut_critique')
            ->andWhere('e.datedebut <= :maintenant')
            ->setParameter('statut_critique', 'URGENT')
            ->setParameter('maintenant', new \DateTime())
            ->getQuery()
            ->getResult();

        foreach ($entretiensCritiques as $entretien) {
            $this->notifierEntretienUrgent($entretien);
        }
    }

    private function notifierEntretienUrgent(EntretientChambre $entretien)
    {
        $chambre = $entretien->getChambre();
        
        $update = new Update(
            "http://hopital.local/alertes/entretien",
            json_encode([
                'type' => 'ENTRETIEN_URGENT',
                'chambre_id' => $chambre->getId(),
                'chambre_numero' => $chambre->getNum(),
                'details' => $entretien->getDetails(),
                'date_debut' => $entretien->getDatedebut()->format('Y-m-d H:i:s'),
                'niveau' => 'CRITIQUE'
            ])
        );

        $this->mercureHub->publish($update);
    }

    public function surveillerOccupationChambres()
    {
        $chambres = $this->entityManager->getRepository(Chambre::class)->findAll();

        foreach ($chambres as $chambre) {
            $tauxOccupation = $this->calculerTauxOccupation($chambre);
            
            if ($tauxOccupation >= 80) {
                $this->notifierTauxOccupationEleve($chambre, $tauxOccupation);
            }
        }
    }

    private function calculerTauxOccupation(Chambre $chambre): float
    {
        $totalLits = count($chambre->getLits());
        $litsOccupes = $this->compterLitsOccupes($chambre);

        return $totalLits > 0 ? ($litsOccupes / $totalLits) * 100 : 0;
    }

    private function compterLitsOccupes(Chambre $chambre): int
    {
        return count(
            $chambre->getLits()->filter(function(Lit $lit) {
                return $lit->getType() === 'occupe';
            })
        );
    }

    private function notifierTauxOccupationEleve(Chambre $chambre, float $tauxOccupation)
    {
        $update = new Update(
            "http://hopital.local/occupation/chambres",
            json_encode([
                'chambre_id' => $chambre->getId(),
                'chambre_numero' => $chambre->getNum(),
                'taux_occupation' => round($tauxOccupation, 2),
                'message' => "Taux d'occupation élevé pour la chambre {$chambre->getNum()}"
            ])
        );

        $this->mercureHub->publish($update);
    }
}