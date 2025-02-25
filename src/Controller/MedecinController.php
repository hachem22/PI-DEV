<?php

namespace App\Controller;

use App\Entity\Planning;
use App\Repository\RendezVousRepository;
use App\Entity\RendezVous;
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
   
    #[Route('/accepter-rendezvous/{id}', name: 'accepter_rendezvous')]
public function accepterRendezVous(RendezVous $rendezVous, EntityManagerInterface $entityManager, PlanningRepository $planningRepository): Response
{
    $rendezVous->setRendezVousStatus('Confirme');

    $date = $rendezVous->getDate();
    $heure = $rendezVous->getHeure();
    $medecin = $rendezVous->getMedecin();

    $planning = $planningRepository->findOneBy([
        'medecin' => $medecin,
        'dateDisponible' => $date,
    ]);

    if (!$planning) {
        $planning = new Planning();
        $planning->setMedecin($medecin);
        $planning->setDateDisponible($date);
    }

    $planning->ajouterTempsReserver($heure);
    $entityManager->persist($rendezVous);
    $entityManager->persist($planning);
    $entityManager->flush();

    $this->addFlash('success', 'Le rendez-vous a été accepté avec succès.');

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