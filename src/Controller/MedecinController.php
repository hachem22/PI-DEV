<?php

// MedecinController.php
namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MedecinController extends AbstractController
{
    #[Route('/medecins/par-service/{serviceId}', name: 'medecins_par_service', methods: ['GET'])]
    public function getMedecinsParService(int $serviceId, UtilisateurRepository $utilisateurRepository): JsonResponse
    {
        // Récupérez les médecins par service (vous devrez adapter cette logique)
        $medecins = $utilisateurRepository->findBy(['service' => $serviceId]);

        // Formatez les médecins en JSON
        $data = array_map(function ($medecin) {
            return [
                'id' => $medecin->getId(),
                'nom' => $medecin->getNom(),
            ];
        }, $medecins);

        return $this->json($data);
    }
}
