<?php

namespace App\Controller;

use App\Repository\PlanningRepository;
use App\Entity\Planning;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UtilisateurRepository;
use App\Form\PlanningType;

final class PlanningController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

   #[Route('/dates-disponibles/{medecinId}', name: 'dates_disponibles', methods: ['GET'])]
    public function getDatesDisponibles(int $medecinId, PlanningRepository $planningRepository): JsonResponse
    {
        $plannings = $planningRepository->findByMedecin($medecinId);

        $datesDisponibles = [];
        foreach ($plannings as $planning) {
            $datesDisponibles[] = [
                'date' => $planning->getDateDisponible()->format('Y-m-d'),
            ];
        }

        return $this->json($datesDisponibles);
    }
    #[Route('/planning', name: 'planning_index')]
    public function heure(PlanningRepository $planningRepository): Response
    {
        return $this->render('medecin/planning.html.twig', [
            'plannings' => $planningRepository->findAll(),
        ]);
    }
    #[Route('/planning/create', name: 'planning_create')]

    public function create(Request $request, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $entityManager): Response // Injection de EntityManagerInterface
    {
        $planning = new Planning();
        $form = $this->createForm(PlanningType::class, $planning);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $planning->setMedecin($this->getUser()); // Assumer que l'utilisateur connecté est un médecin
            
            // Utilisation du gestionnaire d'entités injecté
            $entityManager->persist($planning);
            $entityManager->flush();

            $this->addFlash('success', 'Planning créé avec succès !');
            return $this->redirectToRoute('planning_index');
        }

        return $this->render('medecin/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
