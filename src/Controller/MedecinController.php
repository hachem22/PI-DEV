<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Repository\RendezVousRepository;
use App\Repository\PlanningRepository;

use App\Repository\UtilisateurRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class MedecinController extends AbstractController
{
    #[Route('/rendezvous/accepter/{id}', name: 'accepter_rendezvous', methods: ['POST'])]
    public function accepterRendezVous(int $id, RendezVousRepository $rendezVousRepository, EntityManagerInterface $entityManager, PlanningRepository $planningRepository): Response
    {
        $rendezVous = $rendezVousRepository->find($id);

        if (!$rendezVous) {
            throw $this->createNotFoundException('Le rendez-vous n\'existe pas.');
        }

        // Récupérer les informations du rendez-vous
        $medecin = $rendezVous->getMedecin();
        $date = $rendezVous->getDate();
        $heure = $rendezVous->getHeure();

        // Mettre à jour l'état du rendez-vous
        $rendezVous->setRendezVousStatus('Confirme');

        // Mettre à jour l'entité Planning
        $planning = $planningRepository->findOneBy([
            'medecin' => $medecin,
            'dateDisponible' => $date,
        ]);

        if ($planning) {
            $planning->ajouterTempsReserver($heure);
            $entityManager->persist($planning);
        }

        $entityManager->persist($rendezVous);
        $entityManager->flush();

        return $this->redirectToRoute('gere_rendezvous');
    }

    #[Route('/rendezvous/refuser/{id}', name: 'refuser_rendezvous', methods: ['POST'])]
    public function refuserRendezVous(int $id, RendezVousRepository $rendezVousRepository, EntityManagerInterface $entityManager): Response
    {
        $rendezVous = $rendezVousRepository->find($id);

        if (!$rendezVous) {
            throw $this->createNotFoundException('Le rendez-vous n\'existe pas.');
        }

        // Mettre à jour l'état du rendez-vous
        $rendezVous->setRendezVousStatus('Annule');
        $entityManager->persist($rendezVous);
        $entityManager->flush();

        return $this->redirectToRoute('gere_rendezvous');
    }

    #[Route('/get-heures-disponibles', name: 'get_heures_disponibles', methods: ['GET'])]
    public function getHeuresDisponibles(Request $request, PlanningRepository $planningRepository): JsonResponse
    {
        $medecinId = $request->query->get('medecinId');
        $date = new \DateTime($request->query->get('date'));

        $planning = $planningRepository->findOneBy([
            'medecin' => $medecinId,
            'dateDisponible' => $date,
        ]);

        $initialTimes = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00'];
        $reservedTimes = $planning ? $planning->getTempsReserver() : [];
        $availableTimes = array_diff($initialTimes, is_array($reservedTimes) ? $reservedTimes : []);

        return new JsonResponse(array_values($availableTimes));
    }

    #[Route('/medecins/par-service/{serviceId}', name: 'medecins_par_service', methods: ['GET'])]
    public function getMedecinsParService(int $serviceId, UtilisateurRepository $utilisateurRepository): JsonResponse
    {
        $medecins = $utilisateurRepository->findByService($serviceId);
    
        $data = array_map(function ($medecin) {
            return [
                'id' => $medecin->getId(),
                'nom' => $medecin->getNom(),
            ];
        }, $medecins);
    
        return $this->json($data);
    }
}